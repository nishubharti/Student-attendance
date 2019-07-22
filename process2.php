<?php
  $username=$_POST['user1'];
  $password=$_POST['pass1'];
  $con=mysqli_connect("localhost","root","");

  $username=stripcslashes($username);
    $password=stripcslashes($password);

 $username=mysqli_real_escape_string($con,$username);
   $password=mysqli_real_escape_string($con,$password);


  mysqli_select_db($con,"attendancre");

 if($username && $password)
  {

      $query = mysqli_query($con,"INSERT INTO student (name,roll) VALUES ('$username', '$password')");
           echo "you have been registered";
           
           header('location:welcome.php');

  }
  else
   {
     echo "please insert all the fieds";

   }












?>
