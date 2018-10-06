<?php 
session_start();
$uname=$_SESSION['user'];
?>
<?php
if (isset($_POST['search'])){
	$search_product=$_POST['src']; 
$connect=mysqli_connect('localhost','root','1234','kanzmall');
$query="select * from advert where Product_name like '%$search_product%'";
$execute=mysqli_query($connect,$query);
}
?>

<?php
if (!isset($uname)){	
header("location:home.php");
}
else { echo
<<<me
<!doctype html>
<html>
<head>
<title> Advertise Product 
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
#lolz {box-shadow:5px 15px 45px black;}
#search{position: absolute; right: 50px;}
#button{position: absolute; right: 30px;}

</style>
<nav class="navbar-fixed-top" style="height:90px; background-color:black; box-shadow:5px 5px 15px black;" role="navigation">
<div class="navbar-header">
</div>
<div class="navbar-brand"><h3 style="font-family:transformers; color:white">Kanzmall.COM</h3> </div></div>
<br>
<div class="container">
<ul class="nav nav-pills">
<li ><a href="home.php">HOME <span class="glyphicon glyphicon-home" style="color:red "></span></a></li>
<li><a href="#">HOT DEALS <span class="glyphicon glyphicon-fire" style="color:orange" style="color:violet"></span></a></li>
<li><a href="#">SHOP NOW <span class="glyphicon glyphicon-shopping-cart" style="color:gold"></span></a></li>
<li style="border:2px solid white; border-radius:6px" ><a href="ad.php">ADVERTISE PRODUCT <span class="glyphicon glyphicon-bullhorn"></span></a></li>
<li><a href="login.php">LOGIN <span class="glyphicon glyphicon-user" style="color:skyblue"></span></a></li>
<li><a href="register.php">REGISTER <span class="glyphicon glyphicon-pencil" style="color:lightgreen"></span></a></li>
<form action="search.php" method="post">
<li>
<input  id="search" class="form-control" type="text" name="search" style="width:200px" placeholder="Search Product....">
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
<div class="container" align="center">
<br>
<br>
<form action="" method="post" enctype="multipart/form-data">
<h3 id="see" style="border-radius:14px; width: 30% auto; height:5% auto; background-color:black; color:white; padding:10px; border:1px solid white ">Please fill the form below</h3><br> <br><input type="text" class="form-control" style="width:200px" name="dealer_name" placeholder="Dealer name" required>
 <br><input type="text" class="form-control" style="width:200px" name="product_name" required placeholder="Product name">
 <br><select class="form-control" style="width:200px" name="category" required><option disabled selected>Select Category</option> <option> Phones/Tablets</option>
<option> Clothing</option><option> Footwears</option><option>Household Appliances</option><option> Phone Accessories</option></select> <br><input type="text" class="form-control" style="width:200px" name="product_price" required placeholder="Price">
<br>
<textarea name="product_desc" placeholder="Description/Specifications" class="form-control" style="width:200px; "></textarea>
<h5   id="lolz" style="border-radius:4px; background-color:black; color:white; width:200px; height:20px; border:1px solid white">Upload Product's Pic</h5> <br><input type="file" class="form-control" style="width:200px" name="product_pic" value="upload pic" required>
<br>
<input type="submit" name="submit" value="submit"  style="border-radius:4px; background-color:black; color:white; width:80px; height:30px">
</form>
<br>
</div>
<br>
<br>
<br>
me;
}
?>

<?php
if (isset($_POST['submit'])){
	$dealer_name=$_POST['dealer_name'];
	$product_name=$_POST['product_name'];
	$category=$_POST['category'];
	$product_price=$_POST['product_price'];
	$dir="ad_pics/";
	$photo=$dir.basename($_FILES['product_pic']['name']);
	move_uploaded_file($_FILES['product_pic']['tmp_name'],$photo);
$connect=new mysqli('localhost','root','1234','kanzmall');
$query="insert into advert(Dealer_name,Product_name,Category,Product_price,Thumbnail) values('$dealer_name','$product_name','$category','$product_price','$photo')";
$execute=mysqli_query($connect,$query);
if ($execute==true){
	echo '<br>
 <div class="container bs-example"> 
  <div class="alert alert-success fade in"> 
   <a href="#" onclick="this.parentElement.style.display="none"">&times;</a> 
   <strong>Success!!!</strong> <br> Advert request successfully sent to Admin 
  </div>'; 

}
else { echo '<script> alert("Advert request successfully sent to Admin"); </script>';}
}
?>
<br>
<br>
<br>
<br>
<nav class="navbar navbar-fixed-bottom" style="height:40px; background-color:black">
</div>
</body>
</html>