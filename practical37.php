<?php
  $name = htmlspecialchars($_GET['name']??"guest");
  echo "Hello $name";
  $age = htmlspecialchars($_GET['age']??"guest");
  echo " You are $age year old";
?>