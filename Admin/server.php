<?php
session_start();

// initializing variables
$a_name = "";
$password="";
//$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hotel12');

// REGISTER ADMIN

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $a_name = mysqli_real_escape_string($db, $_POST['a_name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
 

  


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $admin_check_query = "SELECT * FROM admin WHERE a_name='$a_name' OR password='$password' LIMIT 1";
  $result = mysqli_query($db, $admin_check_query);
  $admin = mysqli_fetch_assoc($result);
  if (empty($a_name)) { array_push($errors, "Admin Name is required"); }
if (!preg_match("/^[a-zA-Z ]*$/",$a_name)) {
      array_push($errors, "Only letters and white space allowed");
    }
  if ($admin) { // if user exists
    if ($admin['a_name'] === $a_name) {
      array_push($errors, "Admin name already exists");
    }

  }
  if (empty($password)) { array_push($errors, "Password is required"); }

  // Finally, register admin if there are no errors in the form
  if (count($errors) == 0) {
    $password = ($password);//encrypt the password before saving in the database

    $query = "INSERT INTO admin (a_name, password) 
          VALUES('$a_name','$password')";
    mysqli_query($db, $query);
    $_SESSION['a_name'] = $a_name;
    $_SESSION['success'] = "You are now logged in";
    header('location: login.php');
  }
}

// ... 

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $a_name = mysqli_real_escape_string($db, $_POST['a_name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($a_name)) {
   echo '<script>alert("Your Login Name  is  empty") </script>' ;
  }
  if (empty($password)) {
    echo '<script>alert("Your  Password is empty") </script>' ;
  }

  if (count($errors) == 0) {
    
    $password = ($password);
    $query = "SELECT * FROM admin WHERE a_name='$a_name' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['a_name'] = $a_name;
      $_SESSION['success'] = "You are now logged in";
      header('location:roominfo.php');
      
    }
  else {
      echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
    }
  }
}

?>