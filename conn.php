<?php 
ob_start();
$conn=new mysqli("localhost","root","","admin");
if($conn->connect_error){
	 die("Error :".$conn->connect_error);
}
else {
	echo "connection database";
}
?>