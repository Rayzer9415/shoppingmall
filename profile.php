<?php
session_start();
$uname=$_SESSION['user'];
?>
<!doctype html>
<html>
<head>
<title> Profile
</title>
</head>
<link href="bootstrap-3.3.7\css\bootstrap.css" type="text/css" rel="stylesheet">
<link href="bootstrap-3.3.7\css\bootstrap-theme.css" type="text/css" rel="stylesheet">
<link href="lib\w3.css" type="text/css" rel="stylesheet">
<script src="bootstrap-3.3.7\js\jquery-3.2.1.min.js"></script>
<script src="bootstrap-3.3.7\js\bootstrap.js"></script>
<style>
body {font-family:calibri; font-size:14pt; background-color:#101020}
</style>
<body>
<nav class="navbar navbar-inverse" >
<div class="container"  align="center" style="width:100%"> <h1 style="font-family:transformers; color:white">kanzmall.com </h1>
<p style="position:absolute; right:50px; color:white; margin-top:-55px;" class="btn btn-primary"><a href="profile.php" style="text-decoration:none; color:white">
<?php echo $uname. "  ".'<span color:white" class="glyphicon glyphicon-user"></span>'; ?> </a>&emsp; <a href="logout.php"><button class="btn btn-primary">Logout</button></a></p>
</div>
</nav>
<?php
$connect= mysqli_connect('localhost','root','1234','kanzmall');
$collect="select * from register where Username='$uname'";
$execute=mysqli_query ($connect,$collect);
$get=mysqli_fetch_assoc($execute);
$fname= $get['Firstname'];
$lname=$get['Lastname'];
$user=$get['Username'];
$pass=$get['Password'];
$phone1=$get['Phone1'];
$phone2=$get['Phone2'];
$email=$get['Email'];
$pic=$get['Thumbnail'];
?>

<p style="position: absolute; left: 40px; color:white"><a href="home.php"><button class="btn btn-primary"> Back to Home </button> </a></p> 
<p style="position: absolute; right: 40px; color:white"><a href="report.php"><button class="btn btn-primary"> Report issue </button> </a></p>
<br>
<br>
<?php
echo
<<<me
<div align="center">
<div class="w3-card-8 w3-container  w3-light-grey" style='width:300px' align='center'><br><img src="$pic" width="250px" height="250px"><br><br>
</div></div>
<br>
me;
?>

<div class="container"  align="center"style="background:skyblue; border-radius:6px; border: 2px solid steelblue">
<br>

<form action="" method="post" enctype="multipart/form-data">
<input type="text" class="form-control" style="width:200px; border:2 px solid orange" name="fname" required placeholder="Firstname" value=<?php echo $fname;?>><br>
<input type="text" class="form-control" style="width:200px" name="lname" required placeholder="Lastname" value="<?php echo $lname;?>"><br>
<input type="email" class="form-control" style="width:200px" name="email" required readonly placeholder="email" value=<?php echo $email; ?>> <br>
<input type="text" class="form-control" style="width:200px" name="number" required  readonly placeholder="Phone 1 (Main)" value=<?php echo$phone1; ?> ><br>
<input type="text" class="form-control" style="width:200px" name="number2" required    placeholder="Phone 2 (Auxilliary)" value=<?php echo $phone2; ?>><br>
<h6 style="border-radius:4px; background-color:black; color:white; width:200px; height:20px; border:1px solid white">Update Profile Pic</h6><br>
<input type="file" name="photo" class="form-control" style="width:200px">
<br>
<input type="text" class="form-control" style="width:200px" name="username"  placeholder="Username" readonly value=<?php echo $user;?>><br>
<input type="text" class="form-control" style="width:200px" name="password" required placeholder="Password" value=<?php echo $pass;?>><br>
<button class="btn btn-primary"  name="update"> Update</button><br>
</form>
<br>
<?php
if (isset($_POST['update'])){
	$fname= $_POST['fname'];
$lname=$_POST['lname'];
$user=$_POST['username'];
$pass=$_POST['password'];
$phone1=$_POST['number'];
$phone2=$_POST['number2'];
$email=$_POST['email'];
$photo=$_FILES['photo']['name'];
$dir="profile_pics/";
$photo=$dir.basename($_FILES['photo']['name']);
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
$connect= mysqli_connect('localhost','root','1234','kanzmall');
$update="UPDATE register SET Firstname='$fname', Lastname='$lname', Phone1='$phone1', Thumbnail='$photo', Password='$pass' WHERE Username='$uname'";
$execute= mysqli_query($connect,$update);
}
?>
<br>
<br>
</div>
<br>
<br>
<br>

<nav class="navbar navbar-inverse navbar-fixed-bottom" ></nav>