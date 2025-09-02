<?php
// Create an array of 6 elements
$numbers = array(10, 20, 30, 40, 50, 60);

echo "Original Array: <br>";
print_r($numbers);
echo "<br><br>";
echo "Array in Reverse Order (using array_reverse()): <br>";
$reversed = array_reverse($numbers);
print_r($reversed);
?>
