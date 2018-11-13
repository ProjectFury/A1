<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 12</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 12</h1>';
            $srccode = file('http://www.example.com/');
            foreach ($srccode as $nfila => $fila)
             {
                    echo "Línea Número :{$nfila}: " . htmlspecialchars($fila) . "<br>";
             }  
            
        ?>
    </body>
</html>
