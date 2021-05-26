<?php
    session_start();
    include "config.php";
    // Include required phpmailer files
    require '../PHPMailer/PHPMailer.php';
    require '../PHPMailer/SMTP.php';
    require '../PHPMailer/Exception.php';
    // Denfine name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['submit'])){
        $email = $_POST['email'];

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        if(mysqli_num_rows($sql) > 0){

            $row = mysqli_fetch_assoc($sql);
            $_SESSION['email'] = $row['email'];



            $mail = new PHPMailer();
            $mail->isSMTP(); // Set mailer to us smtp
            $mail->Host = "smtp.gmail.com"; // Define smtp host
            $mail->SMTPAuth = "true"; // Enable authentication
            $mail->SMTPSecure  = "tls"; // Set type of encryption
            $mail->Port = "587"; // Set port to connect smtp
            $mail->Username = "quocnil2000@gmail.com"; // Set gmail username
            $mail->Password = "nilnguyen123"; // Set gmail pass

            $mail->Subject =  "From Chat Real";// Set email subject
            $mail->SetFrom("$email"); // Set sender email
            $mail->Body = $row['id_confirm']; // Body
            $mail->addAddress("$email"); // Add recipient
            $mail->Send();
            $mail->smtpClose();


            header("Location: ../confirm.php");
        }else{
            echo "
                <script>
                    alert('Something was wrong!');
                    window.location.href = '../forgot_pwd.php';
                </script>
            ";
        }

    }

    if(isset($_POST['cancel'])){
        header("Location: ../accountuser.php");
    }

    
?>