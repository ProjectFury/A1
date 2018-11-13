<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 29</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 29</h1>';
            function caddentro($cad1, $cad2) {
                $cad2length = strlen($cad2);
                 $cad1length = strlen($cad1);
                 $comienzo = $cad1length-$cad2length-1;
                 if (substr($cad1, $cad1length-$cad2length, $cad2length) == $cad2) {
                    return "";
                 } 
                 else 
                 {
                    return "no ";
                 }
              }
              echo 'La palabra campo ' . caddentro('Barcelona',"campo").'está dentro de la palabra Barcelona<br>';
              echo 'La palabra campo ' . caddentro('hipocampo','campo').'está dentro de la palabra hipocampo.';
            
        ?>
    </body>
</html>
