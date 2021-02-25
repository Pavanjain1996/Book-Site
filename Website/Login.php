<?php
session_start();
?>
<html>
<head>
<title>Login</title>
<style>
body
{
	background-color:rgb(70,170,170);
}
#Heading
{
	position:relative;
	left:28%;
	color:black;
	font-size:60px;
	font-family:cardiff;
}
#Menu
{
	background-color:gray;
	height:50px;
}
.Item
{
	position:relative;
	left:40%;
	top:10px;
	font-family:comic sans ms;
	font-size:20px;
}
a
{
	color:purple;
	text-decoration:none;
}
a:hover
{
	color:orange;
	font-family:Calibri;
	font-size:25px;
}
</style>
<style>
#forum1
{
	width:300px;
	background-color:rgb(50,205,175);
	font-size:20px;
	padding:10px;
	font-family:comic sans ms;
	position:relative;
	left:500px;
	top:100px;
	border-radius:20px;
}
</style>
<script>
function Validate(){
	var arr=document.getElementsByTagName("input");
	var result=true;
	if(arr[0].value.length==0){
		result=false;
	}
	if(arr[1].value.length==0){
		result=false;
	}
	if(!result){
		alert("Some fields missing");
	}
	return result;
}
</script>
</head>
<body>
<div id="Heading">Knowledge Central</div><br/>
<div id="Menu">
<div class="Item">
<a href="Home.php">Home</a> &nbsp &nbsp
<a href="MenuCard.php">Store</a> &nbsp &nbsp
<a href="Register.php">Register</a> &nbsp &nbsp
<a href="Login.php">Login</a> &nbsp &nbsp
<a href="About.php">About<a/> &nbsp &nbsp
<?php
if(isset($_SESSION['logstatus'])){
	if($_SESSION['logstatus']=='YES'){
		echo '<a href="Cart.php">Cart</a> &nbsp &nbsp';
		echo '<a href="Logout.php">Logout<a/> &nbsp &nbsp';
		echo '--'.$_SESSION['username'];
	}
}
?>
</div>
</div>
<div id="forum1">
<h3>User Login</h3>
<form method="post" action="Logged.php" onsubmit="return Validate()">
<div><label>Username</label> &nbsp &nbsp
<input type="text" name="username"/></div><br/>
<div><label>Password</label> &nbsp &nbsp
<input type="password" name="password"/></div><br/>
<div> &nbsp &nbsp <input type="submit" value="Login"/> &nbsp &nbsp
<input type="reset" value="Clear"/></div>
</form>
</div>
</body>
</html>