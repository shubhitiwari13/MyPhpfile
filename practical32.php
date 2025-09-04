<?php
$students = array(
    "Amit" => 85,
    "Riya" => 92,
    "Rahul" => 78,
    "Sneha" => 88,
    "Vikram" => 74
);

$students["Rahul"] = 90;
foreach($students as $name => $marks) {
    echo "$name scored $marks marks.<br>";
}
?>
