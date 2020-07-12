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
		Login</h2>
	</div>
	<form method="post" action = "login.php">
		<!--display the error msgs here-->
		<?php
		include('errors.php');
		?>

		<div class="input-group">
			<label>UserName</label>
			<input type="text" name="Username" value = "<?php echo $username; ?>">
		</div>
		
		
		
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="Password_1">
		</div>
		
		
		<div class="input-group">
			<button type="submit" name="login" class = "btn">Login</button>
		</div>
		<p>
			Not yet a member?
			<a href="register.php">Sign up</a>
		</p>
		
			
	</form>
</body>