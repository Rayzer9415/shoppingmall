<?php
session_start();
$uname=$_SESSION["user"];
?>
<?php
if(isset($_SESSION["user"])){
	header("location:home.php");
}
else 
{
	echo 
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
#see{box-shadow:10px 5px 45px black;}
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
<
  li><a href="#">SHOP NOW <span class="glyphicon glyphicon-shopping-cart" style="color:gold"></span></a></li>
<li class="disabled"><a href="#">ADVERTISE PRODUCT <span cl	ass="glyphicon glyphicon-bullhorn"></span></a></li>
<li><a href="login.php">LOGIN <span class="glyphicon glyphicon-user" style="color:skyblue"></span></a></li>
<li style="border:2px solid white; border-radius:6px"><a href="register.php">REGISTER <span class="glyphicon glyphicon-pencil" style="color:lightgreen"></span></a></li>
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
<h3  id="see" style="border-radius:14px; width:auto; height:auto; background-color:black; color:white; padding:10px; border:2px solid white">Register and enjoy our full services</h3><br>
<form action="" method="post" enctype="multipart/form-data">
<input type="text" class="form-control" style="width:200px;" name="fname" required placeholder="Firstname"><br>
<input type="text" class="form-control" style="width:200px" name="lname" required placeholder="Lastname"><br>
<input type="email" class="form-control" style="width:200px" name="email" required placeholder="email"> <br>
<input type="text" class="form-control" style="width:200px" name="number" required  placeholder="Phone 1 (Main)"><br>
<input type="text" class="form-control" style="width:200px" name="number2" required    placeholder="Phone 2 (Auxilliary)"><br>
<input type="text" class="form-control" style="width:200px" name="username" required   placeholder="Username"><br>
<input type="password" class="form-control" style="width:200px" name="password" required placeholder="Password"><br>
<h5   id="lolz" style="border-radius:4px; background-color:black; color:white; width:200px; height:20px; border:1px solid white">Upload Profile Pic</h5> <br>
<input type="file" class="form-control" style="width:200px" name="photo" required placeholder="Upload pic"><br>
<button style="background-color:black; color:white; border-radius:2px; height:40px"  name="Register"> Register</button></form><br>
<br><br><br>
</div>
<br>
<br>
<br>
<nav class="navbar-fixed-bottom" style="height:40px; background-color:black">
</body>
</html>
me;
	}
?>
<?php
if (isset($_POST['Register'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$num1=$_POST['number'];
	$num2=$_POST['number2'];
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$dir="profile_pics/";
	$photo=$dir.basename($_FILES['photo']['name']);
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
	$connect= mysqli_connect ('localhost','root','1234', 'kanzmall');
$check_user=mysqli_query($connect,"select * from register where Username='$user'");
	$finale_check= mysqli_num_rows($check_user);
if ($finale_check==0) {
$insert="insert into register (Firstname,Lastname,Email,Phone1,Phone2,Username,Password,Thumbnail) values ('$fname','$lname','$email','$num1','$num2','$user','$pass','$photo')";
	$insertauth=mysqli_query($connect,$insert);
	}
else {echo'<div class="container" align="center" style="background-color:black; color:red; border-radius:20px"><script>document.write("Username already exists please try another"); </script></div>';}
if ($insert==true){
	echo '<script> alert("Account Succesfully Created"); </script>';
	break;
	header("location:home.php");
}
else {echo '<script> alert("Account creation failed pls try again"); </script>';}
}
?>
