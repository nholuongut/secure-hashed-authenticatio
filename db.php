<?php
$con = mysqli_connect("localhost","nholuongut","qwerty","security");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>