<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Djasen Tjendry</title>
  <?php 
    include_once("include/db_connect.php");
    include_once("include/script.php");
    session_start();
    $query = "SELECT * FROM comments";
    $result = $conn->query($query);

  ?>
</head>

<body id="page-top" style="background-color: #212429; color: cornsilk;" class="black">
  <!-- <body id="page-top" class="black"> -->
  <!-- Navigation -->
  <?php 
    include_once("include/navbar.php"); 
  ?>
  <br><br><br><br><br>
  <h1 style="text-align:center;">Yuk berbagi cerita</h1><br><br><br><br><br>
  <?php 

     while($row = $result->fetch_assoc()){
        echo'<div style="text-align:center;">';
        echo $row['username'];
        echo '<br>';
        echo $row['comment'];
        echo'</div>';
     }
  
  ?>
  <br><br><br>
  <form action="add_comment.php" method="post">
    <div class="active-cyan-4 mb-4 col-4 container">
        <input class="form-control" name="comment" type="text" placeholder="Comment" aria-label="Search">
        <input type="submit">
    </div>
  </form>
</body>
</html>
