<?php

session_start();


$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'SignupDB');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];

$E = "select * from SignupDB where email = '$email'";
$res = mysqli_query($con, $E);
$num = mysqli_num_rows($res);

if($num == 1){
	header('location:signup_error.php');
}else{

	$rs = "insert into SignupDB (name, email, password, mobile) values ('$name', '$email', '$password' , 'mobile')";

	mysqli_query($con, $rs);

	header('location:indexnew.php');

}



?>