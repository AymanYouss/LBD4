<?php

                $arr = array(13, -130, 8, -192, 19, 9, 317, -210,140, 141, -318, 197, 189, 112, 20);


                function twoIndiceSort(array $a){
                    for($i = 0; $i < count($a); $i++){
                        $u = $i;
                        for($j = $i; $j < count($a); $j++){
                            if($a[$u] < $a[$j]){
                                $u = $j;
                            }
                        }
                        $z = $a[$i];
                        $a[$i] = $a[$u];
                        $a[$u] =  $z;
                    }

                    return $a;
                }
                

                
                print_r(twoIndiceSort($arr));

                


            ?>