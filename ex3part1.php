<?php
                $notes = array(13, 14, 19, 19, 9, 17, 20,11, 18, 17, 19, 12, 20, 10, 8);

                

                function validationCounter(array $a){
                    $counter = 0;
                    foreach($a as $value){
                        if($value > 10 ){
                            $counter++;
                        }
                    }
                    return $counter;
                }

                function display(array $a){
                    foreach($a as $element){
                        echo " - ".$element;
                    }
                    echo " -";
                }

                function meanVal(array $a){
                    $sum=0;
                    foreach($a as $val){
                        $sum+=$val;
                    }
                    return $sum/count($a);
                }

                function counterTwenty(array $a){
                    $counter = 0;
                    foreach($a as $value){
                        if($value == 20){
                            $counter++;
                        }
                    }
                    return $counter;
                }
                function getElement(array $arr,  int $n){
                    for($i = 0; $i < count($arr); $i++){
                        if($arr[$i] == $n){
                            return $i;
                        }
                    }
                    return "Element does not exist";
                    
                }

                function bubbleSortNotes($arr) {
                    $size = count($arr)-1;
                    for ($i=0; $i<$size; $i++) {
                        for ($j=0; $j<$size-$i; $j++) {
                            $k = $j+1;
                            if ($arr[$k] < $arr[$j]) {
                                // Swap elements at indices: $j, $k
                                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
                            }
                        }
                    }
                    return $arr;
                }

                

                

                echo "<br>1. Table elements <br>";
                display($notes);

                echo "<br>2. Mean :".meanVal($notes);

                echo "<br>3. Number of studnents passing  ".validationCounter($notes);


                echo "<br>4. Number of 20s: ".counterTwenty($notes);

                echo "<br>5. Sorting the array :";
                display(bubbleSortNotes($notes));

                echo "<br>6. Index of element 17 is : ".getElement($notes, 17);

            ?>