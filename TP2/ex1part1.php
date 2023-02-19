<?php
                $arr = array(1, 1, 7, 8, 5, 4, 5, 9,  3, 4, 5, 1, 1, 9);


                for($i = 0; $i < count($arr); $i++){
                    echo $arr[$i]." ";
                }

                echo "<br>";
                sort($arr);

                for($i = 0; $i < count($arr); $i++){
                    echo $arr[$i]." ";
                }

                $length = count($arr);
                for($j = 0; $j < $length -1; $j++){
                    if($arr[$j] == $arr[$j +1]){
                        unset($arr[$j]);
                    }
                    
                }
                echo "<br>";
                foreach($arr as $element){
                    echo "$element"." ";
                }

            ?>