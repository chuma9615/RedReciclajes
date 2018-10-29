<?php

include 'config.php';

if($offline){
  header("Location: maintainance.php");  // <== redirects all to maintainance.php
  exit;
}
else{
  header("Location: main.php");
  exit;
}
?>
