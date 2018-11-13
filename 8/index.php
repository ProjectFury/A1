<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 8</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 8</h1>';
            $url = 'http://toni.cesnuria.com/php/php-basic-exercises.php';
            $url=parse_url($url);
            echo '<div>List of components : Scheme, Host, Path</div>';
            echo '<div>Expected output:</div>';
            echo '<div>Scheme : '.$url['scheme']."</div>";
            echo '<div>Host : '.$url['host'].'</div>';
            echo '<div>Path : '.$url['path'].'</div>';            
        ?>
    </body>
</html>
