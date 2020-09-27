
<?php 

$con = mysqli_connect("localhost","root","","cs_shopping");
if(mysqli_connect_errno()){
	die("Coneection unsuceesful".mysqli_connect_error());
}else{
	//echo "connection sucessfull";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  .center{
    margin-left:650px;
  }
 
 .section{
   padding-right:130px;
   padding-bottom:5px;
   padding-top:5px;
 }

 .section1{
   padding-right:230px;
   padding-bottom:5px;
   padding-top:5px;
 }
 .section2{
   padding-right:244px;
   padding-bottom:7px;
   padding-top:7px;
   text-align:center;
   background-color:#009933;
   border:none;
   
   
 }

 
  
  </style>


</head>
<body>
  <form action ="signin.php" method ="POST" class="center">
  <h3>SIGN UP</h3>
  <label>USERNAME:</label><br>
  <input type ="text" name = "username" placeholder ="USERNAME" class="section"><br><br>
  <label>EMAIL:</label><br>
  <input type ="text" name = "email" placeholder ="EMAIL" class="section"><br><br>
  <label>PASSWORD:</label><br>
  <input type ="password" name = "password" placeholder ="PASSWORD" class="section"><br><br>
  <label>CONFORM PASSWORD:</label><br>
  <input type ="password" name = "cpassword" placeholder ="CONFROM PASSWORD" class="section"><br><br>
  <label>USER ROLE:</label><br>
  <select name ="user-role" class="section1"> 
  
   <option>Admin</option>
   <option>Seller</option>
   <option>User</option> 
  </select>
<br><br>
  <input type ="submit" name ="submit" class="section2">
  </form>

<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
//echo "$username <br>";
$email = $_POST['email'];
$password = $_POST['password'];
$conpassword = $_POST['cpassword'];
$userrole = $_POST['user-role'];
$enpassword = sha1($conpassword);

if($password== $conpassword){

//print_r($_POST);
$dbQuery = "INSERT INTO user
VALUES ('','$username', '$email', '$conpassword','$userrole')";
/*$result = mysqli_query($con,$dbQuery);

if($result){
  echo "record is added";

}else{
  echo "record is not added";
}*/


if($con->query($dbQuery)==TRUE){
  echo "New record created successfully";
}else{
  echo "Error" .$dbQuery ."<br>" . $con->error;
}
$con->close();

}
else{
  echo "password and conpassword is not same";
}

}

?>
</body>
</html>

