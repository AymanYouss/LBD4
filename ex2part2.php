<?php
                    $arr=array("PHP"=>"http://www.php.net",
                    "MySQL"=>"http://www.mysql.org",
                    "SQLite"=>"http://www.sqlite.org",
                    "HTML"=>"https://www.w3schools.com/html/default.asp",
                    "CSS"=>"https://www.w3schools.com/css/default.asp");
                    echo "<br> refresh each time to see the randomness of the picking <br>";
                    $randomElem = array_rand($arr);
                    echo $randomElem."  =>  $arr[$randomElem]"; 
                ?>