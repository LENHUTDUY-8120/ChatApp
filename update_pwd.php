<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Update Password</title>
    <link rel='stylesheet' href='forgot_pwd.css'>
</head>
<body>
    <div class="form-container">
        <div class="title"><h3>Update Password</h3></div>
        <hr>
        <form action="php/update_pwd.php" method="POST">
            <div class="update_pwd">
                <input type="password" name="newpwd" placeholder="New Password" required>
            </div>
            <div class="update_pwd">
                <input type="password" name="confirmpwd" placeholder="Confirm Password" required>
            </div>
            <hr>
            <div class="submit">
                <input type="submit" name="confirm" class="confirm" value="Confirm">
            </div>
        </form>
    </div>
</body>
</html>