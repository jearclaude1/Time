<?php
require "../php/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>E-time | Log</title>
</head>
<body>
    <div class="content">
        <div class="Signup">
            <label>Log In</label>
            <form action="../php/login.php" method="post">
                <input type="text" name="name" placeholder="User_name" required>
                <input type="password" name="password" placeholder="">
                <input type="submit" name="save" value="save" >
                <a href="../Client/Signup.php">Register</a>
            </form>
        </div>

    </div>
</body>
</html>