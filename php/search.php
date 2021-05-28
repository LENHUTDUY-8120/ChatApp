<?php
    session_start();
    include_once "config.php";

    $userid = $_SESSION['user_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM users WHERE user_id in (select person1 from friends where person2 = $userid union select person2 from friends where person1 = $userid) AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') ";
    $output = "";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>