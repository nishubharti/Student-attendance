<?php
  $username=$_POST['user6'];
  $password=$_POST['pass6'];
  $con=mysqli_connect("localhost","root","");

  $username=stripcslashes($username);
    $password=stripcslashes($password);

 $username=mysqli_real_escape_string($con,$username);
   $password=mysqli_real_escape_string($con,$password);


  mysqli_select_db($con,"attendancre");

 if($username && $password)
  {

      $query = mysqli_query($con,"INSERT INTO teacher (name,password) VALUES ('$username', '$password')");
           echo "you have been registered";
           
           header('location:welcome.php');

  }
  else
   {
     echo "please insert all the fieds";

   }












?>
