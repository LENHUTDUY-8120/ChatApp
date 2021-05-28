<?php
  $hostname = "localhost:3306";
  $username = "root";
<<<<<<< HEAD
  $password = "@6x4Mmvclnduy8120";
=======
  $password = "nilnguyen123";
>>>>>>> f6116c90d7caed15ab8a24cd733427fc3ad135c5
  $dbname = "ChatApp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }

  $conn->query("SET CHARACTER SET utf8mb4");

?>
