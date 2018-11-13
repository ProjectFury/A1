<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 13</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 13</h1>';
            $file = basename($_SERVER['PHP_SELF']);
            $lmodif = filemtime($file);
            echo "Nombre del fichero: " . $file . "<br>";
            echo "Modificado por última vez : " . date("l, dS F, Y, h:ia", $lmodif)."\n";

            
        ?>
    </body>
</html>
