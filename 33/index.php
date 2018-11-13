<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 33</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 33</h1>';
            function find_non_repeat($word) {
              $chr = null;
              for ($i = 0; $i <= strlen($word); $i++) {
                 if (substr_count($word, substr($word, $i, 1)) == 1) {
                    return substr($word, $i, 1);
                 }
              }
            }

            echo find_non_repeat("Gruyere")."<br>";
            echo find_non_repeat("Gouda");
            
        ?>
    </body>
</html>
