<?php    include ('server.php');

?>

<html>
<head>
	<title>User registration using php</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class= " header">
		<h2>
		Register</h2>
	</div>
	<form method="post" action = "RegisterPage.php">
		<!--display the error msgs here-->
		<?php
		include('errors.php');
		?>

		<div class="input-group">
			<label>UserName</label>
			<input type="text" name="username" value = "<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value = "<?php echo $email; ?>">
    </div> 
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="text" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class = "btn">Register</button>
		</div>
		<p>
			Aldready a member?
			<a href="login.php">Sign In</a>
		</p>
		
			
	</form>
</body>