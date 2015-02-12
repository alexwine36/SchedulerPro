<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo '<br>Contact Update Accessed';
include_once 'objects/Contact.php';
echo '<br>File included';
$contact = new Contact($db);

$stmtcon = $contact->read();

while ($row_contact = $stmtcon->fetch(PDO::FETCH_ASSOC)) {
    extract($row_contact);
    
    echo "<br> Row extracted: $con_first_name $con_last_name";
    $txt .= "<item>"
            . "<name>$con_first_name $con_last_name $con_main_phone $con_email"
            . "</name>"
            . "<description>Contact.php"
            . "</description>"
            . "<id>$con_id"
            . "</id>"
            . "</item>";
}
?>