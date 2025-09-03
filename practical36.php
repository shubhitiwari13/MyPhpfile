<?php
  $name = htmlspecialchars($_GET['name']??"guest");
  echo "hello.$name";
?>