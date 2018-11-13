<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 14</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 14</h1>';
            $file = basename($_SERVER['PHP_SELF']); 
            $nlines = count(file($file)); 
            echo "El archivo " . $file . " tiene " . $nlines . " líneas.";

            
        ?>
    </body>
</html>
