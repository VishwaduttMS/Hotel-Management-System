<?php
session_start();
	
	$username = "";
	$email = "";
	$errors = array();



// connnect to the database
$db = mysqli_connect('localhost','root','','registration1');

//if the registration button is clicked

if (isset($_POST['register'])){
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

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
		array_push($errors, "password_1 is required");
		
	}


	if($password_1!=$password_2)
	{

		array_push($errors, "The two passwords are not the same");

	}

	// if there are no errors save user toi db

	if( count($errors) == 0)
	{
		$password = md5($password_1);  //encrypt the password
		$sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
		mysqli_query($db,$sql);

		//login credent
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in!!!";
		header('location: index.php'); //redirect the user to hoime page



	}


}
	// log in from login page
	

?>
