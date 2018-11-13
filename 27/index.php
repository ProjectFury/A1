<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat 27</title>
    </head>
    <body>
        <?php
            echo '<h1>Activitat 27</h1>';
            function convpalnum($pal) {
            $temp = explode(';',$pal);
            $res = '';
            foreach($temp as $paln){
                switch(trim($paln)){
                    case 'cero':
                        $res .= '0';
                        break;
                    case 'uno':
                        $res .= '1';
                        break;
                    case 'dos':
                        $res .= '2';
                        break;
                    case 'tres':
                        $res .= '3';
                        break;
                    case 'cuatro':
                        $res .= '4';
                        break;
                    case 'cinco':
                        $res .= '5';
                        break;
                    case 'seis':
                        $res .= '6';
                        break;
                    case 'siete':
                        $res .= '7';
                        break;
                    case 'ocho':
                        $res .= '8';
                        break;
                    case 'nueve':
                        $res .= '9';
                        break;    
                }
            }
            return $res;
        }

        echo convpalnum('cero;nueve;ocho;siete;seis;cinco;cuatro;tres;dos;uno');
            
        ?>
    </body>
</html>
