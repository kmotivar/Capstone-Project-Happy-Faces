<?php

$con = mysqli_connect("localhost","root","","myHunger");

if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL : ".mysqli_connect_errno();
}

session_start();
?>
