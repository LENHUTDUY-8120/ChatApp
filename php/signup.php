<?php
    session_start();
    include "config.php";

    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $repassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($repassword)){
        // let's check user email is valid or not
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // if email is valid
            // Let's check that email already exist in the database or not
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
            if(mysqli_num_rows($sql) > 0){ // if email already exist
                echo "$email - This email already exist!";
            }else{
                // Let's check user upload file or not
                if(isset($_FILES['img_file'])){ // if file is uploaded
                    $img_name = $_FILES['img_file']['name']; // Getting user uploaded img name
                    $img_type = $_FILES['img_file']['type']; // Getting user uploaded img type
                    $tmp_name = $_FILES['img_file']['tmp_name']; // This temporary name is used to save/move file in our folder

                    // Let's explode image and get the last extension like jpg png
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode); // Here we get the extension of an user uploaded img file

                    $extensions = ['png', 'jpeg', 'jpg']; //These are some valid img ext and we've store them in array
                    
                    if(in_array($img_ext, $extensions) === true){
                        $time = time(); // This will return us current time...
                                        //we need this time because when you uploading user img to in our folder we rename user file with current time so all the image file will have a unique name
                        // Let's move the user uploaded img to our particular folder
                        $new_img_name = $time.$img_name;
                        
                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                            $status = "Active now"; // Once user signed up then his status will be active now
                            $random_id = rand(time(), 10000000); // creating random id for user

                            // let's insert all user data inside table
                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status) VALUES ($random_id, '$fname', '$lname', '$email', '$password', '$new_img_name', '$status')");
                        
                            if($sql2){ // If these data inserted
                               // echo "Please select an Image file!";
                               $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
                               if(mysqli_num_rows($sql3) > 0){
                                   $row = mysqli_fetch_assoc($sql3);
                                   $_SESSION['unique_id'] = $row['unique_id'];
                                   echo "Success";
                               }
                            }else{
                                echo "Something went wrong!";
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