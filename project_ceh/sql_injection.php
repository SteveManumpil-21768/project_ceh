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
    if(isset($_GET['cari_nama'])){
      $cari_nama = $_GET['cari_nama'];
      $query = "SELECT * FROM jodoh WHERE Name='$cari_nama'";
      $result = $conn->query($query);
      if(!$result){
        header('Location:sql_injection.php');
      }
    }else{
      $query = "SELECT * FROM jodoh";
      $result = $conn->query($query);
    }


  ?>
</head>

<body id="page-top" style="background-color: #212429; color: cornsilk;" class="black">
  <!-- <body id="page-top" class="black"> -->
  <!-- Navigation -->
  <?php 
    include_once("include/navbar.php"); 
  ?>
  <br><br><br><br><br>
  <h1 style="text-align:center;">Choose Your Soulmate !</h1>
  <form action="sql_injection.php" method="get">
    <div class="active-cyan-4 mb-4 col-4 container">
      <input class="form-control" name="cari_nama"type="text" placeholder="Search" aria-label="Search">
    </div>
  </form>


  <section class="page-section" id="portfolio">
    <div class="container">
    <?php 
      $i = 0;
      while($row = $result->fetch_assoc()){
        echo'<div class="col-md-4 col-sm-6 portfolio-item">
                <div class="">

                </div>
                <img class="img-fluid" src="img/';echo $row['foto'].'" alt="" style="">
              <div class="portfolio-caption"style="background-color:#212429;">
                <h1>';echo $row['Name'].'</h1>
                <p>'.$row['Name'].'</p>
                <p>'.$row['Age'].'</p>
                <p>'.$row['Gender'].'</p>
                <p>'.$row['Description'].'</p>
              </div>
            </div>';
        $i +=1 ;
      }
      mysqli_free_result($result);
      mysqli_close($conn);
      
    ?>
    </div>
  </section>
</body>
</html>
