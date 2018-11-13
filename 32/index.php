<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 32</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 32</h1>';
            for ($i = 1; $i < 7; $i++) {
                for ($j = 1; $j < 7; $j++) {
                    if ($j == 1) {
                        echo str_pad($i*$j, 2, " ", STR_PAD_LEFT);
                    } else {
                         echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
                    }
                }
            }
            
        ?>
    </body>
</html>
