<?php

session_start();//starting session 



$username5=$_POST['user5'];
$password5=$_POST['pass5'];
$dat=$_POST['tab'];
$dat=stripcslashes($dat);

$_SESSION['dat']=$dat;//storing data of $dat in session variable with identifier dat

$con=mysqli_connect("localhost","root","","attendancre");

$username5=stripcslashes($username5);
$password5=stripcslashes($password5);

//mysqli_select_db($con,"attendancre");



if($username5 && $password5)
  {
       $quer = mysqli_query($con,"SELECT * FROM teacher WHERE name='$username5' And password='$password5' ");

      $match1=mysqli_num_rows($quer);

       if($match1>0)
      {
       
      $query = 'ALTER TABLE student ADD Day3 TINYINT NOT NULL DEFAULT \'0\'';
      if($con->query($query)) {
    echo "It worked";
}



           echo "attendance updated successfully";
      
      }
      else
      {
        echo "username or password is invalid";
      }
}



?>
