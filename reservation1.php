
<?php include('serverreserve.php') ?>
<?php
  $dbh = mysqli_connect('localhost', 'root', '', 'hotel12');
        $sql_stmt = "SELECT * FROM users" ; 
        $result = mysqli_query($dbh,$sql_stmt);
        $rows = mysqli_num_rows($result); 
        if($rows)
        {
        while($row=mysqli_fetch_array($result))
        {
          $id = $row['id'];
          $username = $row['username'];
          $email = $row['email'];
          $password = $row['password'];
        }
        }
?> 

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
                            DELUXE ROOM RESERVATION 
                            <p> Do not remember User id? Don't worry, we'll help you out! <br>Contact us on <b>+91 9741301718</b></br></p>
                        
                        </h1>
                    </div>
                </div> 
                 
             <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>

                        <div class="panel-body">
                            <form name="form" method="post">
                               <div class="form-group">
                                            <label>User id </label>
                                            <input type="text" autocomplete="off"  autofocus="on"  name="U_id" placeholder="Enter User id" class="form-control" required >
                                </div>
								<div class="form-group">
                                            <label>Type Of Room</label>
                                            <select name="Type" class="form-control" required onchange="roomcheck(this);">
												
												<option value="Deluxe Room">DELUXE ROOM</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>No.of Rooms</label>
                                            <select name="No_Of_Rooms" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
                                            </select>
                              </div>
							 
							 
							  
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="Check_In" type ="date" class="form-control" required="on">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="Check_Out" type ="date" class="form-control" required="on">
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type this code Below <?php $Random_code=rand(); echo $Random_code; ?> </p><br />
						<p>Enter the random code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						
            <input type="submit" name="submit" class="btn btn-primary">
						
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
