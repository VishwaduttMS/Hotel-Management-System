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
		
				$sql_stmt = "SELECT * FROM room_single"; 
				$result = mysqli_query($dbh,$sql_stmt);
				$rows = mysqli_num_rows($result); 
				if($rows)
				{
				while($row=mysqli_fetch_array($result))
				{
					$rid = $row['R_id'];
					$uid = $row['U_id'];
					$type = $row['Type'];
					$nroom = $row['No_Of_Rooms'];
					$cin = $row['Check_In'];
					$cout = $row['Check_Out'];
                    $ndays = $row['No_Of_Days'];
				}
			}
?> 

            <?php
    $dbh = mysqli_connect('localhost', 'root', '', 'hotel12');
       
                $sql_stmt = "SELECT * FROM room_deluxe"; 
                $result = mysqli_query($dbh,$sql_stmt);
                $rows = mysqli_num_rows($result); 
                if($rows)
                {
                while($row=mysqli_fetch_array($result))
                {
                    $rid = $row['R_id'];
                    $uid = $row['U_id'];
                    $type = $row['Type'];
                    $nroom = $row['No_Of_Rooms'];
                    $cin = $row['Check_In'];
                    $cout = $row['Check_Out'];
                    $ndays = $row['No_Of_Days'];
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
                <a class="navbar-brand" href="roominfo.php"> <?php echo $_SESSION["a_name"]; ?> </a>
            </div>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="roominfo.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
                    <li>
                        <a href="display_user.php"><i class="fa fa-desktop"></i> View all users</a>
                    </li>
                      <li>
                        <a href="display.php"><i class="fa fa-desktop"></i> View the latest reg user</a>
                    </li>
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
                            Status <small></small>
                        </h1>
                    </div>
                </div>

                
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Booking Details
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
                                            <th> Room id</th>
                                            <th><?php echo $rid; ?> </th>
                                            
                                        </tr>
                                        <tr>
                                            <th> User id</th>
                                            <th><?php echo $uid; ?> </th>
                                            
                                        </tr>
                                        <tr>
                                            <th> Type of Room</th>
                                            <th><?php echo $type; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>No of Rooms</th>
                                            <th><?php echo $nroom; ?> </th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Check In</th>
                                            <th><?php echo $cin; ?> </th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Check Out</th>
                                            <th><?php echo $cout; ?> </th>
                                            
                                        </tr>
                                        <tr>
                                            <th>No of Days</th>
                                            <th><?php echo $ndays; ?> </th>
                                            
                                        </tr>
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

                        