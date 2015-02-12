<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$host = "localhost";
$uname = "root";
$pass = "root";
$database = "schedulerprodb";

$connection = mysql_connect($host, $uname, $pass)
        or die("Database Connection Failed");
$selectdb = mysql_select_db($database) or die("Database could not be selected");
$result = mysql_select_db($database)
        or die("database cannot be selected <br>");

session_start();

?>