<?php
session_start();
?>
<html>
<head>
<title>About</title>
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
#content
{
	align:center;
	width:1000px;
	font-size:25px;
	color:black;
	font-family:comic sans ms;
}
#table1
{
	font-size:25px;
	font-family:comic sans ms;
}
</style>
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
<div align="center">
<img src="About.jpg" width="1200px" height="300px"/>
<div id="content"><br/>This is an online book store for various programming languages 
books. Here you can buy them at lower cost.</div>
<table id="table1" align="center" cellspacing="10px">
<tr>
<br/>
<td align="center"><img src="YTlogo.png" width="200px" height="50px"><a href="https://www.youtube.com/\\
channel/UCPPMRtoPw9P5Dt0BfZs_D0g/videos?view_as=subscriber" style="text-decoration:none;">
<br>Soulful Music-Pavan Jain</a></td>
<td align="center"><img src="FBlogo.png" width="200px" height="50px"><a href="https://www.facebook.com/pjainengineering/" 
style="text-decoration:none;"><br>Engineering Facts-Pavan Jain</a></td>
<td align="center"><img src="FBlogo.png" width="200px" height="50px"><a href="https://www.facebook.com/Pavanjain1996/"
 style="text-decoration:none;"><br>Programmers Page-Pavan Jain</a></td>
<td align="center"><img src="YTlogo.png" width="200px" height="50px"><a href="https://www.youtube.com/channel/UCDveEQzomP6iyMYpHlIa0gw?view_as=subscriber" 
style="text-decoration:none;"><br>Scope Programming-Pavan Jain</a></td>
</tr>
<tr>
<td align="center">013pavanjain@gmail.com<br/>jpavan447@gmail.com</td>
<td align="center">8349312393<br/>8319615913</td>
<td align="center">Follow on Instagram<br/>Programmer_Pavan</td>
<td align="center">Follow on Twitter<br/>Pavanjain1996</td>
</tr>
</table>
<br/><br/><br/><br/><br/>
</div>
</body>
</html>