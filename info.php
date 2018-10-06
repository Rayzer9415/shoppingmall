<?php
session_start();
$uname=$_SESSION['user'];
?>
<?php
$connect=mysqli_connect('localhost','root','1234','kanzmall');
$id=$_GET['id'];
$query="select * from advert where ID='$id'";
$execute=mysqli_query($connect,$query);
$fetch=mysqli_fetch_array($execute);
	$name=$fetch['Product_name'];
 $product_pic=$fetch['Thumbnail'];
 $cat=$fetch ['Category'];
 $dealer=$fetch ['Dealer_name'];
 $price=$fetch ['Product_price'];
 $info=$fetch ['Phone1'];
 $contact=$fetch ['Phone1'];
 $contact1=$fetch ['Phone2'];
 ?>
 <?php
 if (isset($_SESSION['user'])){
echo
<<<me
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Kanzmall.com
</title>
</head>
<link href="bootstrap-3.3.7\css\bootstrap.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap-theme.css"> 
<script src="bootstrap-3.3.7\js\jquery-3.2.1.min.js"></script>
<script src="bootstrap-3.3.7\js\bootstrap.js"></script>

<body>
<header>
<style>
a {color:white}
body {font-family:calibri; font-size:1.5em; background-color:#101020 }
#search{position: absolute; right: 100px;}
#button{position: absolute; right: 30px;}
</style>
<br>
<nav class="navbar navbar-fixed-top" style="height:90px; background-color:black; box-shadow:1px 10px 30px black">
<div class="navbar-header">
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle"> 
             
                <span class="icon-bar" style="color:blue"></span> 
            </button> 

<div class="navbar-brand"><h3 style="font-family:transformers; color:white">Kanzmall.COM</h3> </div></div>
<br>
<div class="container">
<div  id="navbarCollapse" class="collapse navbar-collapse" style="margin-top:1px; font-family:calibri">
<ul class="nav navbar-nav" >
<li><a href="home.php">HOME <span class="glyphicon glyphicon-home" style="color:red "></span></a></li>
<li><a href="#">HOT DEALS <span class="glyphicon glyphicon-fire" style="color:orange" style="color:violet"></span></a></li>
<li><a href="#">SHOP NOW <span class="glyphicon glyphicon-shopping-cart" style="color:gold"></span></a></li>
<li><a href="ad.php">ADVERTISE PRODUCT <span class="glyphicon glyphicon-bullhorn"></span></a></li>
<li class="disabled"><a href="">LOGIN <span class="glyphicon glyphicon-user" style="color:skyblue"></span></a></li>
<li class="disabled"><a href="">REGISTER <span class="glyphicon glyphicon-pencil" style="color:lightgreen"></span></a></li>
<li>
<form action="search.php" method="post">
<input class="form-control" type="text" name="search" style="width:200px" placeholder="Search Product....">
</form>
</li>
<p style="position:absolute; right:10px; color:white;" class="btn btn-primary"><a href="profile.php" style="text-decoration:none; color:white">
$uname <span style="color:white" class="glyphicon glyphicon-user"></span></a></p></li>
</div>
</div>
</ul>
</nav>
<br><br><br><br><br>
<div class="container" align="center">
<div class="row">
<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
<br><br> <img src='$product_pic' width=260px height=auto style='border-radius:10px;'> </div></div>
<br>
<br>
<div class="row">
<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 jumbotron' align="left">
<b>NAME:</b>$name<br><br>
<b>CATEGORY:</b>$cat<br><br>
<b>DESCRIPTION:</b>NULL<br><br>
<b>PRICE:</b> #$price<br><br>
<b>DEALER:</b>$dealer<br><br>
<b>CONTACT ADDRESS:</b>$contact,$contact1<br><br>
</div>
</div>
</div>
me;
 }
 else {echo 
<<<me
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Kanzmall.com
</title>
</head>
<link href="bootstrap-3.3.7\css\bootstrap.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap-theme.css"> 
<script src="bootstrap-3.3.7\js\jquery-3.2.1.min.js"></script>
<script src="bootstrap-3.3.7\js\bootstrap.js"></script>
<body>
<header>
<style>
a {color:white}
body {font-family:calibri; font-size:1.5em; background-color:#101020 }
#search{position: absolute; right: 100px;}
#button{position: absolute; right: 30px;}
</style>
<br>
<nav class="navbar navbar-fixed-top" style="height:90px; background-color:black; box-shadow:1px 10px 30px black">
<div class="navbar-header">
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle"> 
             
                <span class="icon-bar" style="color:blue"></span> 
            </button> 

<div class="navbar-brand"><h3 style="font-family:transformers; color:white">Kanzmall.COM</h3> </div></div>
<br>
<div class="container">
<div  id="navbarCollapse" class="collapse navbar-collapse" style="margin-top:1px; font-family:calibri">
<ul class="nav navbar-nav" >
<li><a href="home.php">HOME <span class="glyphicon glyphicon-home" style="color:red "></span></a></li>
<li><a href="#">HOT DEALS <span class="glyphicon glyphicon-fire" style="color:orange" style="color:violet"></span></a></li>
<li><a href="#">SHOP NOW <span class="glyphicon glyphicon-shopping-cart" style="color:gold"></span></a></li>
<li class="disabled" ><a href="ad.php">ADVERTISE PRODUCT <span class="glyphicon glyphicon-bullhorn"></span></a></li>
<li><a href="login.php">LOGIN <span class="glyphicon glyphicon-user" style="color:skyblue"></span></a></li>
<li><a href="register.php">REGISTER <span class="glyphicon glyphicon-pencil" style="color:lightgreen"></span></a></li>
<form action="search.php" method="post">
<li>
<input  id="search" class="form-control" type="text" name="src" style="width:200px" placeholder="Search Product....">
<input id="button" type="submit" class="btn btn-primary" name="search" value="search"/> </li>
</form>
</div>
</div>
</ul>
</nav>
<br><br><br><br><br>
<div class="container" align="center">
<div class="row">
<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
<br><br><img src='$product_pic' width=300px height=300px style='border-radius:10px;'></div></div>
<br>
<br>
<div class="row">
<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 jumbotron' align="left">
<b>NAME:</b>$name<br><br>
<b>CATEGORY:</b>$cat<br><br>
<b>DESCRIPTION:</b>NULL<br><br>
<b>PRICE:</b> #$price<br><br>
</div>
</div>
</div>
<div class="container" align="center">
<h4 style="background-color:black; color:red">Please login to view Dealer's details</h4>
</div>
me;
 }
?>
<br>
<br>
<br>
<nav style="height:40px; background-color:black">
</body>
</html>