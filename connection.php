<?php 

$con = mysqli_connect("localhost","root","","shopping-cart-db");
if(mysqli_connect_errno()){
	die("Coneection unsuceesful".mysqli_connect_error());
}else{
	echo "Connection suceesful";
}

?>