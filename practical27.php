<?php
$numbers = array(45, 12, 78, 34, 23, 56, 89);

echo "Original Array: <br>";
print_r($numbers);
echo "<br><br>";
$asc = $numbers; 
sort($asc);

echo "Array in Ascending Order (using sort()): <br>";
foreach($asc as $value){
    echo $value . " ";
}
echo "<br><br>";
$desc = $numbers;
rsort($desc);

echo "Array in Descending Order (using rsort()): <br>";
foreach($desc as $value){
    echo $value . " ";
}
?>
