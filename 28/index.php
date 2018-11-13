<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 28</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 28</h1>';
            function limpiezaduplicados($valores) {
                $num = array_values(array_unique($valores));
                return $num ;
              }
            $array = array(1,2,2,3,3,4,4,5);
            print_r(limpiezaduplicados($array));
            
        ?>
    </body>
</html>
