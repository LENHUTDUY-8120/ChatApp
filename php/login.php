<?php
    session_start();
    include "config.php";

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($email) && !empty($password)){

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        
        if($row = mysqli_fetch_assoc($sql)){
            $pwd = $row['password'];

            if(password_verify($password, $pwd)){

                $_SESSION['user_id'] = $row['user_id'];
                $sql = "UPDATE users SET status = 'Active' where user_id = " . $_SESSION['user_id'];
                $rs = $conn->query($sql);
                if($rs){
                    echo "Success";    
                }
            }else{
                echo "Email or Password is incorrect!";
            }
        }else{
            echo "Email is not exits";
        }
    }else{
        echo "All input fields are required";
    }

?>