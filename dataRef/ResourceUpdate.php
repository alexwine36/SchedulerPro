<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResourceUpdate
 *
 * @author alexanderwine
 */
include_once 'objects/Resource.php';



//Database Variables
$resc = new Resource($db);


$stmt = $resc->read();

while ($row_resc = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row_resc);
    echo "<br> Row extracted: $res_name ";
    $txt .= "<item>"
            . "<name>$res_name"
            . "</name>"
            . "<description>Resource.php"
            . "</description>"
            . "<id>$res_id"
            . "</id>"
            . "</item>";
}
?>