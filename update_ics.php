<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
$rooms = array("http://www.icalx.com/public/mmmcabq/Arts__Crafts_Room_3_Calendar.ics",
    "http://www.icalx.com/public/mmmcabq/Social_Hall_East_Calendar.ics",
    "http://www.icalx.com/public/mmmcabq/Van_2_Calendar.ics",
    "http://www.icalx.com/public/mmmcabq/Gym_Court_East_Calendar.ics",
    "http://www.icalx.com/public/mmmcabq/Computer_Lab_Calendar.ics",
    "http://www.icalx.com/public/mmmcabq/Multipurpose_Room_4_Calendar.ics",
    "http://www.icalx.com/public/mmmcabq/MMMC_Calendar.ics",
    "http://www.icalx.com/public/mmmcabq/Spraypark_Calendar.ics",
    "http://www.icalx.com/public/mmmcabq/SittingCard_Room_Calendar.ics",
    "http://www.icalx.com/public/mmmcabq/Multipurpose_Room_5_Calendar.ics",
    "http://www.icalx.com/public/mmmcabq/Gym_Court_West_Calendar.ics",
    "http://www.icalx.com/public/mmmcabq/Lobby_Calendar.ics",
    "http://www.icalx.com/public/mmmcabq/Social_Hall_West_Calendar.ics",
    "http://www.icalx.com/public/mmmcabq/Van_1_Calendar.ics");

$arrayLength = count($rooms);
for ($x = 0; $x < $arrayLength; $x++) {
    $y = $x + 1;
    echo '<br><br><br>';
    echo "File ";
    echo $y;
    echo "<br><br><br>";
    echo readfile($rooms[$x]);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

    </body>
</html>
