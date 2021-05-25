<?php
    session_start();
    include "config.php";

    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $repassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($repassword)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist!";
            }else{

                if(isset($_FILES['img_file'])){
                    $img_name = $_FILES['img_file']['name'];
                    $img_type = $_FILES['img_file']['type'];
                    $tmp_name = $_FILES['img_file']['tmp_name'];

                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);

                    $extensions = ['png', 'jpeg', 'jpg'];
                    
                    if(in_array($img_ext, $extensions) === true){
                        
                        if(move_uploaded_file($tmp_name, "images/".$img_name)){
                            $status = "Active now";

                            if($password == $repassword){
                                $password = password_hash($password, PASSWORD_DEFAULT);
                                $id_confirm = rand(time(), 10000000);
                                
                                $sql2 = mysqli_query($conn, "INSERT INTO users (fname, lname, email, password, img, status, id_confirm) VALUES ('$fname', '$lname', '$email', '$password', '$img_name', '$status', $id_confirm)");
                                if($sql2){

                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['user_id'] = $row['user_id'];
                                    echo "Success";
                                }
                                }else{
                                    echo "Something went wrong!";
                                }
                            }else{
                                echo "Password incorrect!";
                            }
                        }
                        
                    }else{
                        echo "Please select an Image file - jpeg, jpg, png!";
                    }
                }else{
                    echo "Please select an Image file";
                }
            }
        }else{
            echo "$email - This is not a valid email!";
        }
    }else{
        echo "All input field are required";
    }
?>