<?php
  $hostname = "localhost";
  $username = "root";
  $password = "nilnguyen123";
  $dbname = "chat_app";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
