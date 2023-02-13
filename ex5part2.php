<?php

                    $capitales = array("Maroc" => "Rabat" , "Allemagne" => "Berlin" , "Serbie" => "Belgrade" , "Brésil" => "Brasilia" , "Slovaquie" => "Bratislava" , "Italie" => "Rome" , "Venezuela" => "Caracas" , "Moldavie" => "Chisinau" , "Guyana" => "Georgetown" , "Viêt Nam" => "Hanoï" , "Zimbabwe" => "Harare" , "Cuba" => "La Havane" , "Pays-Bas" => "LaHaye" , "Finlande" => "Helsinki" );

                    foreach($capitales as $key => $val){
                        echo "$key"." capital is $val <br>";
                    }

                    

                    echo '<table border="1">';
                    echo '<tr><th>Pays</th><th>capitale</th></tr>';
                    foreach($capitales as $key => $value){
                        echo '<tr>';
                        echo '<td>'.$key.'</td>';
                        echo '<td>'.$value.'</td>';
                        echo '</tr>';
                    }
                    echo '</table>';


                ?>


                <form method="post">
                    Please input the city :
                    <br>
                    <div>
                        <input type="text" name="inp" id="inp" /><br/>
                        <input type="submit" name="" id="">
                    </div>
                </form>

                <?php

                    

                    if(array_key_exists('inp',$_POST)){
                        $a = $_POST['inp'];
                        if(array_key_exists($a, $capitales)){
                            
                            echo "The capital is:  $capitales[$a]";
                        } else{
                            echo "Country not found.";
                        }
                    }

                ?>