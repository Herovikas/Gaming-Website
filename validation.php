<?php

session_start();


$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'SignupDB');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$E = "select * from SignupDB where email = '$email' and password= '$password'";

$result = mysqli_query($con, $E);
$num = mysqli_num_rows($result);


if($num == 1){
   	$_SESSION['name'] = $name;
	header('location:indexnew.php');
}else{
	header('location:login_error.php');

}

?> 

