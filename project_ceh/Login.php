<?php 
    session_start();
    include_once("include/db_connect.php");
    $email = $_POST['email'];
    // $username = $_POST['username'];
    $password = $_POST['password'];
    // $confirm_password = $_POST['confirm_password'];
    echo $email." ".$password."<br>";
    $query = "SELECT * FROM user WHERE Email='$email' and Password = '$password'";
    $result = $conn->query($query);
    $result = $result->fetch_assoc(); 
    if(!$result){
        header('Location:index.php');
    }else{
        $_SESSION['username'] = $result['Username'];
        header('Location:index.php');
    }
    

?>