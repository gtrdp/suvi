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

echo $command.$address;

$foo = shell_exec('sudo perl /var/www/suvi/perl/turn_on_off.pl ' . $command . ' ' . $address);
echo $foo;
?>