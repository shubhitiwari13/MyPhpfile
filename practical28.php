<?php
$numbers = array(10, 20, 30, 40, 50);
$value = 30;
if (in_array($value, $numbers)) {
    echo "The value $value is found in the array.";
} else {
    echo "The value $value is NOT found in the array.";
}
?>