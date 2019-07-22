<?php
$username1=$_POST['user4'];
$password1=$_POST['pass4'];


$username2=$_POST['user3'];
$password2=$_POST['pass3'];

$_user="student";
$_passn="pass";
$_m="teacher";
$_mp="password";

$username1=stripcslashes($username1);
  $password1=stripcslashes($password1);
$username2=stripcslashes($username2);
$password2=stripcslashes($password2);

if($username2==$_m && $password2==$_mp)
{
  header('location:new.php');
}
else {
   echo "invalid username or password";
}



if($username1==$_user && $password1==$_passn)
{
  header('location:front.php');
}
else {
  echo "username or password is invalid";
}




 ?>
