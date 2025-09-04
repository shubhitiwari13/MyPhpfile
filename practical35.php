<?php
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington, D.C.",
    "UK" => "London",
    "Japan" => "Tokyo",
    "France" => "Paris"
);

$capital = "Tokyo";
$country = array_search($capital, $countries);
if ($country !== false) {
    echo "$capital is the capital of $country.";
} else {
    echo "$capital not found in the array.";
}
?>
