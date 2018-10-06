<html>
<body>
<form action="" method="post">
<p><input type="text" name="user" ></p>
<p><input type="password" name="pass"></p>
<p><input type="submit" name="login" value="login"></p>
</form>
<?php
if (isset($_POST['login'])){
$user=$_POST['user'];
$pass=$_POST['pass'];
$con=mysqli_connect('localhost','root','1234','test');
$select="SELECT * FROM register WHERE username='$user' && password='$pass'";
$execute=mysqli_query($con,$select);
$fetch=mysqli_num_rows($execute);
if ($fetch==true){
echo "Correct details"; 
}
else {echo "Wrong dectails";}
}

?>
</body>