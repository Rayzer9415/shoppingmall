<?php
session_start();
$uname=$_SESSION['user'];
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Profile
</title>
</head>
<link href="bootstrap-3.3.7\css\bootstrap.css" type="text/css" rel="stylesheet">
<link href="lib\w3.css" type="text/css" rel="stylesheet">
<link href="bootstrap-3.3.7\css\bootstrap-theme.css" type="text/css" rel="stylesheet">
<script src="bootstrap-3.3.7\js\jquery-3.2.1.min.js"></script>
<script src="bootstrap-3.3.7\js\bootstrap.js"></script>

<style>
body {font-family:calibri; font-size:14pt; background-color:#101020}
</style>
<body>
<nav class="navbar navbar-inverse" >
<div class="container"  align="center" style="width:100%"> <h1 style="font-family:transformers; color:white">kanzmall.com </h1>
<p style="position:absolute; right:50px; color:white; margin-top:-55px;" class="btn btn-primary"><a href="profile.php" style="text-decoration:none; color:white">
<?php echo $uname. "  ".'<span color:white" class="glyphicon glyphicon-user"></span>';?> </a>&emsp; <a href="profile.php"><button class="btn btn-primary">Back to profile</button></a></p>
</div>
</nav>
<p style="position: absolute; left: 40px; color:white"><a href="homeauth.php"><button class="btn btn-primary"> Back to Home </button> </a></p> 
<br>
<br>
<div align="center">
<div class="w3-card-8 w3-container  w3-light-grey" style='width:250px' align='center'><br><img src='IMG_20171116_155540.jpg' width="200px"><br><br></div></div>
<br>
<div class="container"  align="center"style="background:skyblue; border-radius:6px; border: 2px solid steelblue">
<br>
<?php
$connect= mysqli_connect('localhost','root','1234','kanzmall');
$collect="select * from register where Username='$uname'";
$execute=mysqli_query ($connect,$collect);
$get=mysqli_fetch_array($execute);
$user=$get['Username'];
$pass=$get['Password'];
$phone1=$get['Phone1'];
$email=$get['Email'];
?>
<form action="" method="post">
<input type="text" class="form-control" style="width:200px" name="username"  placeholder="Username" readonly value=<?php echo $user;?>><br>
<input type="email" class="form-control" style="width:200px" name="email" required placeholder="email" readonly value=<?php echo $email; ?>> <br>
<input type="text" class="form-control" style="width:200px" name="number" required  placeholder="Phone" readonly value=<?php echo $phone1; ?>><br>
<textarea class="form-control" style="width:200px" name="subject" required placeholder="Subject"></textarea><br>
<textarea class="form-control" style="width:200px" name="issue" required placeholder="Enter report"></textarea><br>
<input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form><br>
<br>
<?php
if (isset($_POST['submit'])){
$U=$_POST['username'];
$ph1=$_POST['number'];
$mail=$_POST['email'];
$myemail="davidakaanz@gmail.com";
$subject=$_POST['subject'];
$issue=$_POST['issue'];
mail($myemail,$subject,$issue);
}
?>
<br>
<br>
</div>
<br>
<br>
<br>

<nav class="navbar navbar-inverse navbar-fixed-bottom" ></nav>