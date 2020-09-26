<?php 

$con = mysqli_connect("localhost","root","","cs_shopping");
if(mysqli_connect_errno()){
	die("Coneection unsuceesful".mysqli_connect_error());
}else{
	echo "connection sucessfull";
}

?>