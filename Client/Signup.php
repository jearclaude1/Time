<?php
require "../php/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>E-time | Sign</title>
</head>
<body>
    <div class="content">
        <div class="Signup">
            <label>SignUp</label>
            <form action="../php/create.php" method="post">
                <input type="name" name="name" placeholder="User_name" required>
                <input type="password" name="password" placeholder="password">
                <input type="text" name="detail" placeholder="Detail">
                <input type="submit" name="save" value="save" >
                <a href="../Client/login.php">Login</a>
            </form>
        </div>

    </div>
</body>
</html>