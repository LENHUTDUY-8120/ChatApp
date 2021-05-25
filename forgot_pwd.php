<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Forgot Password</title>
    <link rel='stylesheet' href='forgot_pwd.css'>
</head>
<body>
    <div class="form-container">
        <div class="title"><h3>Find your account</h3></div>
        <hr>
        <form action="php/forgot_pwd.php" method="POST">
            <div class="email">
                <input type="email" name="email" placeholder="Your email">
            </div>
            <hr>
            <div class="submit">
                <input type="submit" name="submit" value="Confirm">
            </div>
        </form>
    </div>
</body>
</html>