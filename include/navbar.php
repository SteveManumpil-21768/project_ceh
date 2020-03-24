
<nav class="navbar navbar-expand-lg  fixed-top" id="mainNav">
    <div class="container">
      <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top">Djasen Tjendry</a> -->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <?php
        if(isset($_GET['SID'])){
          $_COOKIE['username'] = $_GET['SID'];
        }
        if(isset($_COOKIE['username'])){
          $username = $_COOKIE['username'];
        }
        $querys = "SELECT SID FROM user WHERE SID='$username'";
        $results = $conn->query($querys);
        if($results->num_rows){
          $_SESSION['username'] = $_COOKIE['username'];
        }
        else{
          unset($_SESSION['username']);
        }
      ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
        <?php if(isset($_SESSION['username'])) {?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php" >WELCOME, <?= base64_decode($_SESSION['username']) ?></a>
          </li>
        <?php } ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">ABOUT</a>
          </li>
          <?php 
            if(isset($_SESSION['username'])){
              echo ' <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"href="#" data-toggle="collapse" data-target="#challenge" >Challenge</a>
              <div class="dropdown-menu bg-dark text-light" aria-labelledby="navbarDropdown">
                <a class="dropdown-item bg-dark text-light" href="parameter_tampering.php?SID='.$_SESSION['username'].'">Parameter Tampering</a>
                <a class="dropdown-item bg-dark text-light" href="cookie_manipulation.php">Cookie manipulation</a>
                <a class="dropdown-item bg-dark text-light " href="xss.php"> XSS </a>
                <a class="dropdown-item bg-dark text-light " href="sql_injection.php">SQL Injection</a>
            </li>';
            echo ' <li class="nav-item">
                       <a class="nav-link js-scroll-trigger" href="Logout.php">LogOut</a>
                   </li>';
            }else{
              echo '<li class="nav-item">
                      <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#login" >Login</a>
                    </li>';
              echo '<li class="nav-item">
                      <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#register">Register</a>
                    </li>';
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <script>
  window.onscroll = function() {myFunction()};

  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }
</script>