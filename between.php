<?php
session_start();
$name=$_GET['name'];
$price=$_GET['price'];
include('connect.php');
$email=$_SESSION['log'];
$_SESSION['name']=$name;
$_SESSION['price']=$price;

header('location:process.php')
?>