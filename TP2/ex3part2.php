<?php

    $tab = array("ahmed" => 14,
    "Joudia" => 19,
    "Samir" => 14,
    "Yasser" => 14.5,
    "Aya" => 12,
    "Ilham" => 16,
    "Yassine" => 17,
);


foreach($tab as $key => $val){
    echo "Nom : $key, note = $val<br>";
}

function meanVal(array $a){
    $sum=0;
    foreach($a as $val){
        $sum+=$val;
    }
    return $sum/count($a);
}

echo '<table border="1">';
echo '<tr><th>Nom</th><th>Note</th></tr>';
foreach($tab as $key => $val){
    echo '<tr>';
    echo '<td>'.$key.'</td>';
    echo '<td>'.$val.'</td>';
    echo '</tr>';
}
echo '</table>';


$i = array_search(max($tab), $tab);
echo "Student with highest score : $i<br>";


$i = array_search(min($tab), $tab);
echo "Student with lowest score : $i<br>";


$i = number_format(meanVal($tab), 2, ".", " ");
echo "Mean score $i<br>";

?>