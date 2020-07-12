<?php include('server.php');?>

<html>
<head>
	<title>User registration using php</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class= " header">
		<h2>
		Home Page</h2>
	</div>
	
	<div class = "content">
		<?php if (isset ( $_SESSION['success'])) : ?>
			<div class = " error success">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);



					?>
				</h3>
			</div>

		<?php endif ?>
		

		<?php if (isset($_SESSION["username"])) : ?>
			<p> Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="" style ="color: red;">Logout</a></p>
		<?php endif ?>

	</div>

</body>
</html>
