<?php
  $num1 = $_GET['num1']??0;
  $num2 = $_GET['num2']??0;
  $sum = $num1 + $num2;
  echo "the sum of $num1 and $num2 is $sum";
?>