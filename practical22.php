<?php
$array = array();
for($i = 0; $i < 10; $i++){
    $array[$i] = $i + 1; 
echo "Indexed Array of size 10:<br>";
foreach($array as $index => $value){
    echo "Element [$index] = $value <br>";
}
?>
