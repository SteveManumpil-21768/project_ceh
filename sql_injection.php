<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lover App | Match. Chat. Date.</title>
  <?php 
    include_once("include/db_connect.php");
    include_once("include/script.php");
    session_start();
    
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
  <h4 style="text-align:center;">Maybe They're Hiding Someone Dining room</h4>
  <form action="sql_injection.php" method="post">
      <input class="form-control ctive-cyan-4 mb-4 col-4 container" name="cari_nama" type="text" placeholder="Search">
  </form>

  <section class="page-section" id="portfolio">
    <div class="container">
    <div class="row portfolio-item">
    <?php 
    if(isset($_POST['cari_nama'])){
      $cari_nama = $_POST['cari_nama'];
      $query = "SELECT foto,id,Name,Age,Gender,Description FROM jodoh WHERE Name LIKE  '%" . $cari_nama . "%'";
      if($conn->multi_query($query)){
        $result = $conn->store_result();
      }
      else $result = $conn->query($query);
    }
    else{
      $query = "SELECT * FROM jodoh";
      $result = $conn->query($query);
    }
      while($row =  mysqli_fetch_assoc($result)){
        echo'  
              <div class="portfolio-caption col-md-4"style="background-color:#212429;border-style: solid; border-color: white;">
              <img class="img-fluid" src="';
              echo $row['foto'].'" alt="foto" style="">
                <h1>';echo $row['Name'].'</h1>
                <p>'.$row['Name'].'</p>
                <p>'.$row['Age'].'</p>
                <p>'.$row['Gender'].'</p>
                <p>'.$row['Description'].'</p>
            </div>';
      }
      mysqli_free_result($result);
      mysqli_close($conn);
      
    ?>
    </div>
  </section>
</body>
</html>
