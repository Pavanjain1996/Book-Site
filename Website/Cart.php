<?php
session_start();
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'Book');
$query='select * from cart where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
?>
<html>
<head>
<title>Cart</title>
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
#table1
{
	font-size:25px;
	font-family:comic sans ms;
	color:Orange;
}
#Last
{
	text-align:center;
	font-size:25px;
	font-family:comic sans ms;
	color:orange;
}
#button
{
	width:200px;
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
<br/>
<div><table id="table1" align="center" border="2px" cellpadding="10px">
<tr>
<td align="center">C</td>
<td align="center"><?php echo $row['c']; ?></td>
<td align="center">C++</td>
<td align="center"><?php echo $row['cpp']; ?></td>
</tr>
<tr>
<td align="center">Java</td>
<td align="center"><?php echo $row['java']; ?></td>
<td align="center">Python</td>
<td align="center"><?php echo $row['python']; ?></td>
</tr>
<tr>
<td align="center">HTML</td>
<td align="center"><?php echo $row['html']; ?></td>
<td align="center">CSS</td>
<td align="center"><?php echo $row['css']; ?></td>
</tr>
<tr>
<td align="center">JavaScript</td>
<td align="center"><?php echo $row['javascript']; ?></td>
<td align="center">PHP</td>
<td align="center"><?php echo $row['php']; ?></td>
</tr>
<tr>
<td align="center">MySQL</td>
<td align="center"><?php echo $row['mysql']; ?></td>
<td align="center">Ruby</td>
<td align="center"><?php echo $row['ruby']; ?></td>
</tr>
<tr>
<td align="center">Kotlin</td>
<td align="center"><?php echo $row['kotlin']; ?></td>
<td align="center">Matlab</td>
<td align="center"><?php echo $row['matlab']; ?></td>
</tr>
</table></div>
<br/>
<div id="Last" align="center">If you want to change quantities of any book go to Store and again write and add to cart.</div>
<div><br/><form align="center" action="Billing.php" method="post"><input type="Submit" value="Order" id="button"/></form></div>
<br/><br/><br/><br/><br/><br/></body>
</html>