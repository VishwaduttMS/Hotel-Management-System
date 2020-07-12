<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sunrise Admin Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2> Admin Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<labe>Admin user name</label>
  		<input type="text" autocomplete="off" autofocus="on" name="a_name" required placeholder="Please Enter the Username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Please Enter the Password" title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
    <p>
      Not an Admin? <a href="http://localhost/Hotel1/Hotel1/User/login.php">User Sign in</a>
    </p>
  	
  </form>
</body>
</html>