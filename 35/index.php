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
            echo '<h1>Activitat 35</h1>';
           function find_Pairs($nums, $pair_sum) {
                $nums_pairs = "";
                for ($i = 0; $i <= count($nums); $i++) {
                   for ($j = $i + 1; $j < count($nums); $j++) {
                      if ($nums[$i] + $nums[$j] == (int)$pair_sum) {
                         $nums_pairs .= $nums[$i] . "," . $nums[$j] . ";";
                      }
                   }
                }
                return $nums_pairs;
              }
              $nums = array(0,1,2,3,4,5,6);
              echo find_Pairs($nums, 5)."<br>";
              echo find_Pairs($nums, 2);

        ?>
    </body>
</html>