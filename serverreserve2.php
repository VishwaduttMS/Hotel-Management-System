<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
$con = mysqli_connect('localhost', 'root', '', 'hotel12');
$U_id = "";
$var="";

							if(isset($_POST['submit']))
							{
								$var=date("Y-m-d");
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
                            echo "<script type='text/javascript'> alert('Error! Please Enter the Correct Code')</script>";
							}
							elseif($_POST[Check_In] <= $var)
                    {
                         echo "<script type='text/javascript'> alert('Check in date must be greater than Current date')</script>";
                      
                    }
                            elseif($_POST[Check_In] > $_POST[Check_Out])
                    {
                          $msg1="Wrong";
                          echo "<script type='text/javascript'> alert('Check out date must be greater than check in')</script>";
                      
                    }
                            
							else
							{
							
									$con=mysqli_connect("localhost","root","","hotel12");
									//$check="SELECT id FROM users WHERE username = '$_POST[username]'";
                                    $check1="select * FROM room_single";
									$rs = mysqli_query($con,$check1);
                                  //  $rrs = mysqli_query($con,$check);
                                    
									//$data = mysqli_fetch_array($rrs, MYSQLI_NUM);
								   // if($data[0] == 1) {
                                    //    echo "<script type='text/javascript'> alert('Please login before reserving a room')</script>";
                                   // }

									
									 {
                                        $newUser="INSERT INTO `room_single`(`U_id`,`Type`,`No_Of_Rooms`,`Check_In`,`Check_Out`,`No_Of_Days`) VALUES ('$_POST[U_id]','$_POST[Type]','$_POST[nroom]','$_POST[Check_In]','$_POST[Check_Out]',datediff('$_POST[Check_Out]','$_POST[Check_In]'))";

										if (mysqli_query($con,$newUser))
										{
											$_SESSION['U_id'] = $U_id;
  	$_SESSION['success'] = "You are now reserved your room";
  	header('location: bookpay1.php');
											//echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							$msg="Your code is correct";
                            //$msg1="Correct";
							}
							}
							?>