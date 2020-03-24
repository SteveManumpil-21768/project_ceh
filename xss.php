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
    $query = "SELECT * FROM (SELECT * FROM comments  ORDER BY 1 DESC LIMIT 4) sub ORDER BY 1 ASC";
    $result = $conn->query($query);
  ?>

<script>
		function add_comment() {
			var req;
      var comment = <?php echo"$('#comment').val()" ?>;
      if(comment.includes("FLAG") || comment.includes("flag") && comment.includes("<script>") && comment.includes("<\script>")){
        alert("LOVERAPP{X55_13Y_H4CK3RM4N}");
      }
			req = $.ajax({
				url:"add_comment.php",
				type:"POST",
				data: {
					<?php echo "
						comment:  $('#comment').val(),
					";?>
				}
			});
			req.done(function(response,textStatus,jqXHR){
				if(response.indexOf("ok") != -1){
					location.reload();
				}
			});
			req.fail(function(response,textStatus,errorThrown){
				location.reload();
			})

		}
	</script>

</head>

<body id="page-top" style="background-color: #212429; color: cornsilk;" class="black">
  <!-- <body id="page-top" class="black"> -->
  <!-- Navigation -->
  <?php 
    include_once("include/navbar.php"); 
  ?>
  <br><br><br><br><br>
  <h1 style="text-align:center;">Share Your Story</h1><br>
  <h4 style="text-align:center;">If you're passionate about something, then you should pick up your STORY and share with us.</h4>
  <?php 

     while($row = $result->fetch_assoc()){
        echo'<div class="bg-white comment" style="text-align:center" >';
        echo'<font color="black">';
        echo $row['username'];
        echo '<hr style="border: 2px solid black;">';
        echo $row['comment'];
        echo '</font>';
        echo'</div>';
     }
  
  ?>
  <br>
  <form onsubmit="add_comment(); return false;" method="post" class="">
    <div class="active-cyan-4 mb-4 col-5 container">
        <input type="text" class="form-control" name="comment" id="comment" type="text" placeholder="Comment" aria-label="Search" size="30">
    </div>
    <div class="active-cyan-4 mb-4 col-5 container" style="margin-left:46.7%">
        <input type="submit" class="btn btn-success">
    </div>
  </form>
</body>
</html>
