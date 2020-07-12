<?php  
session_start();  
if(!isset($_SESSION["a_name"]))
{
  header("location:login.php");
}
?>





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="roominfo.php"> <?php echo $_SESSION["a_name"]; ?> </a>
            </div>

            <!--<ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>-->
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="roominfo.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
                    <li>
                        <a class="active-menu" href="display_user.php"><i class="fa fa-desktop"></i> View all users</a>
                    </li>
                      <li>
                        <a href="display.php"><i class="fa fa-desktop"></i> View the latest reg user</a>
                    </li>
					<!--<li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>-->
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
					
                    
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">



                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Users Info 
                        </h1>
                    </div>
                </div>

                
					
					<!--<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Registration Credentials
                        </div>
                    </div>
                </div>-->
           
<?php 
	$dbh = mysqli_connect('localhost', 'root', '', 'hotel12');
	//connect to MySQL server if (!$dbh)     
    
	//die("Unable to connect to MySQL: " . mysqli_error());
    
	//if connection failed output error message 
    if (!mysqli_select_db($dbh,'hotel12'))     
    
	die("Unable to select database: " . mysqli_error()); 
    //if selection fails output error message 
    
	$sql_stmt = "SELECT * FROM users"; 
    //SQL select query 
    
     $result = mysqli_query($dbh,$sql_stmt);
     //execute SQL statement 
     
	if (!$result)     
		die("Database access failed: " . mysqli_error()); 
    	//output error message if query execution failed 
        // echo "User" 
		$rows = mysqli_num_rows($result); 
   		// get number of rows returned 
    
	if ($rows) {     
    
	while ($row = mysqli_fetch_array($result)) {         
		echo "<h3>ID: {$row['id'] } <br>";         
		echo "Username: {$row['username'] } <br>";
		echo "  email :{$row['email'] } <br>";
		//echo " {$row['password'] } <br>";
		echo "  Newsletter ID:{$row['N_id'] } <br><br>";      
		//echo 'City: ' . $row['city'] . '<br>';         
		//echo 'Country: ' . $row['country'] . '<br><br>';     
	} 
} 
mysqli_close($dbh); //close the database connection 
?>
 </div>
        </div>
    
</div>
</nav>
</div>
</body>
</html>



