<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
     
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" autocomplete="off" autofocus="on" name="username" value="<?php echo $username; ?>" required placeholder="Please Enter a Username">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" required placeholder="Please Enter a Valid Email Address">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="Please Enter a Password" title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" placeholder="Please Retype the Password" title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
  	</div>
    <div class="input-group">
      <label>NewsLetters <br>Please select any one of the choices to recieve updates<br></label>
      <select name="N_id"  style="width: 375px" class="input-group">
                        <option value selected ></option>
                        <option value="1">Gym</option>
                        <option value="2">Swimming Pool</option>
                        <option value="3">Tennis</option>
                        <option value="4">Club</option>
      </select>
      
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