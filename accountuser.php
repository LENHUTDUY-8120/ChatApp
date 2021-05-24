<!DOCTYPE html>
<html>
<head>
    <title>Account</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='accountuser.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="title">
                <h1>Realtime Chat App</h1>
            </div>
            <div class="form-btn">
                <span onclick="login()">Login</span>
                <span onclick="register()">Register</span>
                <hr id="Indicator">
            </div>
            
            <div class="login">
                <form id="LoginForm">
                    <div class="input">
                        <input type="email" placeholder="Enter your email" name="email" style="margin-right: 20px;">
                    </div>
                    <div class="input">
                        <input id="lgpass" type="password" placeholder="Enter your password" name="password">
                        <i id="lgsee" class="fas fa-eye" onclick="hide_show('lgpass', 'lgsee')"></i>
                    </div>
                    <div class="submit">
                        <button type="submit" class="btn" name="login">Login</button>
                    </div>
                    <span>Not yet signed up?</span><u onclick="register()">Signup now</u>
                </form>
            </div>
            
            <div class="signup">
                <form id="Register" enctype="multipart/form-data">
                    <div class="error-txt">This is an error message!</div>
                    <div class="nameuser">
                        <input type="text" placeholder="First name" name="firstname">
                        <input type="text" placeholder="Last name" name="lastname">
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Enter your email" name="email" style="margin-right: 20px;">
                    </div>
                    <div class="input">
                        <input id="sgpassword" type="password" placeholder="Password" name="password">
                        <i id="sgsee" class="fas fa-eye" onclick="hide_show('sgpassword', 'sgsee')"></i>
                    </div>
                    <div class="input">
                        <input id="rsgpassword" type="password" placeholder="Confirm password" name="confirmpassword">
                        <i id="rsgsee"class="fas fa-eye" onclick="hide_show('rsgpassword', 'rsgsee')"></i>
                    </div>
                    <div class="filename">
                        <input type="file" name="img_file">
                    </div>
                    <div class="submit">
                        <button type="submit" class="btn" name="register">Register</button>
                    </div>
                    <span>Already signed up?</span><u onclick="login()">Login now</u>
                </form>
            </div> 
        </div>
    </div>
    <script src="js/account.js"></script>
</body>
</html>