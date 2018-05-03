<?php
$databas = new Mysqli;
$databas->connect('localhost', 'root' , '', 'address book');
if(!$databas){
	echo 'Sucessed';
}
?>