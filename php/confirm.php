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
                header("Location: ../update_pwd.php");
            }else{
                echo "
                    <script>
                        alert('Something was wrong!');
                        window.location.href = '../confirm.php';
                    </script>
                ";
            }
        }
    }

    if(isset($_POST['cancel'])){
        header("Location: ../forgot_pwd.php");
    }
?>