<?php 
session_start();
$uname=$_SESSION['user'];
?>
<?php
if(!empty($uname)){
	echo'
<!doctype html>
<html>
<head>

<title> Kanzmall.com
</title>
</head>
<link href="bootstrap-3.3.7\css\bootstrap.css" type="text/css" rel="stylesheet">
<link href="bootstrap-3.3.7\css\bootstrap-theme.css" type="text/css" rel="stylesheet">
<script src="bootstrap-3.3.7\js\jquery-3.2.1.min.js"></script>
<script src="bootstrap-3.3.7\js\bootstrap.js"></script>
<body>
<header>
<style>
a {color:white}
body {font-family:calibri; font-size:1.5em; background-color:#101020 }
#see{box-shadow:15px 15px 45px black;}
</style>
<br>
<nav id="see" class="navbar-fixed-top" style="height:15%; background-color:black" role="navigation">
<div class="navbar-header">
<div class="navbar-brand"><h3 style="font-family:transformers; color:white">Kanzmall.COM</h3> </div></div>
<br>
<div class="container">
<ul class="nav navbar-nav">
<li style="border:2px solid white; border-radius:6px"><a href="home.php">HOME <span class="glyphicon glyphicon-home" style="color:white"></span></a></li>
<li><a href="#">HOT DEALS <span class="glyphicon glyphicon-fire" style="color:orange" style="color:violet"></span></a></li>
<li><a href="#">SHOP NOW <span class="glyphicon glyphicon-shopping-cart" style="color:gold"></span></a></li>
<li ><a href="ad.php">ADVERTISE PRODUCT <span class="glyphicon glyphicon-bullhorn" style="color:green"></span></a></li>
<li class="disabled active"><a href="">LOGIN <span class="glyphicon glyphicon-user" style="color:skyblue"></span></a></li>
<li class="disabled active"><a href="">REGISTER <span class="glyphicon glyphicon-pencil" style="color:lightgreen"></span></a></li>
<li>
<form action="search.php" method="post">
<input id="search" class="form-control" type="search" name="search" style="width:200px" placeholder="Search Product...." required>
 </li>
<li>
 </li>
 </form>
</li>
<p style="position:absolute; right:10px; color:white;" class="btn btn-primary"><a href="profile.php" style="text-decoration:none; color:white">'.
$uname.'  <span style="color:white" class="glyphicon glyphicon-user"></span></a></p></li>
</div>
</div>
</ul>
</nav>
</header>
<br>
<br>
<br>
<br><div class="container " align="center">
<h3 id="see" class="btn-primary" style="border-radius:14px; width: 30% auto; height:5% auto; color:white; padding:10px; border:1px solid  white ">Welcome '.$uname.' </h3></div>
<br>
<div class="container" style="text-align:center">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 alert-info jumbotron">
<p style="color:red">Explore the University of Mkar, Mkar (UMM) online trading site, view advertised products and start shopping now!!!</p>
</div>
</div>
</div>
<div class="container" style="text-align:center">
<div class="row">
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<img src="ad_pics/FB_IMG_14892576340525389.jpg" alt="image"  width="200px" height="200px" style="border-radius:10px"><br><br>
 <button style="background-color:black; color:white">Place order</button></div>
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<img src="img/Screenshot_20180303-173330.png" alt="image" width="200px" height="200px" style="border-radius:10px">
<br> <br> <button style="background-color:black; color:white">Place order</button></div>
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<img src="ad_pics/FB_IMG_14892576340525389.jpg" alt="image"  width="200px" height="200px" style="border-radius:10px"> <br>
<br><input type="button" style="background-color:black; color:white" ; align="center" value="Place order"></div>
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<img src="img/_20170609_221126.JPG" alt="image"  width="200px" height="200px" style="border-radius:10px"> <br>
<br><input type="button" style="background-color:black; color:white" ; align="center" value="Place order"></div>
</div>
<br>
<br>
</div>
<nav style="height:40px; background-color:black">
</body>
</html>
';
}
else { echo'
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Kanzmall.com
</title>
</head>
<link href="bootstrap-3.3.7\css\bootstrap.css" type="text/css" rel="stylesheet">
<link href="bootstrap-3.3.7\css\bootstrap-theme.css" type="text/css" rel="stylesheet">
<script src="bootstrap-3.3.7\js\jquery-3.2.1.min.js"></script>
<script src="bootstrap-3.3.7\js\bootstrap.js"></script>
<body>
<header>
<style>
a {color:white}
body {font-family:calibri; font-size:1.5em; background-color:#101020 }
#search{position: absolute; right: 50px;}
#button{position: absolute; right: 30px;}
</style>
<br>
<nav class="navbar-fixed-top" style="height:15%; background-color:black; box-shadow:1px 10px 30px black" role="navigation">
<div class="navbar-header">
<div class="navbar-brand"><h3 style="font-family:transformers; color:white">Kanzmall.COM</h3> </div></div>
<br>
<div class="container">
<ul class="nav nav-pills">
<li style="border:2px solid white; border-radius:6px"><a href="home.php">HOME <span class="glyphicon glyphicon-home" style="color:red "></span></a></li>
<li><a href="#">HOT DEALS <span class="glyphicon glyphicon-fire" style="color:orange" style="color:violet"></span></a></li>
<li><a href="#">SHOP NOW <span class="glyphicon glyphicon-shopping-cart" style="color:gold"></span></a></li>
<li class="disabled" ><a href="ad.php">ADVERTISE PRODUCT <span class="glyphicon glyphicon-bullhorn"></span></a></li>
<li><a href="login.php">LOGIN <span class="glyphicon glyphicon-user" style="color:skyblue"></span></a></li>
<li><a href="register.php">REGISTER <span class="glyphicon glyphicon-pencil" style="color:lightgreen"></span></a></li>
<form action="search.php" method="post">
<li>
<input  id="search" class="form-control" type="text" name="search" style="width:200px" placeholder="Search Product...." required> </li>
</form>
</div>
</div>
</ul>
</nav>
</header>
<section>
<br>
<br>
<br>
<br>
<br>
<div class="container" style="text-align:center">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 alert-info jumbotron">
<p style="color:red">Explore the University of Mkar, Mkar (UMM) online trading site, view advertised products and start shopping now!!!</p>
</div>
</div>
</div>

<br>
<div class="container" style="text-align:center">
<div class="row">
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<img src="ad_pics/FB_IMG_14892576340525389.jpg" alt="image"  width="200px" height="200px" style="border-radius:10px"><br><br>
 <button style="background-color:black; color:white">View product</button></div>
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<img src="ad_pics/FB_IMG_14892576340525389.jpg" alt="image" width="200px" height="200px" style="border-radius:10px">
<br> <br> <button style="background-color:black; color:white">View product</button></div>
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<img src="ad_pics/FB_IMG_14892576340525389.jpg" alt="image"  width="200px" height="200px" style="border-radius:10px"> <br>
<br><input type="button" style="background-color:black; color:white" ; align="center" value="View product"></div><div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<img src="ad_pics/FB_IMG_14892576340525389.jpg" alt="image"  width="200px" height="200px" style="border-radius:10px"> <br>
<br><input type="button" style="background-color:black; color:white" ; align="center" value="View product"></div>
</div>
</div>
<br>
<br>
<br>
<nav class="navbar navbar-fixed-bottom" style="height:40px; background-color:black">
</body>
</html>
';
}
?>