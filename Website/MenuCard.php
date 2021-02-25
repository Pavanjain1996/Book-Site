<?php
session_start();
?>
<html>
<head>
<title>Store</title>
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
}
input
{
	width:200px;
}
</style>
<script>
function Validation(){
	arr=document.getElementsByClassName('book');
	res=true;
	for(i=0;i<12;i++){
		if(arr[i].value<0){
			res=false;
			break;
		}
	}
	if(!res){
		alert("Invalid number of items");
	}
	return res;
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
<div><form method="post" action="CartUpdate.php" onsubmit="return Validation()">
<table id="table1" align="center" cellspacing="20px">
<tr>
<td align="center">C<br/><img src="c.jpg" width="150px" height="200px"/><br/><br/>
<input type="number" class="book" name="c"/></td>
<td align="center">C++<br/><img src="cpp.jpg" width="150px" height="200px"/><br/><br/>
<input type="number" class="book" name="cpp"/></td>
<td align="center">Java<br/><img src="java.jpg" width="150px" height="200px"/><br/><br/>
<input type="number" class="book" name="java"/></td>
<td align="center">Python<br/><img src="python.jpg" width="150px" height="200px"/><br/><br/>
<input type="number" class="book" name="python"/></td>
</tr>
<tr>
<td align="center">HTML<br/><img src="html.jpg" width="150px" height="200px"/><br/><br/>
<input type="number" class="book" name="html"/></td>
<td align="center">CSS<br/><img src="css.jpg" width="150px" height="200px"/><br/><br/>
<input type="number" class="book" name="css"/></td>
<td align="center">JavaScript<br/><img src="javascript.jpg" width="150px" height="200px"/><br/><br/>
<input type="number" class="book" name="javascript"/></td>
<td align="center">PHP<br/><img src="php.jpg" width="150px" height="200px"/><br/><br/>
<input type="number" class="book" name="php"/></td>
</tr>
<tr>
<td align="center">MySQL<br/><img src="mysql.jpg" width="150px" height="200px"/><br/><br/>
<input type="number" class="book" name="mysql"/></td>
<td align="center">Ruby<br/><img src="ruby.jpg" width="150px" height="200px"/><br/><br/>
<input type="number" class="book" name="ruby"/></td>
<td align="center">Kotlin<br/><img src="kotlin.jpg" width="150px" height="200px"/><br/><br/>
<input type="number" class="book" name="kotlin"/></td>
<td align="center">Matlab<br/><img src="matlab.jpg" width="150px" height="200px"/><br/><br/>
<input type="number" class="book" name="matlab"/></td>
</tr>
<tr><td align="center"><input type="submit" value="Add to cart"/></td></tr>
</table></form></div>
<br/><br/><br/><br/><br/>
</body>
</html>