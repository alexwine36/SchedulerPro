<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'includes/database.php';
echo "Database Included <br>";
$database = new Database();
echo "New Database Connection Created<br>";
$db = $database->getConnection();
echo "Database Connected<br>";



$myfile = fopen('dataRef/ls.xml', 'w') or die("Unable to open file!");
$txt = "<?xml version='1.0' encoding='UTF-8'?>"
        . "<pages>";

include_once 'dataRef/ContactUpdate.php';
//echo 'Contact Update Success';
include_once 'dataRef/ScheduleRecurringUpdate.php';

include_once 'dataRef/ResourceUpdate.php';

$txt .= "</pages>";

fwrite($myfile, $txt);
fclose($myfile);
?>