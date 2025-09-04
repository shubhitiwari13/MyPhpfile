<?php
$numbers = array(10, 20, 30, 20, 40, 10, 50, 30);
$uniqueNumbers = array_unique($numbers);
echo "Original Array:<br>";
print_r($numbers);

echo "<br><br>Array After Removing Duplicates:<br>";
print_r($uniqueNumbers);
?>
