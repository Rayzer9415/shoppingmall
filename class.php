<?php
$object= new User;
$object->name='David';
$object->password='0000';
$object->alter();
class User {
	public $name, $password;
	function alter(){
		return $this->password;
	}
}
print_r($object);
echo $object->alter();
echo $object->name;
echo $object->password . "<br>";

$paper[]="Draft";
$paper[]="Pay";
$paper[]="Cleine";
$paper[]="Biki";
$paper[]="Eze";
$name=array('david','rayzer','tracker');
echo $name[2]. "<br>";
for ($i=0; $i<=4; $i++){
	echo $i.$paper[$i]. "<br>";

}
echo count($paper);
$explode=explode(" ", "The name of the principal of Bristow used to be Yandev");
print_r($explode);
echo "<br>";
$conn= new mysqli('localhost','root','1234','kanzmall');
if (!$conn){
	echo "wrong";
}
else die("good");
query
?>