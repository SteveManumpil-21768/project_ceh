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

<script>
		function logincheck() {
			var req;
			req = $.ajax({
				url:"login.php",
				type:"POST",
				data: {
					<?php echo "
						email:  $('#inputEmail').val(),
						password:$('#inputPassword').val()
					";?>
				}
			});
			req.done(function(response,textStatus,jqXHR){
				if(response.indexOf("ok") != -1){
					window.location.replace("index.php");
				}else{
					$(".error").css({
					display:"block"
					})
				}
			});
			req.fail(function(response,textStatus,errorThrown){
				alert("error : "+ textStatus, errorThrown);
			})

		}
	</script>
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
        <form onsubmit="logincheck(); return false;" style="display: block;" id="login-form" class="container">
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
          <div class="error" style="color: red; display: none;">email tidak terdaftar atau password salah. silahkan coba lagi.<br>	<br></div>
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
  <div class="modal fade" id="register" role="dialog" >
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content black" style="">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color: blanchedalmond;">&times;</button>
        </div>
        <h1 style="text-align:center;">Register</h1>
        <br>
        <form  class="container" action="Register.php" method="post" enctype="multipart/form-data" onsubmit="return checkForm(this)">
          <div class="form-group row">
              <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
              <div class="col-sm-8">
                  <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="inputEmail" class="col-sm-4 col-form-label">Username</label>
              <div class="col-sm-8">
                  <input name="username"S class="form-control"  placeholder="username" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
              <div class="col-sm-8">
                  <input name="password" type="password" class="form-control" id="Password" placeholder="Password" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label"> Confirm Password</label><br>
              <div class="col-sm-8">
                  <input name="confirm_password" type="password" class="form-control" id="Confirm_Password" placeholder="Confirm Password" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Upload Your Profile Picture </label><br>
              <div class="col-sm-8">
              <input type="file" name="fileToUpload" id="fileToUpload">
              <!-- <input type="submit" value="Upload Image" name="submit"> -->
              </div>
          </div>
          <br><br>
          <div class="form-group row">
              <div class="col-sm-10 offset-sm-4">
                  <button name="submit"type="submit" class="btn btn-primary" >Register</button>
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


  var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #ffffff;}";
        document.body.appendChild(css);
    };


</script>

  <br><br><br><br>
  <h1 id="cool" style="text-align:center;">Our Hackers</h1>
    <section class="page-section" id="portfolio">
        <div class="container">
            <div class="row portfolio-item">
                <div class=" col-md-6"style="background-color:#212429;border-style: solid; border-color: white;">
                    <img class="img-fluid" src="img/steven.jpg" alt="foto" style="width:600px;">
                    <h1 style="text-align:center;">Steven Wijaya</h1>
                    <button  type="button" class=" btn btn-lg btn-dark collapsed" data-toggle="collapse" data-target="#djasen" style="width:100%;">Alasan Masuk IT</button>
                    <div id="djasen" class="collapse">
                        <p>bosen sekolah samping kuburan melulu</p>
                    </div>
                </div>
                <div class=" col-md-6"style="background-color:#212429;border-style: solid; border-color: white;">
                    <img class="img-fluid" src="img/andre.jpg" alt="foto" style="">
                    <h1 style="text-align:center;">Andreas Agustinus</h1>
                    <button  type="button" class=" btn btn-lg btn-dark collapsed" data-toggle="collapse" data-target="#steven" style="width:100%;">Alasan Masuk IT</button>
                    <div id="steven" class="collapse">
                        <p>Kalo bisa gambar udah masuk animasi.</p>
                    </div>
                </div>
                <div class=" col-md-6"style="background-color:#212429;border-style: solid; border-color: white;">
                    <img class="img-fluid" src="img/steve.jpg" alt="foto" style="">
                    <h1 style="text-align:center;">Steve Manumpil</h1>
                    <button  type="button" class=" btn btn-lg btn-dark collapsed" data-toggle="collapse" data-target="#steve" style="width:100%;">Alasan Masuk IT</button>
                    <div id="steve" class="collapse">
                        <p>Awalnya masuk TI kirain Teknik Industri, eh taunya Teknik Informatika</p>
                    </div>
                </div>
                <div class=" col-md-6"style="background-color:#212429;border-style: solid; border-color: white;">
                    <img class="img-fluid" src="img/dd.jpg" alt="foto" style="">
                    <h1 style="text-align:center;">Djasen Tjendry</h1>
                    <button  type="button" class=" btn btn-lg btn-dark collapsed" data-toggle="collapse" data-target="#andre" style="width:100%;">Alasan Masuk IT</button>
                    <div id="andre" class="collapse">
                        <p>jadi awalnya pas SMA saya punya laptop terus rada ngelag gitu udah dibawa ke beberapa 
                            toko tapi mereka ga ngerti kenapa bisa ngelek, jadi saya berniat masuk informatika untuk mencari 
                            tahu kenapa laptop saya bisa ngelag, saat udh masuk informatika ternyata yang di pelajari itu beda dari 
                            yang saya harapkan ternyata belajar ngoding bikin software, dan ternyata laptop saya ngelag karena 
                            windows bajakkan :( , dan saya skrg terjebak didunia perkodingngan....HELP !!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
