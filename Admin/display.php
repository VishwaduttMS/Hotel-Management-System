<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);  
session_start();  
if(!isset($_SESSION["a_name"]))
{
  header("location:login.php");
}
?>

<?php
	$dbh = mysqli_connect('localhost', 'root', '', 'hotel12');
		// if(!isset($_GET["id"]))
		// {
				
		// 	 header("location:index.php");
		// }
		// else {
		// 		//$curdate=date("Y/m/d");
		// 		//include ('db.php');
		// 		//$id = $_GET['rid'];
				
				
				
				$sql_stmt = "SELECT * FROM users"; 
				$result = mysqli_query($dbh,$sql_stmt);
				$rows = mysqli_num_rows($result); 
				if($rows)
				{
				while($row=mysqli_fetch_array($result))
				{
					$id = $row['id'];
					$username = $row['username'];
					//$fname = $row['FName'];
					//$lname = $row['LName'];
					$email = $row['email'];
					//$nat = $row['National'];
					//$country = $row['Country'];
					//$Phone = $row['Phone'];
					//$troom = $row['TRoom'];
					//$nroom = $row['NRoom'];
					//$bed = $row['Bed'];
					//$non = $row['NRoom'];
					//$meal = $row['Meal'];
					//$cin = $row['cin'];
					//$cout = $row['cout'];
					//$sta = $row['stat'];
					//$days = $row['nodays'];
					$password = $row['password'];
					$N_id = $row['N_id'];
					
				
				
				}
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
                <a class="navbar-brand" href="roominfo.php">  <?php echo $_SESSION["a_name"]; ?> </a>
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
                        <a  href="roominfo.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
                    <li>
                        <a href="display_user.php"><i class="fa fa-desktop"></i> View all users</a>
                    </li>
                      <li>
                        <a  class="active-menu" href="display.php"><i class="fa fa-desktop"></i> View the latest reg user</a>
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
                            Status <small>Newly Registered User </small>
                        </h1>
                    </div>
                </div>

                
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Registration Credentials
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                	<thead>
                                    <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th> User id</th>
                                            <th><?php echo $id; ?> </th>
                                            
                                        </tr>
                                        <tr>
                                            <th> User Name</th>
                                            <th><?php echo $username; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
                                        <!--<tr>
                                            <th>password</th>
                                            <th><?php echo $password; ?> </th>
                                            
                                        </tr>-->
                                        <tr>
                                            <th>N_id</th>
                                            <th><?php echo $N_id; ?> </th>
                                            
                                        </tr>

										<!-- <tr>
                                            <th>Nationality </th>
                                            <th><?php //echo $nat; ?></th>
                                            
                                        </tr> -->
									<!-- 	<tr>
                                            <th>Country </th>
                                            <th><?php //echo $country;  ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Phone No </th>
                                            <th><?php //echo $Phone; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Type Of the Room </th>
                                            <th><?php //echo $troom; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>No Of the Room </th>
                                            <th><?php //echo $nroom; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Meal Plan </th>
                                            <th><?php //echo $meal; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Bedding </th>
                                            <th><?php //echo $bed; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Check-in Date </th>
                                            <th><?php //echo $cin; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Check-out Date</th>
                                            <th><?php //echo $cout; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>No of days</th>
                                            <th><?php //echo $days; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Status Level</th>
                                            <th><?php //echo $sta; ?></th>
                                            
                                        </tr> -->
                                   
                                  
                                        
                                        </thead>
                                    
                                </table>
                            </div>
                        
					
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</div>
</nav>
</div>
</body>
</html>

                        