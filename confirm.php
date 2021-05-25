<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Confirm</title>
    <link rel='stylesheet' href='forgot_pwd.css'>
</head>
<body>
    <div class="form-container">
        <div class="title"><h3>Find your account</h3></div>
        <hr>
        <form action="php/confirm.php" method="POST">
            <div class="input">
                <input type="text" name="id_confirm" placeholder="Your code">
            </div>
            <hr>
            <div class="submit">
                <input type="submit" name="submit" value="Confirm">
            </div>
        </form>
    </div>
</body>
</html>