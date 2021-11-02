<?php
include "dbcon.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
   

//verificam daca exista deja acest username
$sql = "SELECT * FROM users WHERE username = '$username'";
$stmt = $conn->prepare($sql);
$stmt->execute();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register-style.css">
    <title>Register</title>
</head>
<body>
<form action="login.php" method="POST">
    <div class="register">
        <div class="header"> 
            <h3>Register</h3>
        </div> 
            <div class="main">  
                <label for="username">Username: </label><br>
                <input type="text" name="username" placeholder="Choose a username" required><br>
                <label for="password">Password: </label><br>
                <input type="password" name="password" placeholder="Choose a password" required><br><br>
                <button type="submit" name="submit">Sign In</button>
                <p>Already a member? <a href="login.php">Login</a></p>
            </div>  
        </div>
</form>
</body>
</html>