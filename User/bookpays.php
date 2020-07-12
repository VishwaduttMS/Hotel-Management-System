<!--<?php  
//session_start();  
//if(!isset($_SESSION["a_name"]))
{
  //header("location:login.php");
}
?>-->
<!--<?php include('serv.php') ?>-->
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
					//$lname = $row['LName'];
					$nroom = $row['No_Of_Rooms'];
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
					$cin = $row['Check_In'];
					$cout = $row['Check_Out'];
                    $ndays = $row['No_Of_Days'];
					$price = 2000;
				
				
				}
			}
					
					
				
		
	
		
		
		
			?> 

            <?php
    $dbh = mysqli_connect('localhost', 'root', '', 'hotel12');
        // if(!isset($_GET["id"]))
        // {
                
        //   header("location:index.php");
        // }
        // else {
        //      //$curdate=date("Y/m/d");
        //      //include ('db.php');
        //      //$id = $_GET['rid'];
                
                
                
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
                    //$lname = $row['LName'];
                    $nroom = $row['No_Of_Rooms'];
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
                    $cin = $row['Check_In'];
                    $cout = $row['Check_Out'];
                    $ndays = $row['No_Of_Days'];
                    $price = 5000;
                
                
                }
            }
            
            //header('location: http://localhost/Hotel1/Hotel1/User/bookpay.php');
                    
                    
                
        
    
        
        
        
            ?> 



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Information	</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<body>
    <div id="wrapper">
        
		
		

        <div id="page-wrapper">
            <div id="page-inner">



               <!-- <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Status <small></small>
                        </h1>
                    </div>
                </div>-->

                
					
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
                                        <tr>
                                            <th><mark>Total Price</mark></th>
                                            <th><mark><?php echo $price*$nroom*$ndays; ?></mark> </th>
                                        </tr>
                                        
										
                                   
                                  
                                        
                                        </thead>
                                    
                                </table>
                               
                                
                            </div>
                        
					
							
                        </div>
                    


                
</div>
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            PAYMENT DETAILS 
                            
                        </h1>
                    </div>
                </div> 
                 
             <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            CARD DETAILS
                        </div>
                        <div class="panel-body">
                            <form name="form" method="post">
                              <div class="form-group">
                                            <label>Room id</label>
                                            <input type="text" autocomplete="off" autofocus="on" name="uid" placeholder="Enter Room id" class="form-control" required>
                                </div>
                              <div class="form-group">
                                            <label>User id</label>
                                            <input type="text" autocomplete="off" name="rid" placeholder="Enter User id" class="form-control" required>
                        
                        
                        
                              </div>
                               <div class="form-group">
                                            <label>Card No.</label>
                                            <input type="text" autocomplete="off" name="card" placeholder="Enter Card No." class="form-control" required>
                                </div>
                              <div class="form-group">
                                            <label>Name On Card</label>
                                            <input type="text" autocomplete="off" name="cardname" placeholder="Enter Card Name" class="form-control" required>
                        
                        
                        
                              </div>
                <div class="form-group">
                                            <label>Exp Month</label>
                                            <input type="text" autocomplete="off" name="expmonth" placeholder="Enter Exp Month" class="form-control" required>
                              </div>
                               <div class="form-group">
                                            <label>Exp Year</label>
                                            <input type="text" autocomplete="off" name="expyear" placeholder="Enter Exp Year" class="form-control" required>
                              </div>
                              <div class="form-group">
                                            <label>CVV</label>
                                            <input type="text" autocomplete="off" name="cvv" placeholder="Enter CVV" class="form-control" required>
                                </div>
                                <div class="form-group">
                                            <label>Amount</label>
                                            <input type="text" autocomplete="off" name="amt" placeholder="Enter Amount" class="form-control" required>
                                </div>
               
               
                
               
                       </div>
                        
                    </div>
                </div>
        
        
            <div class="col-md-12 col-sm-12">
                    <div class="well">    
            <input type="submit" name="submit" class="btn btn-primary">
            <?php
              if(isset($_POST['submit']))
              {
              
                     
                                                                
                   //header('location: http://localhost/Hotel1/Hotel1/User/bookpay.php');
                    $con=mysqli_connect("localhost","root","","hotel12");
                  //$check="SELECT id FROM users WHERE username = '$_POST[username]'";
                                    $check1="select * FROM payment";
                  $rs = mysqli_query($con,$check1);
                                  //  $rrs = mysqli_query($con,$check);
                                    
                  //$data = mysqli_fetch_array($rrs, MYSQLI_NUM);
                   // if($data[0] == 1) {
                                    //    echo "<script type='text/javascript'> alert('Please login before reserving a room')</script>";
                                   // }

                  
                   {
                    //if($_POST[Check_In] > $_POST[Check_Out])
                    //{
                    //      echo "<script type='text/javascript'> alert('Check out date must be greater than check in')</script>";
                      
                   // }


                                        $newUser="INSERT INTO `payment`(`Card_No`,`R_id`,`U_id`,`Total_Cost`) VALUES ('$_POST[card]','$_POST[rid]','$_POST[uid]','$_POST[amt]')";

                    if (mysqli_query($con,$newUser))
                    {
                      
                      echo "<script type='text/javascript'> alert('Payment Successful')</script>";
                      //  header('location: http://localhost/Hotel1/Hotel1/User/bookpay.php');


                    }
                    else
                    {
                      echo "<script type='text/javascript'> alert('Error! Please try Again')</script>";
                      
                    }
                  }

              $msg="Your code is correct";
                // header('location: http://localhost/Hotel1/Hotel1/User/bookpay.php');
              }
              
              ?>
            </form>
              
                    </div>
                </div>
            </div>
  
                </div>

              </div>
            </div>
          </div>

</body>
</html>






           




    






                        