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
	<form method="post" action = "register.php">
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
			<label>Confirm Password</label>
			<input type="text" name="Password_2">
		</div>
		<div class="input-group">
			<label>Phone no</label>
			<input type="text" name="Phone" >
    </div> 
    <div class="input-group">
			<label>Email</label>
			<input type="text" name="Email" value = "<?php echo $email; ?>">
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