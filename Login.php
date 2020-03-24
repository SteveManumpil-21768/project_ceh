<?php 
    session_start();
    include_once("include/db_connect.php");
    $email = $_POST['email'];
    // $username = $_POST['username'];
    $password = md5($_POST['password']);
    // $confirm_password = $_POST['confirm_password'];
    $query = "SELECT * FROM user WHERE Email='$email' and Password = '$password'";
    $result = $conn->query($query);
    $result = $result->fetch_assoc(); 
    if(!$result){
       echo 'no';
    }else{
        setcookie('username', $result['SID']);
        echo 'ok';
    }

?>