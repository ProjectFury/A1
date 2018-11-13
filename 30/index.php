<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 30</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 30</h1>';
            $primes = array();
            $is_prime_no = false;
            for ($i = 2; $i<100; $i++) {
                $is_prime_no = true; 
                for ($j = 2; $j<=($i/2); $j++) {
                    if ($i%$j==0) {
                        $is_prime_no = false;
                        break;
                    }
                }
                if ($is_prime_no) {
                    array_push($primes,$i);
                }
                if (count($primes)==100) {
                    break;
                }
            }       
            echo array_sum($primes);
            
        ?>
    </body>
</html>
