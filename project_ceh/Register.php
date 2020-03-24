<?php 
    include_once("include/db_connect.php");
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    if($password != $confirm_password){
        header('Location:index.php');
    }else{
        $query = "SELECT * FROM user WHERE Email='$email'";
        $result = $conn->query($query);
        if(!$result){
            $query = "INSERT INTO user (Email, Username, Password)
              VALUES ('$email', '$username', '$password')";
            $result = $conn->query($query);
            header('Location:index.php');
        }else{
            $_SESSION['username'] = $result['Username'];
            header('Location:index.php');
        }
    }
    

?>