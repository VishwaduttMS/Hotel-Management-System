<!-- <?php  
//session_start();  
//if(!isset($_SESSION["user"]))
{
// header("location:index.php");
}
?> --> 

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
      // $username = mysqli_real_escape_string($db, $_POST['username']);
      // $password = mysqli_real_escape_string($db, $_POST['password']);
				
				
				
				$sql_stmt = "SELECT * FROM users" ; // where username = '$_POST[username]' and password = '$_POST[password]'";
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
					


					
				
				
				}
			}

					
					
				
		
	
		
		
		
			?> 



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User details credentials	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <!--<link href="assets/css/custom-styles.css" rel="stylesheet" />-->
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    
</head>

<body>
    <div id="wrapper">
    
       
        <!--/. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">



                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Welcome <b><?php echo "$username"; ?> </b>
                        </h1>
    
                    </div>
                </div>

                
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           This is Your Registration Details
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
                                            <th><mark> User ID</mark></th>
                                            <th><mark> <?php echo $id; ?> </mark> </th>
                                            
                                        </tr>
                                        <tr>
                                            <th> User Name</th>
                                            <th><?php echo $username; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
                                        <tr>
                                            <th>password</th>
                                            <th><?php echo $password; ?> </th>
                                            
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
                             <p>
       <a href="http://localhost/Hotel1/Hotel1/User/reservation2.php"> Click here to go back to Room Reservation</a>
    </p>                        
					
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
</nav>
</div>
</body>

</html>

                        