<table border="3">

                <?php

                    echo '<tr>';
                    echo '<td ></td>';
                    for($k = 2; $k <= 10; $k++){
                        echo '<td >'.$k.'</td>';
                    }
                    echo '</tr>';

                    
                    for($i = 2; $i<=10; $i++){
                        if($i%2 == 0){
                            echo '<tr>';

                            echo '<td >'.$i.'</td>';
                            for($j = 2; $j<= 10; $j++){
                                echo '<td>'.($j * $i).'</td>';
                            }
                            echo '</tr>';

                        }
                        else{

                            echo '<tr>';

                            echo '<td >'.$i.'</td>';
                            for($j = 2; $j<= 10; $j++){
                                echo '<td>'.($j * $i).'</td>';
                            }
                            echo '</tr>';

                        }
                        

                    }
                    ?>


                </table>