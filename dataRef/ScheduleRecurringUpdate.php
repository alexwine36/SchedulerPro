<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Include Database Files
include_once 'objects/ScheduleRecurring.php';



//Database Variables
$schrec = new ScheduleRecurring($db);


$stmt = $schrec->read();

while ($row_schrec = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row_schrec);
    echo "<br> Row extracted: $sch_rec_name ";
    $txt .= "<item>"
            . "<name>$sch_rec_name"
            . "</name>"
            . "<description>ScheduleRecurring.php"
            . "</description>"
            . "<id>$sch_rec_id"
            . "</id>"
            . "</item>";
}