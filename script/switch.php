<?php
/**
 * Script to turn ON or OFF specific plugwise device
 * 
 * input:
 * * command
 * * address
 */

$command = $_GET['command'];
$address = $_GET['address'];
$array	 = $_GET['array'];

// Grab data from specified device
$foo = shell_exec('sudo perl /var/www/suvi/script/turn_on_off.pl ' . $command . ' ' . $address . ' ' . $array);

if($command == 'history') {
	// grab history
	$foo = trim(preg_replace('/\s+/', ' ', $foo));

	preg_match('(\[(.*?)\])', $foo, $matches);

	preg_match_all("(\'(.*?)\')", $matches[1], $hasil);

	$current = $hasil[1][5];
	$units = $hasil[1][7];

	// set HTTP header
	header("Content-type: text/xml; charset=utf-8");
	echo '<?xml version="1.0" encoding="UTF-8"?>';
	echo '<plugwise><result current="'.$current.'" units="'.$units.'"/></plugwise>';
}elseif($command == 'status') {
	// grab status
	$foo = trim(preg_replace('/\s+/', ' ', $foo));

	preg_match('(\[(.*?)\])', $foo, $matches);

	preg_match_all("(\'(.*?)\')", $matches[1], $hasil);

	$status = $hasil[1][5];
	$array = $hasil[1][7];
	$datetime = $hasil[1][9];

	// set HTTP header
	header("Content-type: text/xml; charset=utf-8");
	echo '<?xml version="1.0" encoding="UTF-8"?>';
	echo '<plugwise><result status="'.$status.'" array="'.$array.'" datetime="'.$datetime.'"/></plugwise>';
}elseif($command == 'on' || $command == 'off'){
	// update the database
	$conn = mysql_connect('localhost', 'root', 'secret123') or die(mysql_error());
	mysql_select_db('suvi');

	// strip '2' prefix
	$address = substr($address, 1);

	if(mysql_query("UPDATE device SET status = '$command' WHERE address = '$address'"))
		echo "Updated.";
	else
		echo mysql_error();

	mysql_close($conn);
}else{
	echo $foo;
}

//$VAR1 = { 'body' => [ 'device', '29C5129', 'type', 'output', 'onoff', 'off', 'address', '4011', 'datetime', '201402181035' ], 'schema' => 'plugwise.basic' };
?>