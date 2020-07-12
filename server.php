<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hotel12');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $N_id = mysqli_real_escape_string($db, $_POST['N_id']);
  // first check the database to make sure 
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if (empty($username)) { array_push($errors, "Username is required"); }
if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      array_push($errors, "Only letters and white space allowed");
    }

  if ($user) { 
  
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }
  if (empty($email)) { array_push($errors, "Email is required"); }
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
array_push($errors, "Invalid email format");
}
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }
  if (empty($N_id)) { array_push($errors, "NewsLetter is required"); }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = ($password_1);

  	$query = "INSERT INTO users (username, email, password, N_id) 
  			  VALUES('$username', '$email', '$password', '$N_id')";
          
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: http://localhost/Hotel1/Hotel1/User/user_details.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = ($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: http://localhost/Hotel1/Hotel1/index.php');
      
      
      
    }else {
      array_push($errors, "Wrong username/password combination");
	
    }
  }
}

?>