<?php
include "dbcon.php";
session_start();


if (isset($_POST['add_comment'])){
    
    $mess = $_POST["message"];
    //declar user_id in baza username
    $sql =  "SELECT id FROM users WHERE username = '{$_SESSION['username']}'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $user_id = $row['id'];
        }else {
            $user_id= 0;
        }


    $sql = "INSERT INTO comments (user_id,   message ) VALUES ( '$user_id',  '$mess')";
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
<link rel="stylesheet" href="comment-style.css">
<link rel="stylesheet" href="style-info.css">
    <title>Review</title>
</head>
<body>
<a href="logout.php" style="float: right;" class="logout">LogOut</a>
        <nav>
            <ul class="info-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="comments.php">Reviews</a></li>
            </ul>
        </nav>
    <header>Spune-mi cum a fost experienta in caliate de pacient al meu: </header>
    <?php echo"
    <form action='' method='POST'>
    <textarea name='message' ></textarea>
    <input type='hidden' name='username' value='".$_SESSION['username']."'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <input type='submit' name='add_comment' >
    </form>"; ?>
<?php
$sql =  "SELECT id FROM users WHERE username = '{$_SESSION['username']}'";
$stmt = $conn->prepare($sql);
$stmt->execute();
if($stmt->rowCount() > 0){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_id = $row['id'];
    }else {
        $user_id= 0;
    }



    $sql = "SELECT * FROM comments "; //sa vad toate cometurile postate de toti 
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
        $id =  $row['user_id'];   
        $sql1 = "SELECT * FROM users WHERE id ='$id'";
        $stmt1 = $conn->prepare($sql1); 
        $stmt1->execute();     
    if ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
      
echo "<div class='comment-box'><p>";
echo "Userul cu id-ul:  " . $row['user_id'] . "<br><br>";
echo  "Spune:  " . $row['message']."<br><br>";
echo "<p>";
echo"</div>";
    }
    }
  
?>
    </body>
</html>