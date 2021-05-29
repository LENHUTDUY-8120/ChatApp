<?php
  $hostname = "localhost:3306";
  $username = "root";
  $password = "@6x4Mmvclnduy8120";
  $dbname = "ChatApp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }

  $conn->query("SET CHARACTER SET utf8mb4");

?>
