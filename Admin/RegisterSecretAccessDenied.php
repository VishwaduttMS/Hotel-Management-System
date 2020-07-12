<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sunrise Admin Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Admin Register</h2>
  </div>
	
  <form method="post" action="RegisterSecretAccessDenied.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Admin name</label>
  	  <input type="text" autocomplete="off" autofocus="on" name="a_name" value="<?php echo $a_name; ?>" required placeholder="Please Enter a Username">
  	</div>
  	<div class="input-group">
  	
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" placeholder="Please Enter a Password" title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
  	</div>
  	
    
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  	
  </form>
</body>
</html>