<?php 
    include_once("include/db_connect.php");
    session_start();
    $user = $_SESSION['username'];
    $comment = $_POST['comment'];
    
    if(!isset($_SESSION['username'])){
        header('Location:xss.php');
    }
    $query = "INSERT INTO comments (username, comment)
              VALUES ('$user', '$comment')";
    $result = $conn->query($query);
    header('Location:xss.php');
?>