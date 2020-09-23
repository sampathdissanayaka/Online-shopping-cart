
<?php 

$con = mysqli_connect("localhost","root","","shopping-cart-db");
if(mysqli_connect_errno()){
	die("Coneection unsuceesful".mysqli_connect_error());
}else{
	echo "Connection suceesful";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>online shopping cart</title>
<style>

.login ul li {
    float:left; 
    margin-left:25px;
    list-style-type:none;
}

a{
  text-decoration:none;
}

.from{
	clear:both;
}


</style>
</head>

<body>
<div class = "login">
<ul>
<li><a href="login.php">Login</a></li>
<li><a href="signin.php">Sign in</a></li>
</ul>
</div><br><br>


<from action = "login.php" method  = "POST" class="from">

<label>Username:</label><br>
<input type="text" name = "uname"><br><br>

<labal>Email:</labal><br>
<input type ="text" name = "email"><br><br>

<labal>Password:</labal><br>
<input type="password" name= "password"><br><br>

<labal>Confrom Password</labal><br>
<input type = "password" name = "cpassword"><br><br>

<labal>User Role</labal><br>
<select id ="user-role" name = "urole">
<option value = "admin">Admin</option>
<option value = "seller">Seller</option>
<option value = "user">User</option>
</select><br><br>
<input type = "submit" name ="submit" value = "Submit">

</from>



<?php 
if(isset($_POST['submit'])){

$uname = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];
$compassword = $_POST['cpassword'];
$user_r = $_POST['urole'];
$enpassword = sha1($compassword);
}

$dbQuery = "insert into user-role-details(username,email,password,user-role) values('$uname','$email','$enpassword','$user-r')";

$result = mysqli_query($con,$dbQuery);
if($result){
	echo "record is added";
}else{
	echo "record is not added";
}


?>

</body>

</html>