<?php
/**
 * Script to turn ON or OFF specific plugwise device
 * 
 * input:
 * * status
 * * address
 */

$status = $_GET['status'];
$address = $_GET['address'];

echo $status.$address;

$foo = shell_exec('sudo perl /var/www/suvi/perl/turn_on_off.pl ' . $status . ' ' . $address);
echo $foo;

echo shell_exec('whoami');
?>