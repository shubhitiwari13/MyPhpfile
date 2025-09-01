<?php
$array = array(5, 2, 8, 1, 9, 3, 7, 6, 4, 10);

echo "Original Array:<br>";
print_r($array);
echo "<br><br>";

// sort() - Ascending order (values only)
$sortArray = $array;
sort($sortArray);
echo "sort() - Ascending values:<br>";
print_r($sortArray);
echo "<br><br>";

// rsort() - Descending order (values only)
$rsortArray = $array;
rsort($rsortArray);
echo "rsort() - Descending values:<br>";
print_r($rsortArray);
echo "<br><br>";

// asort() - Ascending order, preserve index
$asortArray = $array;
asort($asortArray);
echo "asort() - Ascending with keys preserved:<br>";
print_r($asortArray);
echo "<br><br>";

// arsort() - Descending order, preserve index
$arsortArray = $array;
arsort($arsortArray);
echo "arsort() - Descending with keys preserved:<br>";
print_r($arsortArray);
echo "<br><br>";

// ksort() - Sort by keys ascending
$ksortArray = $array;
ksort($ksortArray);
echo "ksort() - Keys ascending:<br>";
print_r($ksortArray);
echo "<br><br>";

// krsort() - Sort by keys descending
$krsortArray = $array;
krsort($krsortArray);
echo "krsort() - Keys descending:<br>";
print_r($krsortArray);
echo "<br><br>";
?>
