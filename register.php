<?php
session_start();
include('connect.php');
$uname=$_POST['uname'];
$uemail=$_POST['uemail'];
$upassword=$_POST['upassword'];
$umobile=$_POST['umobile'];
$url=$_SERVER['HTTP_REFERER'];
$query1=mysqli_query($conn,"insert into users (name,email,password,mobile) values('$uname','$uemail','$upassword','$umobile')");
if ($query1) 
{
  $_SESSION['log']=$uemail;
$_SESSION['error']="User Registered Successfully";
  header("location:$url");
 // echo "<script>alert('User Registered Successfully')</script>";

}
 else 
 {
  $_SESSION['error']="Something Wrong. Please try Again";
  header("location:$url");
 
  //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>