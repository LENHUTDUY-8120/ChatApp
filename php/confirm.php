<?php
    include "config.php";
    session_start();

    if(isset($_POST['submit'])){
        $email = $_SESSION['email'];
        $code = $_POST['id_confirm'];

        $str = "select id_confirm from users where email = '$email'";
        $query = mysqli_query($conn, $str);
        if(mysqli_num_rows($query) > 0){
            $rowCode = mysqli_fetch_assoc($query);
            if($code == $rowCode['id_confirm']){
                echo "Yes";
            }else{
                echo "No";
            }
        }
    }
?>