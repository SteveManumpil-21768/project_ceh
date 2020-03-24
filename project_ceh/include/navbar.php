
<nav class="navbar navbar-expand-lg  fixed-top" id="mainNav">
    <div class="container">
      <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top">Djasen Tjendry</a> -->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">ABOUT</a>
          </li>
          <?php 
            if(isset($_SESSION['username'])){
              // echo '<li class="dropdown nav-item">
              //         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Challenge
              //         <span class="caret"></span></a>
              //         <ul class="dropdown-menu">
              //           <li><a href="#">Parameter Tampering</a></li>
              //           <li><a href="#">Cookie Manipulation</a></li>
              //           <li><a href="sql_injection.php">SQL Injection</a></li>
              //         </ul>
              //       </li>';
              echo '<li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#skills" data-toggle="collapse" data-target="#challenge" >Challenge</a>
                    </li>';
              echo'<div id="challenge" class="collapse">
                    <br>
                    <a href="#">Parameter Tampering</a>
                    <br>
                    <a href="#">Cookie manipulation</a>
                    <br>
                    <a href="xss.php"> XSS </a>
                    <br>
                    <a href="sql_injection.php">SQL Injection</a>
                  </div>';
              echo '<li class="nav-item">
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