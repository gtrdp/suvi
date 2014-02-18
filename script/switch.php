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

echo $command.$address;

$foo = shell_exec('sudo perl /var/www/suvi/script/turn_on_off.pl ' . $command . ' ' . $address . ' ' . $array);

// if($command == 'history') {
// 	$foo = preg_replace('/\s+/', '', $foo);
// 	var_dump(preg_match('(\[(.*?)\])', $foo, $matches));
// 	echo $matches[1];

// 	var_dump(preg_match_all("(\'(.*?)\')", $matches[1], $hasil));
// 	var_dump($hasil);
// }else{
// 	echo $foo;
// }
?>