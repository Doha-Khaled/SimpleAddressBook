<?php
include'database.php';
if (isset($_POST['send'])){
	$name = $_POST['Name'];
	$num  = $_POST['Number'];
	$add  = $_POST['Address'];
	$sql= "insert into contacts(Name , Number , Address) value('$name' , '$num' , '$add')";
	$val =$databas->query($sql);
if ($val){
	header('location: index.php');
}
}
?>