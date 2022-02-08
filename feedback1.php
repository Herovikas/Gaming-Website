<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'feedback1');

$user = $_POST['user'];
$email = $_POST['email'];
$Feedback = $_POST['Feedback'];

$query = "insert into feedback1 (user, email, Feedback) values ('$user', '$email', '$Feedback')";

mysqli_query($con, $query);

header('location:indexnew.php');


?>
