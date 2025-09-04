<?php
$students = array(
    "Amit" => 85,
    "Riya" => 92,
    "Rahul" => 78,
    "Sneha" => 88
);
$key = "Rahul";
if (array_key_exists($key, $students)) {
    echo "The key '$key' exists in the array and the marks are: " . $students[$key];
} else {
    echo "The key '$key' does not exist in the array.";
}
?>
