<div class="container">
                <?php
                    $arr = array("ayman" => 2, 
                                "aya" => 3,
                                "sdfds" => 19.7,
                                "omar" => 20,
                                "howa" => 0);

                    
                foreach($arr as $key => $val){
                    echo "$key a $val ans.<br>";
                } 

                ?>

                <table border="3">
                    <?php
                        $arr = array("ayman" => 2, 
                        "aya" => 3,
                        "sdfds" => 19.7,
                        "omar" => 20,
                        "howa" => 0);

                        foreach($arr as $key => $val){
                            echo '<tr>';
                            echo '<td>'.$key.'</td>';
                            echo '<td>'.$val.'</td>';
                            echo '</tr>';
                        }
                    ?>
                </table>
        </div>