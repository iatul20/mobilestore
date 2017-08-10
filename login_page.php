<?php
session_start();
$a=mysql_connect("localhost","root","");
if($a)
{
	echo "connected";
}
else
{
	echo " not connected";
}
$b=mysql_select_db("mobile");
if(isset($_REQUEST["login"]))
{
	$c=$_REQUEST["nm"];
	$d=$_REQUEST["ps"];
	$r="select * from  register where first_name='$c' and password='$d'";
	$t=mysql_query($r);
	if($d=mysql_num_rows($t)>0)
	{
		header('location:viewproducts.php');
	}
	else
	{
		echo " username and password not matched";
}
}
	?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>

		a:hover
		{
			background-color:yellow;
			font-size:24px;
		}
		
		
    </style>

   <script>
	
function a()
{
	document.getElementById("k").style.color="white";
	setTimeout("b()",500);
}
function b()
{
	document.getElementById("k").style.color="orange";
	setTimeout("c()",500);
}
function c()
{1
	document.getElementById("k").style.color="gray";
	setTimeout("a()",500);
}
</script>


<title>login Page</title>
</head>

<body   onload="a()">
<div style="width:1200px;height:900px;  background-image:url(img/karbonn.jpg)">
<div style="widt`h:1000px;height:760px; margin-left:100px; ">
<div style="width:1200px; height:30px; margin-left:-100px; background-color:black;"></div>

<div style="width:1200px;height:5px;margin-left:-100px; background-color:gray"></div>

<div id="k" style="width:1000px;height:50px;   margin-top:20px;border-radius:20px; font-size:36px; background-color:blue; color:white; "><center><b>ONLINE MOBILE STORE</b></center></div>

<div style="width:1000px; height:300px; ; border-radius:10px;  margin-left:-3px; margin-top:3px;">
<img src="images/mobileindex.jpg" style="width:1004px; height:300px">
</div>

<div style="width:1000px ; height:50px; border:solid ; margin-top:3px; border-radius:10px; background-color:green"></div>

<div style="width:100px;height:45px;    margin-top:-52px; margin-left:130px "><center><h3><a href="index.php"  style="text-decoration:none; color:black">Home</a></h3></center></div>
<div style="width:100px;height:45px;    margin-top:-64px; margin-left:320px"><center><h3><a href="login_page.php" style="text-decoration:none; color:black;">Login</a></h3></center></div>
<div style="width:98px;height:45px;    margin-top:-65px;  margin-left:523px "><center><h3><a href="register_page.php"  style="text-decoration:none; color:black;">Register</a></h3></center></div>
<div style="width:100px;height:45px;   margin-top:-63px; margin-left:725px "><center><h3><a href="aboutpage.php"  style="text-decoration:none; color:black;">About us</a></h3></center></div>


<div style="width:1000px ; height:305px; margin-top:-5px; border-radius:10px; background-color:gray"></div>
<div style="width:600px ; height:200px;  margin-left:200px; margin-top:-250px;  background-color:gray">
<center>
<form method="get">
<table>
<tr>
<th>Login-</th>
<td><input type="text"  name="nm"placeholder="Enter id" required="required"/></td>
</tr>
<tr>
<th>Password</th>
<td><input type="password" name="ps" placeholder="Enter password" required="required"/></td>
</tr>
<tr>
<th></th>
<td><input type="Submit" value="Login" name="login"  /></td>
<td><input type="reset" value="Cancel" /></td>
<th></th>
<tr>
<th><p>new user ?</p></th>
<th><a href="register_page.php"> <u>register here </u></a></th>
</tr>
</table>
</form>
</div>
<div style="width:1200px; height:30px;  margin-left:-100px; background-color:black; margin-top:170px;"></div>
</div>
</body>
</html>
