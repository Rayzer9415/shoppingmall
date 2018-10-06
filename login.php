<?php
session_start();
$uname=$_SESSION["user"];
?>
<?php
if(isset($_SESSION["user"])){
	header("location:home.php");
}

else {
	echo
<<<me
<!doctype html>
<html>
<head>
<title> Login
</title>
</head>
<link href="bootstrap-3.3.7\css\bootstrap.css" type="text/css" rel="stylesheet">
<link href="bootstrap-3.3.7\css\bootstrap-theme.css" type="text/css" rel="stylesheet">
<script src="bootstrap-3.3.7\js\jquery-3.2.1.min.js"></script>
<script src="bootstrap-3.3.7\js\bootstrap.js"></script>

<body>
<header>
<style>
#see{box-shadow:15px 15px 45px black;}
a {color:white}
body {font-family:calibri; font-size:1.5em; background-color:#101020}
#search{position: absolute; right: 50px;}
</style>
<br>
<nav class="navbar-fixed-top" id="nav" style="height:90px; background-color:black" role="navigation">
<div class="navbar-header">
<div class="navbar-brand"><h3 style="font-family:transformers; color:white">Kanzmall.COM</h3> </div></div>
<br>
<div class="container">
<ul class="nav nav-pills">
<li ><a href="home.php">HOME <span class="glyphicon glyphicon-home" style="color:red "></span></a></li> 
<li><a href="#">HOT DEALS <span class="glyphicon glyphicon-fire" style="color:orange" style="color:violet"></span></a></li>
<li><a href="#">SHOP NOW <span class="glyphicon glyphicon-shopping-cart" style="color:gold"></span></a></li>
<li class="disabled"><a href="#">ADVERTISE PRODUCT <span class="glyphicon glyphicon-bullhorn"></span></a></li>
<li style="border:2px solid white; border-radius:6px"><a href="login.php">LOGIN <span class="glyphicon glyphicon-user" style="color:skyblue"></span></a></li>
<li><a href="register.php">REGISTER <span class="glyphicon glyphicon-pencil" style="color:lightgreen"></span></a></li>
<form action="search.php" method="post">
<li>
<input  id="search" class="form-control" type="text" name="search" style="width:200px" placeholder="Search Product...."> </li>
</form>

</div>
</div>
</ul>
</nav>
</header>
<section>
<br>
<br>	
<div class="container" align="center">
<br>
<h3  id="see" style="border-radius:14px; width: auto; height: auto; background-color:black; color:white; padding:10px; border:2px solid white">Login and start shopping now!!!</h3><br>
<form action="" method="post">
<input type="text" class="form-control" style="width:200px" name="lname" required placeholder="Username/Email"><br>
<input type="password" class="form-control" style="width:200px" name="password" required placeholder="Password"><br>
<button style="background-color:black; color:white; border-radius:2px; height:35px; width:80px"  name="login">Login</button></form><br><br>
<br>
<br><br>
<div class="container" style="text-align:center">
<div class="row">
<div class="col-xs-9 col-sm-6 col-md-3 col-lg-3">
<img src="ad_pics/FB_IMG_14892576340525389.jpg" alt="image"  width="200" height="200" style="border-radius:10px"> <br>
<br> <button style="background-color:black; color:white; border-radius:2px; height:35px; width:130px"  name="login">View Product</button></div>
<div class="col-xs-9 col-sm-6 col-md-3 col-lg-3">
<img src="ad_pics/FB_IMG_14892576340525389.jpg" alt="image" width="200" height="200" style="border-radius:10px">
<br> <br>&emsp;<button style="background-color:black; color:white; border-radius:2px; height:35px; width:130px"  name="login">View Product</button></div>
<div class="col-xs-9 col-sm-6 col-md-3 col-lg-3 visible-lg visible-md">
<img src="ad_pics/FB_IMG_14892576340525389.jpg" alt="image"  width="200" height="200" style="border-radius:10px"> <br>
<br> <button style="background-color:black; color:white; border-radius:2px; height:35px; width:130px"  name="login">View Product</button></div>
<div class="col-xs-9 col-sm-6 col-md-3 col-lg-3 visible-lg visible-md">
<img src="ad_pics/FB_IMG_14892576340525389.jpg" alt="image"  width="200" height="200" style="border-radius:10px"> <br>
<br> <a href="info.php?id=$id"><button style="background-color:black; color:white; border-radius:2px; height:35px; width:130px"  name="login">View Product</button></a></div>
</div>
</div>
<br>
<br>
<br>
<br>
<nav class="navbar navbar-fixed-bottom" style="height:40px; background-color:black">
me;
?>
<?php
if (isset($_POST['login'])){
	$uname=$_POST['lname'];
	$pass=$_POST['password'];
	$connect= new mysqli ('localhost','root','1234', 'kanzmall');
$check_user=mysqli_query($connect,"select * from register where Username='$uname' && Password='$pass'");
	$finale_check= mysqli_num_rows($check_user);
if ($finale_check==true) {
$_SESSION['user']=$uname;
header ("location:home.php");}
else {echo '<div class="container" align="center" style="background-color:black; color:red; border-radius:20px"><script>document.write("Sorry Wrong Username or Password!!!"); </script></div>';}
}
}
?>	
