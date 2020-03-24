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

    <div class="container" style="margin-top: 6cm;">
      <h3 class="text-center">
        Have you found out who is the girl that having a crush at TJENDRY ?
      </h3>
      <h3 class="text-center"> Lets get into her account </h3>
    </div>
    <?php if(isset($_GET['SID'])){ ?>
      <?php if(base64_decode($_GET['SID']) == 'vania'){ ?>
        <br> <br> <div><h3 style="text-align: center; color:red;"> GAK BOLEEH GITU DONG!! </h3></div>
      <?php } ?>
    <?php } else {?>
      <?php if(base64_decode($_COOKIE['username']) == 'vania') {?>
        <br> <br> <div><h3 style="text-align: center; color:red;"> LOVERAPP{c00ki3_m4n1pvlt10n} </h3></div>
        <!-- TOLONGAN DONG INI DI SET LAGI COOKIENYA BIAR BALIK KE AWAL , tadi kan abis ke ganti jadi vania-->
      <?php } ?>
    <?php } ?>
  </body>
</html>