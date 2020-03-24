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

    $query = "SELECT * FROM suka_kamu";

    $result = $conn->query($query);
  ?>
</head>

<body id="page-top" style="background-color: #212429; color: cornsilk;" class="black">
  <!-- <body id="page-top" class="black"> -->
  <!-- Navigation -->
  <?php 
    include_once("include/navbar.php");
  ?>
  <div class="container" style="margin-top: 6cm;">
    <h3 class="text-center">
      You friend TJENDRY have been having a crush at 3 pretty girl, but he know that only one from 3 of them like him back.
      So as a professional hacker he ask you to find out who is the girl that like him back ?
    </h3>
    <div id="bubbles"></div>
    <?php while($row = $result->fetch_assoc()){ ?>
      <?php if(base64_decode($_SESSION['username']) == $row['suka_username']) {?>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <img class="rounded border border-dark" width="165px" height="150px" src="<?= $row['foto']; ?>">
            <div class="ml-3">
              <h3 style="color: black"><?= $row["username"]; ?></h3>
              <p style="color: black"><?= $row["alasan"]; ?></p>
            </div>   
            </div>
          </div>
      </div>
      <?php } ?>
    <?php } ?>
  </div>

  </div>
</div>
</body>
</html>
