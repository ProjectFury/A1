<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 25</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 25</h1>';
            $var1 = 19;
            $var2 = 95;

            echo '<br> Los valores previos a la modificación son:<br>';
            echo 'Valor de la variable 1 ='.$var1.'<br> valor de la variable 2='.$var2;

            $temp = $var1;
            $var1 = $var2;
            $var2 = $temp;

            echo '<br>El valor de las variables después de la modificación es: <br>';
            echo 'Valor de la variable 1 ='.$var1.'<br> valor de la variable 2='.$var2;

            
        ?>
    </body>
</html>
