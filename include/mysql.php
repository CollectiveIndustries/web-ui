<?php

/***************************************************************
*							      							   *
*  This file is used for the connection of the MySQL database  *
*							     							   *
***************************************************************/

//connection variables

//TODO create db_con.sql for auto-gen with ci-mangos-install.py
$user='root';
$pass='123qwe';
$addy='localhost';
$world='mangos-ci-world-serenity';
$table='account';
$account='mangos-ci-account';

//server connection
$mysql=mysql_connect($addy,$user,$pass) or die("Could not connect to MySQL: ".mysql_error());

//database world connection
$dbw=mysql_select_db($world,$mysql) or die("Database selection failed: ".mysql_errno()." : ".mysql_error());

//database character connection
$dbc=mysql_select_db($account,$mysql) or die("Database selection failed: ".mysql_errno()." : ".mysql_error());

//account results
//$resulta=mysql_db_query($dbc. "SELECT * FROM account") or die("Query failed = " . mysql_errno() . ":" . mysql_error());

?>
