<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 4</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 4</h1>';
            echo '<h2>Please input your name:</h2>';
            echo '<form method="POST" action="'.$_SERVER['PHP_SELF'].'"><div><input type="text" name="name"><input type="submit" name="Submit" value="Submit Name"></div><div id="res"></div></form>';
            if(isset($_POST['name']) && !empty($_POST['name'])) {
                echo $_POST['name'];
            }
            
        ?>
    </body>
</html>
