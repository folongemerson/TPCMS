<?php
    // require_once('./function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="traitLogin.php" method="post">
                <label for="userName">UserName</label>
                <input type="text" name="userName" id="userName"> <br>
                <label for="password">Password</label>
                <input type="password" name="pass" id="pass">
                <br>
                <input type="submit">
            </form>
        </div>
    </div>
</body>
</html>


