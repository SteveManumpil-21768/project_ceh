<?php 
    include_once("include/db_connect.php");
    session_start();
    $user = base64_decode($_SESSION['username']);
    $comment = $_POST['comment'];
    
    if(!isset($_SESSION['username'])){
        header('Location:xss.php');
    }
    $query = "INSERT INTO comments (id,username, comment)
              VALUES (Null,'$user', '$comment')";
    $result = $conn->query($query);
    header('Location:xss.php');
?>