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
    $arr = array(
        array("Et676","AB","AC",17),
        array("Et123","BC","BD",12),
        array("Et723","CD","CE",9),
        array("Et764","DE","DF",16.5)
    );
    
    for($i = 0; $i < 4;$i++){
        echo "<br>";
        echo $i+1,"-th student :";
        echo "<br>";
        echo "Code : ",$arr[$i][0];
        echo "<br>";
        echo "Nom : ",$arr[$i][1];
        echo "<br>";
        echo "Prénom : ",$arr[$i][2];
        echo "<br>";
        echo "Moyenne : ",$arr[$i][3];
        echo "<br>";
    }

    $noteMax = 0;
    $etudiantMax = "";

    $noteMin = $arr[0][3];
    $etudiantMin = "";

    $noteMinValid = $arr[0][3];
    $etudiantMinValid = "";

    $nonValidarray = array();

    for ($i=0;$i<4;$i++){
        if ($arr[$i][3] > $noteMax){
            $noteMax = $arr[$i][3];
            $etudiantMax = $arr[$i][1];
        }
        if ($arr[$i][3] < $noteMin){
            $noteMin = $arr[$i][3];
            $etudiantMin = $arr[$i][1];
        }
        if ($arr[$i][3] < $noteMinValid && $arr[$i][3]>= 10){
            $noteMinValid = $arr[$i][3];
            $etudiantMinValid = $arr[$i][1];
        }
        if ($arr[$i][3] < 10){
            array_push($nonValidarray,$arr[$i][1]); 
        }
    }
    echo "Etudiant Max : ",$etudiantMax;
    echo "<br>";
    echo "Etudiant Min : ",$etudiantMin;
    echo "<br>";
    echo "Etudiant Min Valid : ",$etudiantMinValid;
    echo "<br>";
    print_r($nonValidarray);
    ?>
</body>
</html>