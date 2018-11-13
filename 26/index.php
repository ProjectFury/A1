<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 26</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 26</h1>';
            function armstrong($n) {
              $length = strlen($n);
              $res = 0;
              $n = (string)$n;
              for ($i = 0; $i < $length; $i++) {
                $res = $res + pow((string)$n{$i},$length);
              }
              if ((string)$res == (string)$n) {
                return "";
              } else {
                return "no ";
              }
            }
            echo 'El número 153 '.armstrong(153) . 'es un número de Armstrong.<br>';
            echo 'El número 17 '.armstrong(17) . 'es un número de Armstrong<br>';
            echo 'El número 1995 '.armstrong(1995). 'es un número de Armstrong.<br>';
            
        ?>
    </body>
</html>
