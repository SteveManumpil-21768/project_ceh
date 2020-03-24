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
  ?>
</head>

<body id="page-top" style="background-color: #212429; color: cornsilk;">
  <!-- <body id="page-top" class="black"> -->
  <!-- Navigation -->
  <?php 
    include_once("include/navbar.php"); 
  ?>
  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading text-uppercase" style="font-family: 'Times New Roman', Times, serif;">Let's have fun !</div>
        <div>Goodluck</div>
      </div>
    </div>
  </header>


 <!-- MODAL -->
 <!-- LOGIN -->
 <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content black" style="">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color: blanchedalmond;">&times;</button>
        </div>
        <h1 style="text-align:center;">Login</h1>
        <br>
        <form  class="container"action="Login.php" method="post">
          <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                  <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                  <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password" required>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-10 offset-sm-2">
                  <label class="form-check-label"><input type="checkbox"> Remember me</label>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-10 offset-sm-2">
                  <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
          </div>
      </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



  <!-- Register -->
  <div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content black" style="">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color: blanchedalmond;">&times;</button>
        </div>
        <h1 style="text-align:center;">Register</h1>
        <br>
        <form  class="container" action="Register.php" method="post" onsubmit="return checkForm(this)">
          <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                  <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                  <input name="username"S class="form-control"  placeholder="username" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                  <input name="password" type="password" class="form-control" id="Password" placeholder="Password" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label"> Confirm Password</label><br>
              <div class="col-sm-10">
                  <input name="confirm_password" type="password" class="form-control" id="Confirm_Password" placeholder="Confirm Password" required>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-10 offset-sm-2">
                  <button type="submit" class="btn btn-primary" >Register</button>
              </div>
          </div>
          <p id="demo"></p>
      </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <script type="text/javascript">

  function checkPassword(str)
  {
    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
    return re.test(str);
  }

  function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }
    if(form.password.value != "" && form.Password.value == form.Confirm_Password.value) {
      if(!checkPassword(form.pwd1.value)) {
        alert("The password you have entered is not valid!");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
      return false;
    }
    return true;
  }

</script>

</body>

</html>
