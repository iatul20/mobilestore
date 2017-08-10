<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.dropbtn {
    background-color: #999;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #999;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
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
	document.getElementById("kk").style.color="white";
	setTimeout("b()",500);
}
function b()
{
	document.getElementById("kk").style.color="orange";
	setTimeout("c()",500);
}
function c()
{
	document.getElementById("kk").style.color="gray";
	setTimeout("a()",500);
}
</script>

   
<title>view products</title>
</head>

<body   onload="a()">

<div style="width:1000px;height:1600px;  background-color:white; background-image:url(img/karbonn.jpg)">
<div style="width:1000px; height:30px; background-color:black;"></div>

<div style="width:1000px;height:5px;  background-color:gray"></div>

<div  id="kk" style="width:800px;height:50px; border-radius:20px; margin-left:90px;  margin-top:-1px; font-size:18px; background-color:blue; color:white; "><center><h1><b>ONLINE MOBILE STORE</b></h1></center></div>

<div style="width:800px; height:300px; margin-top:3px; border-radius:10px;  margin-left:90px">
<img src="images/mobileindex.jpg" style="width:800px; height:300px ;border-radius:20px;"></div>

<div style="width:800px ; height:50px; margin-top:9px; border:solid; border-radius:10px;  margin-left:90px; background-color:#666"></div>

<div style="width:150px;height:45px;margin-top:-60px; margin-left:130px "><center><h3><a href="viewproducts.php" style="text-decoration:none; color:black;">View products</a></h3></center></div>
<div style="width:100px;height:45px; margin-top:-65px; margin-left:650px"><center><h3><a href="index.php" style="text-decoration:none; color:black;">Logout</a></h3></center></div>

<div style="width:800px; height:1000px; margin-top:18px; margin-left:90px; ">
 
<div style="width:290px; height:992px; color:white; margin-top:10px; font-size:24px; background-image:url(img/image4.jpeg); "> <center>SELECT MOBILE TYPE</center>
<div class="dropdown">
  <button class="dropbtn">---SELECT TYPE---</button>
  <div class="dropdown-content">
    <a href="apple_products.html">APPLE</a>
      <a href="samsung_products.html">SAMSUNG</a>
    <a href="oppo_products.html">OPPO</a>
    <a href="motoproducts.html">MOTO</a>
    <a href="redmi_product.html">XIAOMI</a>
  </div>
</div></div>

<div style="width:510px; height:992px; margin-left:290px; background-image:url(img/image4.jpeg)">

<div style="width:200px; height:200px;border:solid; margin-top:-992px; ">
<img src="images/iphone7.jpg" style="width:200px; height:200px;" /></div>
<div style="width:200px; height:30px; margin-left:20px; margin-top:10px;color:white; font-size:18px;"><center>Apple iphone7 Plus</center></div>
<div style="width:200px; height:30px; margin-left:20px;color:white; margin-top:1px;"> <center>Rs 62000 </center></div>

<div style="width:200px; height:200px;border:solid; margin-left:250px; margin-top:-277px;">
<img src="images/samsungon9pro.jpg" style="width:200px; height:200px;" /></div>
<div style="width:200px; height:30px; margin-left:250px; color:white;margin-top:10px;font-size:18px;"><center>Samsung Galaxy c9 pro</center></div>
<div style="width:200px; height:30px; margin-left:250px;color:white; margin-top:1px;"> <center>Rs 32000</center></div>

<div style="width:200px; height:200px;border:solid; margin-left:20px; margin-top:40px;">
<img src="images/motorola-moto-e-plus.jpeg" style="width:200px; height:200px;" /></div>
<div style="width:200px; height:30px; margin-left:20px; margin-top:10px;font-size:18px;color:white;"><center>Motorola moto 4e plus</center></div>
<div style="width:200px; height:30px; margin-left:20px; margin-top:1px;color:white;"> <center>Rs 18000 </center></div>

<div style="width:200px; height:200px;border:solid; margin-left:250px; margin-top:-277px;">
<img src="images/oppof3plus.png" style="width:200px; height:200px;" /></div>
<div style="width:200px; height:30px; margin-left:250px; margin-top:10px;font-size:18px;color:white;"><center>Oppo F3 Plus</center></div>
<div style="width:200px; height:30px; margin-left:250px; margin-top:1px;color:white;"><center>Rs 31000</center></div>

<div style="width:200px; height:200px;border:solid; margin-left:20px; margin-top:40px;">
<img src="images/redmi3.jpeg" style="width:200px; height:200px;" /></div>
<div style="width:200px; height:30px; margin-left:20px; margin-top:10px;font-size:18px;color:white;"><center>xiaomi redmi3</center></div>
<div style="width:200px; height:30px; margin-left:20px; margin-top:1px;color:white;"><center>Rs 15000</center></div>

<div style="width:200px; height:200px;border:solid; margin-left:250px; margin-top:-277px;">
<img src="images/redminote4.jpg" style="width:200px; height:200px;" /></div>
<div style="width:200px; height:30px; margin-left:250px; margin-top:10px;font-size:18px;color:white;"><center>xiaomi redmi note 4</center></div>
<div style="width:200px; height:30px;margin-left:250px; margin-top:1px;color:white;"> <center>Rs 12000</center></div>
</div>
</div>
    <div style="width:1000px; height:30px; margin-left:0px; margin-top:85px; background-color:black;"></div>
 
</div>
</body>
</html>
