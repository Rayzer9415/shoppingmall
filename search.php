<?php 
session_start();
$uname=$_SESSION['user'];
?>
<?php
if (isset($_POST['search'])){
	$search_product=$_POST['search']; 
$connect=mysqli_connect('localhost','root','1234','kanzmall');
$query="select * from advert where Product_name like '%$search_product%'";
$execute=mysqli_query($connect,$query);
}
?>

<?php
if (!empty($uname)){	
echo '
 
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
<p style="position:absolute; right:10px; color:white;" class="btn btn-primary"><a href="profile.php" style="text-decoration:none; color:white">'.
$uname.'  <span style="color:white" class="glyphicon glyphicon-user"></span></a></p></li>
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
';}
else {echo' 
<!doctype html>
<html>
<head>
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
#search{position: absolute; right: 50px;}
</style>
<br>
<nav class="navbar navbar-fixed-top" style="height:90px; background-color:black; box-shadow:1px 10px 30px black">
<div class="navbar-header">
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle"> 
             
                <span class="sr-only" style="color:blue"></span> 
            </button> 

<div class="navbar-brand"><h3 style="font-family:transformers; color:white">Kanzmall.COM</h3> </div></div>
<br>
<div class="container">
<div  id="navbarCollapse" class="collapse navbar-collapse" style="margin-top:1px; font-family:calibri">
<ul class="nav navbar-nav" >
<li><a href="home.php">HOME <span class="glyphicon glyphicon-home" style="color:red "></span></a></li>
<li><a href="#">HOT DEALS <span class="glyphicon glyphicon-fire" style="color:orange" style="color:violet"></span></a></li>
<li><a href="#">SHOP NOW <span class="glyphicon glyphicon-shopping-cart" style="color:gold"></span></a></li>
<li class="disabled" ><a href="#">ADVERTISE PRODUCT <span class="glyphicon glyphicon-bullhorn"></span></a></li>
<li><a href="login.php">LOGIN <span class="glyphicon glyphicon-user" style="color:skyblue"></span></a></li>
<li><a href="register.php">REGISTER <span class="glyphicon glyphicon-pencil" style="color:lightgreen"></span></a></li>
<form action="search.php" method="post">
<li>
<input  id="search" class="form-control" type="text" name="search" style="width:200px" placeholder="Search Product...." required>
 </li>
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
<br>'
;}
?>
<?php
while($fetch=mysqli_fetch_array($execute)){
$name=$fetch['Product_name'];
$product_pic=$fetch['Thumbnail'];
$id=$fetch['ID'];
echo "
<div class='container' align='center' style='display:in-line' >
<div class='row'>
<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8' text-align='center'>
<a href='info.php?id=$id'><img src='$product_pic' width=200px height=200px style='border-radius:5px;'></a> <br><h4 style='background-color:black; padding:10px; border-radius:5px; color:white; border:  1px solid white; width:200px'>$name</h4>
</div>";
}
?>
</div>
</div>
<br>
<br>
<br>
<nav class="navbar-fixed-bottom" style="background-color:black; height:5%;">
</body>
</html>