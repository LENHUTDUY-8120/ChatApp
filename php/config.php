<?php
  $hostname = "localhost";
  $username = "root";
  $password = "nilnguyen123";
  $dbname = "ChatApp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }

  $conn->query("SET CHARACTER SET utf8mb4");

?>
