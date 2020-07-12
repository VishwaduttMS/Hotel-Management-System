<?php
						$con=mysqli_connect("localhost","root","","hotel12");
                                    $check1="select * FROM room_deluxe";
									$rs = mysqli_query($con,$check1);
                                    $ttot = 5000 * $No_Of_Days * $No_Of_Rooms;
									$psql = "INSERT INTO `payment`(`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`,`meal`, `mepr`, `btot`,`fintot`,`noofdays`) VALUES ('$id','$title','$fname','$lname','$troom','$bed','$nroom','$cin','$cout','$ttot','$meal','$mepr','$btot','$fintot','$days')";
?>