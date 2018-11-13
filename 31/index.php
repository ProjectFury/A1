<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 31</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 31</h1>';
            $email = "jmoreno@gmail.com";
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                 echo '"' . $email . '" = Email Válido';
            }
            else 
            {
                 echo '"' . $email . '" = Email Inválido';
            }
            
        ?>
    </body>
</html>
