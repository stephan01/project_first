<?php
include "dbcon.php";
session_start();



if(isset($_POST['login_submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

$sql = "SELECT username FROM users WHERE username = '$username'";
$stmt = $conn->prepare($sql);
$stmt->execute();
    if($stmt->rowCount() > 0){
        $_SESSION['username'] = $username;
        header("location: index.php");
    }else{
        echo "Account dose not exit, please register";
        header("location: register.php");
    }
}
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
<form action="" method="POST">
    <div class="register">
        <div class="header"> 
            <h3>Log In</h3>
        </div> 
            <div class="main">  
                <label for="username">Username: </label><br>
                <input type="text" name="username" placeholder="Enter your username" required><br>
                <label for="password">Password: </label><br>
                <input type="password" name="password" placeholder="Enter your password" required><br><br>
                <button type="submit" name="login_submit">Log In</button>
                <p>Not one of us? <a href="register.php">Create an account</a></p>
            </div>  
        </div>
</form>
</body>
</html>