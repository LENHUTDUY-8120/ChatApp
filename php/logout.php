<?php
    session_start();
    if(isset($_GET['logout'])){
        if(session_destroy()){
            header("Location: ../accountuser.php");
        }
    }
?>