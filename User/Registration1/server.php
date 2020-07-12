<?php
session_start();
	
	$username = "";
	$email = "";
	$phone="";
	$errors = array();



// connnect to the database
$db = mysqli_connect('localhost','root','','hotel1');

//if the registration button is clicked

if (isset($_POST['register'])){
	$username = mysqli_real_escape_string($db,$_POST['Username']);
	
	$password_1 = mysqli_real_escape_string($db,$_POST['Password_1']);
	$password_2 = mysqli_real_escape_string($db,$_POST['Password_2']);
	$phone = mysqli_real_escape_string($db,$_POST['Phone']);
	$email = mysqli_real_escape_string($db,$_POST['Email']);


	// ensure that form fields are filled properly

	if(empty($username))
	{
		array_push($errors, "Username is required");

	}

	if(empty($email))
	{
		array_push($errors, "email is required");
		
	}

	if(empty($password_1))
	{
		array_push($errors, "password is required");
		
	}


	if($password_1!=$password_2)
	{

		array_push($errors, "The two passwords are not the same");

	}

	// if there are no errors save user toi db

	if( count($errors) == 0)
	{
		$password = md5($password_1);  //encrypt the password
		$sql = "INSERT INTO User (Username,Password,Phone,Email) VALUES ('$username','$password','$phone','$email')";

		//login credent
		$_SESSION['Username'] = $username;
		$_SESSION['success'] = "You are now logged in!!!";
		header('location: index.php'); //redirect the user to hoime page



	}


}
	// log in from login page
	if(isset($_POST['login'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
	
	$password = mysqli_real_escape_string($db,$_POST['password']);

	// ensure that form fields are filled properly

	if(empty($username))
	{
		array_push($errors, "Username is required");

	}

	if(empty($password))
	{
		array_push($errors, "password is required");
		
	}


	}
	if(count($errors) == 0){
		//.$password = md5($password); //encrypt the password
		$query = "SELECT * FROM user where username = '$username' and password = 'password'";
		$result = mysqli_query($db, $query);
		if(mysqli_num_rows($result) == 1){
			//log the user in
			$_SESSION ['username'] = $username;
			$_SESSION['success'] = "you are now logged in";
			header('location: index.php'); //redirect to the home page

		}
		

	}


	//log out
	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: home.php');

	}




?>
