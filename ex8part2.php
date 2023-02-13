<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $modules = array("Et123" => array("Nom" => "AB", "Prenom" => "AC", "Notes" => array("module1" => 15,"module2" => 20,"module3" => 14,"module4" => 17,"module5" => 5,"module6" => 2) ),
    "Et676" => array("Nom" => "dfg", "Prenom" => "fff", "Notes" => array("module1" => 15,"module2" => 12.3,"module3" => 14,"module4" => 2.5,"module5" => 5,"module6" => 2) ),
    "Et998" => array("Nom" => "BA", "Prenom" => "sdfq", "Notes" => array("module1" => 15,"module2" => 12.3,"module3" => 14,"module4" => 17,"module5" => 2,"module6" => 2) ),
    "Et764" => array("Nom" => "zzzz", "Prenom" => "eeee", "Notes" => array("module1" => 15,"module2" => 12.3,"module3" => 14,"module4" => 17,"module5" => 5,"module6" => 1) )
);

    function minMaxModule($array, $m){
        //pick min if m == 0
        if ($m == 0){
            $minModule = "module1";
            $minNote = $array["module1"];
            foreach ($array as $key => $value){
                if( $value < $minNote){
                    $minModule = $key;
                    $minNote = $value;
                }
            }
            
            return array($minModule,$minNote);
        }
        //pick max if m == 1
        if ($m == 1){
            $maxModule = "";
            $maxNote = 0;
            foreach ($array as $key => $value){
                if ($value > $maxNote){
                    $maxModule = $key;
                    $maxNote = $value;
                }
            }
        
        return array($maxModule,$maxNote);
        }
    }

    foreach ($modules as $k => $v){
        echo "<br>";
        echo "Student  ",$v["Nom"];
        echo "<br>";
        echo "Highest module : ",minMaxModule($v["Notes"],1)[0]," With score : ",minMaxModule($v["Notes"],1)[1] ;
        echo "<br>";
        echo "Lowest module : ",minMaxModule($v["Notes"],0)[0]," With score : ",minMaxModule($v["Notes"],0)[1] ;
        echo "<br>";
    }

    $minArray = $modules["Et123"]["Notes"];
    $maxArray = $modules["Et123"]["Notes"];
    foreach ($modules as $key => $value){
        foreach ($value["Notes"] as $nk => $nv){
            if ($value["Notes"][$nk] < $minArray[$nk]){
                $minArray[$nk] = $value["Notes"][$nk];
            }
            if ($value["Notes"][$nk] > $maxArray[$nk]){
                $maxArray[$nk] = $value["Notes"][$nk];
            }
        }
    }

    print_r($minArray);
    echo "<br>";
    print_r($maxArray);
    ?>
</body>
</html>