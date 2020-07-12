<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
$con = mysqli_connect('localhost', 'root', '', 'hotel12');
$U_id = "";
$var="";

							if(isset($_POST['submit']))
							{
								$U_id = mysqli_real_escape_string($con, $_POST['U_id']);
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
                          echo "<script type='text/javascript'> alert('Check out date must be greater than check in')</script>";
                      
                    }

							else
							{
							       $con=mysqli_connect("localhost","root","","hotel12");
                                    $check1="select * FROM room_deluxe";
									$rs = mysqli_query($con,$check1);
                                  
									 {
                    
                                        $newUser="INSERT INTO `room_deluxe`(`U_id`,`Type`,`No_Of_Rooms`,`Check_In`,`Check_Out`,`No_Of_Days`) VALUES ('$_POST[U_id]','$_POST[Type]','$_POST[No_Of_Rooms]','$_POST[Check_In]','$_POST[Check_Out]',datediff('$_POST[Check_Out]','$_POST[Check_In]'))";

										if (mysqli_query($con,$newUser))
										{
											$_SESSION['U_id'] = $U_id;
  	$_SESSION['success'] = "You are now reserved your room";
  	header('location: bookpay.php');
                      
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							$msg="Your code is correct";
               
							}
							}
							?>