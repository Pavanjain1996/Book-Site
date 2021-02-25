<?php
session_start();
?>
<html>
<head>
<title>Register</title>
<style>
body
{
	background-color:rgb(70,70,170);
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
function checkUname(str)
{
	var req=new XMLHttpRequest();
	req.open("GET","http://localhost/BookSite/Check.php?uname="+str,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200){
			document.getElementById("verify").style.color='red';
			document.getElementById("verify").innerHTML=req.responseText;
		}
	};
}
function Validate(){
	var arr=document.getElementsByTagName("input");
	var result=true;
	if(arr[0].value.length<3){
		result=false;
		alert("Username too short");
		return result;
	}
	if(arr[1].value.length<3){
		result=false;
		alert("Password too short");
		return result;
	}
	if(arr[2].value.length<10){
		result=false;
		alert("Address too short");
		return result;
	}
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
<h3>Register Here</h3>
<form method="post" action="Registration.php" onsubmit="return Validate()">
<div><label>Username</label> &nbsp &nbsp
<input type="text" name="username" onchange="checkUname(this.value)"/>
<label id="verify"></label></div><br/>
<div><label>Password</label> &nbsp &nbsp
<input type="password" name="password"/></div><br/>
<div><label>Address</label> &nbsp &nbsp
<input type="text" name="address"/></div><br/>
<div><label>Gender</label>
<input type="radio" name="gender" value="Male" checked>Male
<input type="radio" name="gender" value="Female"/>Female</div><br/>
<div> &nbsp &nbsp <input type="submit" value="Register"/> &nbsp &nbsp
<input type="reset" value="Clear"/></div>
</form>
</div>
</body>
</html>