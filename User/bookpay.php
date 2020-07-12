<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
$errors = array(); 
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
                    $price = 5000;
                }
                }
?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Page	</title>
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
  margin-bottom: 17px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}


label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 10px;
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
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
		
		<div id="page-wrapper">
            <div id="page-inner">
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
              <div class="col-md-16 col-sm-16">
                    <div class="well">   
                      <div class="row">
               <div class="col-md-20 col-sm-20">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <form name="form" method="post">
                              <div class="row">
                              <div class="form-group">
                                 <div class="col-25">
                                            <label>Room id</label>
                                            <input type="text" autocomplete="off" name="rid" placeholder="Enter Room id" class="form-control" required value="<?php echo $rid; ?>" readonly>
                                          </div>
                                        </div>
                                 <div class="form-group">       
                                 <div class="col-25">
                                            <label>User id</label>
                                            <input type="text" autocomplete="off" name="uid" placeholder="Enter User id" class="form-control" required value="<?php echo $uid; ?>" readonly >
                                          </div>
                                  </div>
                                </div>
                                <div class="col-md-20 col-sm-20">
                                <div class="panel panel-primary">
                              <div class="panel-heading">
                            PAYMENT -<small>CARD DETAILS</small>
                        </div>
                      </div>
                            <div class="row">
                               <div class="col-25">
                                  <div class="row">
                                     <div class="col-25">
                                           <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
          </div>
        </div>   
    </div>
  </div> 
</div>
                            <div class="row">
                              <div class="form-group">
                                <div class="col-25">
                                            <label>Card No.</label>
                                            <input type="text" autocomplete="off" name="card" pattern="[0-9]{16}" title="Card No. must be Sixteen digits" placeholder="Enter Card No."  class="form-control" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-25">
                                            <label>Name On Card</label>
                                            <input type="text" autocomplete="off" name="cardname" pattern="[ A-Za-z]{1,20}" title="Only letters and whitespace allowed" placeholder="Enter Card Name" class="form-control" required>
                                        </div>
                                    </div>
                        
                              </div>
                              <div class="row">
                <div class="form-group">
                  <div class="col-25">
                                            <label>Exp Month</label>
                                            
                                            <select name="expmonth" class="form-control" required>
                                              <option value selected ></option>
                                              <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                  </select>
                              </div>
                            </div>
                               <div class="form-group">
                                <div class="col-25">
                                            <label>Exp Year</label>
                                            
                                            <select name="expyear" class="form-control" required>
                                             <option value selected ></option>
                                              <option value="20"> 2020</option>
                    <option value="21"> 2021</option>
                    <option value="22"> 2022</option>
                    <option value="23"> 2023</option>
                    <option value="24"> 2024</option>
                    <option value="25"> 2025</option>
                  </select>
                              </div>
                            </div>
                          </div>
                             <div class="row">
                              <div class="form-group">
                                <div class="col-25">
                                            <label>CVV</label>
                                            <input type="password" autocomplete="off" name="cvv" pattern="[0-9]{3}" title="CVV must be three digits only" placeholder="Enter CVV" class="form-control" required>
                                </div>
                              </div>
                            
                                <div class="form-group">
                                  <div class="col-25">
                                            <label>Amount</label>
                                            <input type="text" autocomplete="off" name="amt" placeholder="Enter Amount" class="form-control" required value="<?php echo $price*$nroom*$ndays; ?>" readonly  >
                                </div>
                              </div>
               </div>
                       </div>
                        
                    </div>
                </div> 
            <input type="submit" name="submit" class="btn btn-primary">
            <?php
             $dbh = mysqli_connect('localhost', 'root', '', 'hotel12');
             
              if(isset($_POST['submit']))
              {
                  $con=mysqli_connect("localhost","root","","hotel12");
                  $check1="select * FROM payment";
                  $rs = mysqli_query($con,$check1);
                  if($_POST[amt] != $price*$nroom*$ndays)
                    {
                          echo "<script type='text/javascript'> alert('Please make sure to enter the correct amount')</script>";
                      
                    } 
                    else               
                   {
                     $newUser="INSERT INTO `payment`(`Card_No`,`R_id`,`U_id`,`Total_Cost`) VALUES ('$_POST[card]','$_POST[rid]','$_POST[uid]','$_POST[amt]')";

                    if (mysqli_query($con,$newUser))
                    {
                      
                      echo "<script type='text/javascript'> alert('Payment Successfully Done! Hope to see you soon')</script>";

                      if ($_POST[amt] > 50000) {
                      echo "<script type='text/javascript'> alert('Congratulations! Discount of 10% has been applied and will be refunded to your card after your stay in our Hotel!!')</script>";
                     }

                       elseif($_POST[amt] > 25000) {
                        echo "<script type='text/javascript'> alert('Congratulations! Discount of 5% has been applied and will be refunded to your card after your stay in our Hotel!!')</script>";
                       }
                    
                    }
                    
                    else
                    {
                      echo "<script type='text/javascript'> alert('Error! Please try Again')</script>";
                      
                    }
                  }

              $msg="Your code is correct";
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
        </div>

</div>
</div>
</body>
</html>


   





           




    






                        