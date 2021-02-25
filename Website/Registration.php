<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'Book');
$query='insert into validate values ("'.$username.'","'.$password.'","'.$address.'","'.$gender.'")';
mysqli_query($con,$query);
$query='insert into cart (username) values ("'.$username.'")';
mysqli_query($con,$query);
header('location:http://localhost/BookSite/Home.php');
mysqli_close();
?>