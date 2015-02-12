<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Monthly Report</title>

    </head>
    <body>
        <form action="updating_mr.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file2" id="file2">
            <input type="number" name="cols" placeholder="Column Count" id="cols" required>
            <input type="submit" value="Upload Report" name="submit">
        </form>
    </body>
</html>
