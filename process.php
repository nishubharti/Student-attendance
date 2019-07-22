<?php
session_start();//starting session 

require "view.php";
function attend()
{
$username1=$_POST['user'];
$password1=$_POST['pass'];

$con=mysqli_connect("localhost","root","");

$username1=stripcslashes($username1);
$password1=stripcslashes($password1);
mysqli_select_db($con,"attendancre");

  if($username1 && $password1)
  {
       $quer = mysqli_query($con,"SELECT * FROM student WHERE name='$username1' And roll='$password1' ");

      $match=mysqli_num_rows($quer);

       if($match>0)
      {
               $sql = "UPDATE student SET Day3='3' WHERE name='$username1' And roll='$password1' ";
              mysqli_query($con,$sql);       

       echo "<h1 style='text-align:center;color:green;'>Attendance Recorded Successfully</h1>";
         
      


      
      }
      else
      {
        echo "username or password is invalid or contact Teacher";
      }

  }
   else
{
     echo "please fill all the fields";
}
}
$but=$_POST['S1'];
if($but=="Submit")
attend();
else if($but=="View")
view($_POST['user'],$_POST['pass']);








?>
