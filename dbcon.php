<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=shopping', 'root', '');
}catch(PDOException $e){
    die("could not connect");

}