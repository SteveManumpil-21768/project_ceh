<?php 
    include_once("include/db_connect.php");
    
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $foto = $email.$_FILES["fileToUpload"]["name"];
    echo '<br><br><br><br>'.$foto;
    if($password != $confirm_password){
       // header('Location:index.php');
    }else{

        $query = "SELECT Email FROM user WHERE Email='$email'";
        $result = $conn->query($query);
        if(!$result->num_rows){
            $md5 = md5($password);
            $sid = base64_encode($username);
            $query = "INSERT INTO user(Email, Username, Password,image ,SID) VALUES('$email','$username','$md5','$foto','$sid')";
            $result = $conn->query($query);
            if($result){
                session_start();
                setcookie('username', $sid, time() + 900);
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($foto);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }
                // Check if file already exists
                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 5000000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($foto, $target_file)) {
                        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
                header("Location: index.php");
            }
        }
        else{
            header("Location: index.php");
        }
    }
?>