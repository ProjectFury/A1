<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 34</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 34</h1>';
            function multiply_two_lists($x, $y) {
              $a = explode(' ',trim($x));
              $b = explode(' ',trim($y));
              foreach($a as $key=>$value){
                  $output[$key] = $a[$key]*$b[$key];
              }
              return implode(' ',$output);
          }
          echo multiply_two_lists(("32 76 14"), ("2 87 5"));
            
        ?>
    </body>
</html>
