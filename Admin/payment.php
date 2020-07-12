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
    <title>Administrator    </title>
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
                        <a href="display_user.php"><i class="fa fa-desktop"></i> View all users</a>
                    </li>
                      <li>
                        <a href="display.php"><i class="fa fa-desktop"></i> View the latest reg user</a>
                    </li>                    
                    <li>
                        <a class="active-menu" href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>                                        
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>                    
                    </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            DISPLAY ALL TRANSACTIONS
                        </h1>
                    </div>
                </div>
<?php 
    $dbh = mysqli_connect('localhost', 'root', '', 'hotel12');
    if (!mysqli_select_db($dbh,'hotel12'))         
    die("Unable to select database: " . mysqli_error()); 
    $sql_stmt = "SELECT * FROM payment"; 
     $result = mysqli_query($dbh,$sql_stmt);
    if (!$result)     
        die("Database access failed: " . mysqli_error());  
        $rows = mysqli_num_rows($result); 
    if ($rows) {     
    while ($row = mysqli_fetch_array($result)) {         
        echo "<h3><br>Payment ID : {$row['P_id'] } <br>";         
        echo "Card Number : {$row['Card_No'] } <br>";
        echo "  User ID : {$row['U_id'] } <br>";
        echo " Total Cost : {$row['Total_Cost'] } <br>";      
        echo "Complete Payment Successfully done! <br>";  
    } 
} 
mysqli_close($dbh);
?>
 </div>
        </div>
    
</div>
</nav>
</div>

</body>
</html>



