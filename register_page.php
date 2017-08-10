<?php

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
if(isset($_REQUEST["save"]))
{
	$c=$_REQUEST["nm"];
	$d=$_REQUEST["md"];
	$e=$_REQUEST["lm"];
	$f=$_REQUEST["g"];
	$g=$_REQUEST["em"];
	$hhh=$_REQUEST["sl"];
	$i=$_REQUEST["ad"];
	$j=$_REQUEST["mob"];
	$k=$_REQUEST["ps"];
	$l=$_REQUEST["cp"];
	 $rr="insert into  register(first_name,middle_name,last_name,gender,email,city,address,mobile,password,c_password)values('$c','$d','$e','$f','$g','$hhh','$i','$j','$k','$l')";
	$hh=mysql_query($rr);
	if($hh)
{
	echo "<script>alert('welcome to our site')</script>";
}
else
{
	echo " not insert";
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


<title>Register Page</title>
</head>

<body   onload="a()">
<div style="width:1200px;height:1200px;  background-image:url(img/karbonn.jpg)">
<div style="width:1000px;height:1000px; margin-left:100px;">
<div style="width:1200px; height:30px;  margin-left:-100px; background-color:black;"></div>

<div style="width:1200px;height:5px;margin-left:-100px; background-color:gray"></div>

<div id="k" style="width:1000px;height:50px; font-size:36px;   margin-top:40px; border-radius:30px; background-color:blue; color:white; "><center><b>ONLINE MOBILE STORE</b></center></div>

<div style="width:1000px; height:300px;  border-radius:30px;  margin-left:-3px ;margin-top:3px;">
<img src="images/mobileindex.jpg" style="width:1004px; height:300px">
</div>

<div style="width:1000px ; height:50px;  margin-top:3px; border-radius:10px;border:solid; background-color:green"></div>

<div style="width:100px;height:45px;    margin-top:-52px; margin-left:130px "><center><h3><a href="index.php"  style=" text-decoration:none ; color:black;">Home</a></h3></center></div>
<div style="width:100px;height:45px;    margin-top:-64px; margin-left:320px"><center><h3><a href="login_page.php"  style=" text-decoration:none ; color:black;">Login</a></h3></center></div>
<div style="width:98px;height:45px;    margin-top:-65px;  margin-left:523px "><center><h3><a href="register_page.php" style=" text-decoration:none ; color:black;">Register</a></h3></center></div>
<div style="width:100px;height:45px;   margin-top:-63px; margin-left:725px "><center><h3><a href="aboutpage.php" style=" text-decoration:none ; color:black;">About Us</a></h3></center></div>

<div style="width:1000px; height:550px;  border-radius:30px; margin-top:-25px; background-color:gray;">
<div  style="width:800px; height:800px; margin-left:100px; margin-top:20px; color:#F00;color:yellow;">
<b><i><u><h1>New  User  Register</h1></u></i></b>
<div style="width:600px; height:600px;  margin-left:100px; margin-top:50px;color:black; background-color:">
<form method ="post">
<table>
<tr>
<th>First Name</th>
<td><input type="text"  name="nm" placeholder="Enter First Name" required="required"/></td>
</tr>
<tr>
<th>Middle Name</th>
<td><input type="text" name="md" placeholder="Enter Last Name"/></td>
</tr>
<tr>
<th>Last Name</th>
<td><input type="text"  name="lm"placeholder="Enter Last Name"required="required"/></td>
</tr>
<tr>
<th>Gender</th>
<td><input type="radio" name="g"   value="male"/>male
</td>
<td><input type="radio" name="g"  value="female"/>female
</td>
</tr>
<tr>
<th>Email</th>
<td><input type="email"  name="em"placeholder="Enter Email"required="required"/></td>
</tr>
<tr>
<th>city</th>
<td><select name="sl">

<option value="delhi">delhi</option>
<option value="mohALI">mohali</option>
</select></td>
</tr>
<tr>
<th>Address</th>
<td><textarea name="ad"> </textarea></td>
</tr>
<tr>
<th>Mobile No</th>
<td><input type="text" name="mob" placeholder="Enter Mobile no"required="required"/></td>
</tr>

<tr>
<th>Password</th>
<td><input type="Password"  name="ps"placeholder=""/></td>
</tr>
<tr>
<th>Confirm Password</th>
<td><input type="Password"  name="cp"placeholder=""/></td>
</tr>
<tr>
<th></th>
<td><input type="submit" value="Register" name="save" /><a href="login_page.php"></a></td>
<th></th>
<td><input type="reset" value="Cancel" name="cancel"/></td>
</tr>
</table>
</form>
</div>
<div style="width:1200px; height:30px;  margin-right:90px; background-color:black; margin-left:-200px; "></div>
</div>
</body>
</html>
