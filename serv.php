<?php 
   if(isset($_POST['submit']))
   {
    $con=mysqli_connect("localhost","root","","hotel12");
    $check1="select * FROM payments";
                  $rs = mysqli_query($con,$check1);
                  $pay = "INSERT INTO `payments`(`Card_No`,`Total_Cost`) VALUES ('$_POST[cardnumber]','$_POST[amt]'))";
                  if (mysqli_query($con,$newUser))
                    {
                      
                      echo "<script type='text/javascript'> alert('Payment successfull')</script>";

                    }
                    else
                    {
                      echo "<script type='text/javascript'> alert('Sorry! Try Again')</script>";
                      
                    }
   }
   ?>
