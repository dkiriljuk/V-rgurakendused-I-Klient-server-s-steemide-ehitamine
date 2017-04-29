<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/css/bootstrap-dialog.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js"></script>
</head>
<script type="text/javascript" src="js/script.js"></script>
<body>
	<?php
		session_start();
		if (isset($_POST['inputUsername'])) {
		include('database/db.class.php'); 
		$database = new db(); 
		$usname = strip_tags($_POST['inputUsername']);
	    $paswd = strip_tags($_POST['inputPassword']);
		$hash_pass = md5($paswd);
		$login = $database->getOne("SELECT id, username, password FROM login WHERE username = '$usname'");
		$id = $login['id'];
		$dbUsname = $login['username'];
		$dbPassword = $login['password'];
			if ($usname == $dbUsname && $hash_pass == $dbPassword) { 
	            $_SESSION['username'] = $usname;
	            $_SESSION['id'] = $id;
	            header("Location: site.php");
		    } 
		    else {
				echo "<script type='text/javascript'>alert_login();</script>";
	   		}   
		}
	?>
	  <div class="container">
	      <form class="form-signin col-md-4 col-md-offset-4" action="login.php" method="post">
	        <h2 class="form-signin-heading">Please sign in</h2>
	        <label for="inputUsername" class="sr-only">Username</label>
	        <input type="username" name="inputUsername" class="form-control" placeholder="Username" required autofocus>
	        <label for="inputPassword" class="sr-only">Password</label>
	        <input type="password" name="inputPassword" class="form-control" placeholder="Password" required><br>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	      </form>
	    </div>
	  <div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body…</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>