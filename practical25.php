<?php
$numbers = array(12, 45, 2, 67, 34, 89, 23, 5);
$smallest = $numbers[0];
$largest = $numbers[0];
foreach($numbers as $value){
    if($value < $smallest){
        $smallest = $value;
    }
    if($value > $largest){
        $largest = $value;
    }
}
echo "Numbers in the Array: <br>";
foreach($numbers as $index => $value){
    echo "Element [$index] = $value <br>";
}
echo "<br>Smallest Number = " . $smallest;
echo "<br>Largest Number = " . $largest;
?>
