<?php require 'logic.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
   <link rel="stylesheet" href="login.css">
</head>
<body>
<center>
     <form action="login.php" method="post">
    <div>
        <img src="imgs/1.jpg" alt="">
        <h3>Login</h3>
        <input type="text" placeholder="Name" name="username">
        <input type="password" placeholder="Password" name="password">
        <input type="submit" value="Login" name="submit">
    </div>
     </form>
</center>
</body>
</html>
