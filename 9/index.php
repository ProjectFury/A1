<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 9</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 9</h1>';
            if (!empty($_SERVER['HTTPS'])) 
            {
              echo 'La página usa el protocolo HTTPS';
            }
            else
            {
            echo 'La página usa el protocolo HTTP';
            }
            
        ?>
    </body>
</html>
