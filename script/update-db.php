<?php
/**
 * Script to update suvi database with recent data from all devices
 * 	step:
 *  	1. fetch all registered device
 *   	2. for each device:
 *    		a. fetch current array (n)
 *      	b. get history of n-2
 *       	c. store it in the database
 */

/**
 * Get Current array from specified address
 * @param  string $address [description]
 * @return [type]          [description]
 */
function get_current_array($address = '') {

	// Grab data from specified device
	$foo = shell_exec('sudo perl /var/www/suvi/script/turn_on_off.pl status ' . $address);

	// grab status
	$foo = trim(preg_replace('/\s+/', ' ', $foo));

	preg_match('(\[(.*?)\])', $foo, $matches);

	preg_match_all("(\'(.*?)\')", $matches[1], $hasil);

	$status = $hasil[1][5];
	$array = $hasil[1][7];
	$datetime = $hasil[1][9];

	return array('datetime' => $datetime, 'array' => $array);
}

/**
 * Get history from specified address and array
 * @param  string $address [description]
 * @param  string $array   [description]
 * @return [type]          [description]
 */
function get_history($address = '', $array = '') {
	// Grab data from specified device
	$foo = shell_exec('sudo perl /var/www/suvi/script/turn_on_off.pl history ' . $address . ' ' . $array);
	
	// grab history
	$foo = trim(preg_replace('/\s+/', ' ', $foo));

	preg_match('(\[(.*?)\])', $foo, $matches);

	preg_match_all("(\'(.*?)\')", $matches[1], $hasil);

	$current = $hasil[1][5];
	$units = $hasil[1][7];

	return array('current' => $current, 'units' => $units);
}

/**
 * Main Program starts here
 */
$conn = mysql_connect('localhost', 'root', 'secret123') or die(mysql_error());
mysql_select_db('suvi');

// get all node
$result = mysql_query('SELECT DISTINCT * FROM device');

// main loop
while ($row = mysql_fetch_object($result)) {
	// add '2' as prefix
	$device_address = '2'.$row->address;

	// get current array for each
	$current_array = get_current_array($device_address);

	// continue only if returned data is not null
	if($current_array['datetime'] != NULL) {
		// parse variable
		$device_datetime = $current_array['datetime'];
		$array_to_fetch = $current_array['array'] - 2;

		// get n-2 history
		$history = get_history($device_address, $array_to_fetch);

		// continue only if not null
		if($history['current'] != NULL) {
			$device_current = $history['current'];
			
			// remove '2' prefix
			$device_address = substr($device_address, 1); 

			// insert to database
			$query = 	"INSERT INTO history (device_address, array, device_datetime, current) ".
						"VALUES ('$device_address', $array_to_fetch, '$device_datetime', '$device_current')";

			if(mysql_query($query))
				echo 'History has been successfully inserted to DB!' . "\xA";
			else
				die(mysql_error());
		}
	}
}

// close mysql connection
mysql_close($conn);
?>