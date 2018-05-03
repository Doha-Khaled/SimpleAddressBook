<?php
include'database.php';
$id = $_GET['id'];
$sql = "delete  from contacts where ID= '$id'";
$val = $databas->query($sql);
if($val){
header('location: index.php');
};
?>