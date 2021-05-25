<?php
  $hostname = "localhost";
  $username = "root";
<<<<<<< HEAD
  $password = "nilnguyen123";
  $dbname = "chat_app";
=======
  $password = "";
  $dbname = "ChatApp";
>>>>>>> 286648ea37e8d42c32ef589bba84950eb99c84b0

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }

  $conn->query("SET CHARACTER SET utf8mb4");

?>
