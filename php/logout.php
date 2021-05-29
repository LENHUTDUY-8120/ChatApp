<?php
    session_start();
    include "config.php";
    if(isset($_GET['logout'])){
        if(session_destroy()){
            $sql = "UPDATE users SET status = 'Offline' where user_id = " . $_SESSION['user_id'];
            $rs = $conn->query($sql);
            if($rs){
                header("Location: ../accountuser.php");
            }
        }
    }
?>