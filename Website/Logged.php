<?php
session_start();
$user=$_POST['username'];
$pass=$_POST['password'];
$flag=0;
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'Book');
$query='select * from validate';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=1;$i<=$n;$i++){
	$row=mysqli_fetch_array($res);
	if($row['username']==$user && $row['password']==$pass){
		$_SESSION['username']=$user;
		$_SESSION['password']=$pass;
		$flag=1;
		$_SESSION['logstatus']='YES';
		break;
	}
}
if($flag==1){
	header('location:http://localhost/BookSite/Cart.php');
}
else{
	header('location:http://localhost/BookSite/Login.php');
}
mysqli_close();
?>