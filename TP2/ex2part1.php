<?php
                $moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre',
                    'Octobre', 'Novembre', 'Décembre');

                
                echo "<br>for loop<br>";
                for($i = 1; $i <= count($moisFr); $i++ ){
                    echo $i." - ".$moisFr[$i]."<br>";
                }


                echo "<br> foreach :<br>";
                $j = 1;
                foreach($moisFr as $month){
                    
                    echo $j." - ".$month."<br>";
                    $j++;
                }


                echo "<br>Ce mois :<br>";
                echo $moisFr[intval(date('m'))];


                echo "<br>mois precedent:<br>";
                echo $moisFr[intval(date('m')) - 1];
                echo "<br>";
                $moisFr2 = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 13=>'Juillet', 'Aout', 'Septembre',
                    'Octobre', 'Novembre', 'Décembre');

                foreach($moisFr2 as $key => $val){
                    echo "$val"." ";
                }
            ?>