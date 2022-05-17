<?php

$sadje = ["jabolko","banana","pomaranca", "limona","kivi"];
echo "<h1>Sadje</h1>";
sort($sadje);
$i = 1;
$samoglasniki = ["a","e","i","o","u"];
#IZPISI SAMO SADJE KI SE ZACNE S SAMOGLASNIKI
foreach ($sadje as $value) {
    if($sadje = substr($samoglasniki,0, 1)) {
        echo "<p>Sadje st $i: $value</p>";
        $i++;
    }
}
#NAREDI ASOC ARRAY
$asoc = ["jabolko" => 3,"banane" => 6,"kivi" => 16);
$max = 0;
$nameMax = "";
foreach ($asoc as $name => $value){
    if ($value > $max){
        $max = $value;
        $nameMax = $name;
    }
}
foreach
?>