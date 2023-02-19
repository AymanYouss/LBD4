<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="title">
            Color Table
        </div>
        <div class="tab" style="display:flex;width:40%;">

            <?php
                $tab = array( "Yellow", "Blue", "Red", "Purple", 
                "Black");
                $tab2 = array( "Orange", "Cian", "Aqua", "Bisque", "BlueViolet");

                foreach($tab as $color){
                    echo '<div style = "background-color:'.$color.';padding:20px;" class ="re">Color</div>';
                }

                
            ?>



        </div>
        <div class="tab2" style="display:flex;width:40%;">
        <?php 
        echo "<br> ";
        foreach($tab2 as $color){
            echo '<div style = "background-color:'.$color.';padding:20px;" class ="re">Color</div>';
        }

        echo "<br> ";
        ?>
        </div>
        

        <form method="post">
            Enter the color
            <br>
            <div class="flex">
                <input type="text" name="find" id="test" /><br/>
                <input type="submit" name="" id="">
            </div>
        </form>
        <?php

            if(array_key_exists('find',$_POST)){
                $a = $_POST['find'];
                if(in_array($a, $tab)){
                    $p = array_search($a, $tab) + 1;
                    echo "This color exists at index $p";
                } else{
                    echo "the color you just entered doesn't exist in this tab.";
                }
            }

        ?>
    </div>

   


</div>
    
</body>
</html>