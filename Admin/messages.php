

<?php  
session_start();  
if(!isset($_SESSION["a_name"]))
{
 header("location:login.php");
}
$dbh = mysqli_connect('localhost', 'root', '', 'hotel12');
        // if(!isset($_GET["id"]))
        // {
                
        //   header("location:index.php");
        // }
        // else {
        //      //$curdate=date("Y/m/d");
        //      //include ('db.php');
        //      //$id = $_GET['rid'];
      // $username = mysqli_real_escape_string($db, $_POST['username']);
      // $password = mysqli_real_escape_string($db, $_POST['password']);
                
                
                
                $sql_stmt = "SELECT * FROM admin" ; // where username = '$_POST[username]' and password = '$_POST[password]'";
                $result = mysqli_query($dbh,$sql_stmt);
                $rows = mysqli_num_rows($result); 
                if($rows)
                {
                while($row=mysqli_fetch_array($result))
                {
                    $id = $row['a_id'];
                    $username = $row['a_name'];
                    //$fname = $row['FName'];
                    //$lname = $row['LName'];
                    //$email = $row['email'];
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
    <title>Administrator</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="roominfo.php"><?php echo $_SESSION["a_name"]; ?> </a>
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
                        <a class="active-menu" href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
                    <li>
                        <a href="display_user.php"><i class="fa fa-desktop"></i> View all users</a>
                    </li>
                      <li>
                        <a href="display.php"><i class="fa fa-desktop"></i> View the latest reg user</a>
                    </li>
					<!--<li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>-->
                    <li>
                        <a href="Payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                  
                    <li>
                        <a href="logout.php" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    


                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           News letters<small> panel</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 <?php
				//include('db.php');
				//$mail = "SELECT * FROM `contact`";
				//$rew = mysqli_query($con,$mail);
                $db = mysqli_connect('localhost', 'root', '', 'hotel12');
                        $sql = "select * from room";
                        $result = mysqli_query($db,$sql);
				
			   ?>
				 <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h3>Send The News Letters to Followers</h3>
						<!--<?php
						while($rows = mysqli_fetch_array($result))
						{
								$app=$rows['approval'];
								if($app=="Allowed")
								{
									
								}
						}
						?>-->
                        <p></p>
                        <p>
						<div class="panel-body">
                            <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal">
                              Send a New News Letter
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Compose News Letter</h4>
                                        </div>
										<form method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Admin id</label>
                                            <input type="text" autocomplete="off" name="a_id" class="form-control" required placeholder="Enter id" value="<?php echo $id; ?>" readonly >
                                            </div>
                                            <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" autofocus="on" name="title" class="form-control" required placeholder="Enter Title" >
											</div>
										</div>
										<div class="modal-body">
                                            <div class="form-group">
                                            <label>Subject</label>
                                            <input name="subject" class="form-control" required placeholder="Enter Subject">
											</div>
                                        </div>
										<div class="modal-body">
										<div class="form-group">
										  <label for="comment">News</label>
										  <textarea name="news" class="form-control" required rows="5" id="comment" placeholder="Enter the Content"></textarea>
										</div>
										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											
                                           <input type="submit" name="log" value="Send" class="btn btn-primary">
										  </form>
										   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
							<?php
							if(isset($_POST['log']))
							{	
								$log ="INSERT INTO `newsletterlog`(`a_id`,`title`, `subject`, `news`) VALUES ('$_POST[a_id]','$_POST[title]','$_POST[subject]','$_POST[news]')";
								if(mysqli_query($db,$log))
								{
									echo '<script>alert("New Update has been successfully sent") </script>' ;
											
								}
								
							}
							
								
							?>
                          
                        </p>
						
                    </div>
                </div>
            </div>
               <?php
				
				//$sql = "SELECT * FROM `contact`";
				//$re = mysqli_query($con,$sql);
                $sql = "select * from room";
                        $result = mysqli_query($db,$sql);
                
				
			   ?>
            <!--<div class="row">
                <div class="col-md-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
											<th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Date</th>
											<th>Status</th>
											<th>Approval</th>
											<th>Remove</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['fullname']."</td>
													<td>".$row['phoneno']."</td>
													<td>".$row['email']."</td>
													<td>".$row['cdate']."</td>
													<td>".$row['approval']."</td>
													<td><a href=newsletter.php?eid=".$id ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> Permission</button></td>
													<td><a href=newsletterdel.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete</button></td>
												</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$row['fullname']."</td>
													<td>".$row['phoneno']."</td>
													<td>".$row['email']."</td>
													<td>".$row['cdate']."</td>
													<td>".$row['approval']."</td>
													<td><a href=newsletter.php?eid=".$id." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> Permission</button></td>
													<td><a href=newsletterdel.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete </button></td>		
												</tr>";
											
											}
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>-->
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
