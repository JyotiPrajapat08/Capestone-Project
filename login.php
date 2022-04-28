<?php
session_start();
include('connect.php');
$uemail=$_POST['uemail'];
$upassword=$_POST['upassword'];
$url=$_SERVER['HTTP_REFERER'];
$query2=mysqli_query($conn,"select * from users where email='$uemail' and password='$upassword' ");
if (mysqli_num_rows($query2)>0)
{
$_SESSION['log']=$uemail;
$_SESSION['error']="Login Successfully";
  header("location:$url");
 
}
 else 
 {
  $_SESSION['error']="Wrong Username/Password";
  header("location:$url");
 
   
  }
	
?>