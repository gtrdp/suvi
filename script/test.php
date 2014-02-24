#!/usr/bin/php
<?php

$hello = mysql_connect('localhost', 'root', 'secret123') or die(mysql_error());
mysql_select_db('suvi');

$address = "8FC922";
$array = 4069;
$current = 0.001;

// insert data
mysql_query("INSERT INTO history(device_address, array, current) VALUES('$address', $array, $current)") or die(mysql_error());

mysql_close($hello);
?>