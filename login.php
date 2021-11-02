<?php
include "dbcon.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register-style.css">
    <title>LogIn</title>
</head>
<body>
<form action="index.php" method="POST">
    <div class="register">
        <div class="header"> 
            <h3>Log In</h3>
        </div> 
            <div class="main">  
                <label for="username">Username: </label><br>
                <input type="text" name="username" placeholder="Enter your username" required><br>
                <label for="password">Password: </label><br>
                <input type="password" name="password" placeholder="Enter your password" required><br><br>
                <button type="submit" name="submit">Sign In</button>
                <p>Not one of us? <a href="register.php">Create an account</a></p>
            </div>  
        </div>
</form>
</body>
</html>