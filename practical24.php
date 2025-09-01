<?php
$numbers = array(5, 10, 15, 20, 25);

$sum = 0;
foreach($numbers as $value){
    $sum += $value;
}
echo "Numbers in the Array: <br>";
foreach($numbers as $index => $value){
    echo "Element [$index] = $value <br>";
}
echo "<br>Sum of all numbers = " . $sum;
?>
