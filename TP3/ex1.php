<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
    Entrez le code de l'étudiant :
    <input type="text" name="code">
    </form>
    <div>
        <?php 
        $modules = array("Et123" => array("Nom" => "AB", "Prenom" => "AC", "Notes" => array("module1" => 15,"module2" => 20,"module3" => 14,"module4" => 17,"module5" => 5,"module6" => 2) ),
        "Et676" => array("Nom" => "dfg", "Prenom" => "fff", "Notes" => array("module1" => 15,"module2" => 12.3,"module3" => 14,"module4" => 2.5,"module5" => 5,"module6" => 2) ),
        "Et998" => array("Nom" => "BA", "Prenom" => "sdfq", "Notes" => array("module1" => 15,"module2" => 12.3,"module3" => 14,"module4" => 17,"module5" => 2,"module6" => 2) ),
        "Et764" => array("Nom" => "zzzz", "Prenom" => "eeee", "Notes" => array("module1" => 15,"module2" => 12.3,"module3" => 14,"module4" => 17,"module5" => 5,"module6" => 1) ));

        if (isset($_POST["code"])){

        if(!array_key_exists($_POST["code"],$modules) && $_POST["code"] != ""){
            echo "Code entered is not valid!";
        }
        else {
        echo $_POST["code"]." is the code entered";

        


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
        $v = $modules[$_POST["code"]];
        echo "<br>";
        echo "Student  ",$v["Nom"];
        echo "<br>";
        echo "Highest module : ",minMaxModule($v["Notes"],1)[0]," With score : ",minMaxModule($v["Notes"],1)[1] ;
        echo "<br>";
        echo "Lowest module : ",minMaxModule($v["Notes"],0)[0]," With score : ",minMaxModule($v["Notes"],0)[1] ;
        echo "<br>";
}
        }
        ?>
    </div>
</body>
</html>