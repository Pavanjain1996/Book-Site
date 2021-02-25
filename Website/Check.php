<?php
session_start();
$uname=$_GET['uname'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'Book');
$q="select username from validate";
$res=mysqli_query($con,$q);
$n=mysqli_num_rows($res);
$flag=0;
for($i=1;$i<=$n;$i++){
	$row=mysqli_fetch_array($res);
	if($uname==$row['username']){
		$flag=1;
		break;
	}
}
if($flag==1)
	echo 'Username Exists';
?>