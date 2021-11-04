<?php
include "dbcon.php";
session_start();



           
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Site</title>
</head>
<body>

    <div class="container">
    <a href="logout.php" style="float: right;" class="logout">LogOut</a>
    <?php echo '<h2 id="username">' . "Bine ai venit, " . $_SESSION['username'] . ' !</h2>'; ?>
        
    <nav>
        
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="comments.php">Reviews</a></li>
        </ul>
    </nav>

        <div class="row">
            <div class="col-1">
                <h1>Sunt Dr. Copce Simona Larisa si sunt aici pentru a va oferi serivcii medicale de top.</h1>
                <p>Experienta acumulata ca sef de sectie la cel mai mare spital din Europa <span>"Akh Vinea"</span> isi spune cuvantul.</p>
            </div>
            <div class="col-2">
                <img src="img/medic.jpg" class="profile">
            </div>

        </div>

    </div>
</body>
</html>