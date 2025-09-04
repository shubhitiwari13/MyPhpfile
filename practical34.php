<?php
$fruits = array(
    "Apple" => 120,
    "Banana" => 40,
    "Mango" => 100,
    "Orange" => 80,
    "Grapes" => 60
);

echo "<b>Original Array:</b><br>";
foreach($fruits as $fruit => $price) {
    echo "$fruit : Rs.$price<br>";
}

asort($fruits); 
echo "<br><b>Sorted by Value (Price):</b><br>";
foreach($fruits as $fruit => $price) {
    echo "$fruit : Rs.$price<br>";
}
ksort($fruits); 
echo "<br><b>Sorted by Key (Fruit Name):</b><br>";
foreach($fruits as $fruit => $price) {
    echo "$fruit : Rs.$price<br>";
}
?>
