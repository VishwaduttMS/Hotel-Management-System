

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ROOM RESERVATION</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
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
                                            <label>Card No.</label>
                                            <input type="text" autocomplete="off" autofocus="on" name="card" placeholder="Enter Card No." class="form-control" required>
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
                                    $check1="select * FROM payments";
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


                                        $newUser="INSERT INTO `payments`(`Card_No`,`Total_Cost`) VALUES ('$_POST[card]','$_POST[amt]')";

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
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
