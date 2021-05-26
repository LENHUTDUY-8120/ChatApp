<?php
    include "config.php";
    session_start();

    if(isset($_POST['confirm'])){
        $newpwd = $_POST['newpwd'];
        $confirmpwd = $_POST['confirmpwd'];

        if($newpwd == $confirmpwd){
            $password = password_hash($newpwd, PASSWORD_DEFAULT);
            $email = $_SESSION['email'];
            $id_confirm = rand(time(), 10000000);

            $sql = mysqli_query($conn, "UPDATE users set password = '$password', id_confirm = $id_confirm where email = '$email'");
            if($sql){
                header("Location: ../accountuser.php");
            }
        }else{
            echo "
                <script>
                    alert('Something was wrong!');
                    window.location.href = '../update_pwd.php';
                </script>
            ";
        }
    }
?>