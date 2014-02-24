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

$string = "Sending history... Response: $VAR1 = { 'body' => [ 'device', '29C5129', 'type', 'energy', 'current', '0', 'units', 'kWh', 'datetime', '201402080200' ], 'schema' => 'plugwise.basic' };";

if($command == 'history') {
	
	preg_match('(\[(.*?)\])', $string, $matches);

	preg_match_all("(\'(.*?)\')", $matches[1], $hasil);

	$current = $hasil[1][5];
	$units = $hasil[1][7];

	echo $current . ' ' . $units;
}else{
	echo $foo;
}
?>