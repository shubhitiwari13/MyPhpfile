<?php
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington, D.C.",
    "UK" => "London",
    "Japan" => "Tokyo",
    "France" => "Paris"
);
$countries["Germany"] = "Berlin";

foreach($countries as $country => $capital) {
    echo "The capital of $country is $capital.<br>";
}
?>
