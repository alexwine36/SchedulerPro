<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SchedulerPro Homepage</title>
        <?php
        include_once 'xml_update.php';
        ?>
    </head>
    <body>
        <h1>Update Files</h1>
        <form action="update.php" method="post">
            <input type="submit" value="Update"/>
        </form>
        <form action="find.php" method="post">
            <input type="submit" value="Find"/>
        </form>
    </body>
</html>
