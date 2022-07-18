<?php
session_start();
//create connection
$conn=mysqli_connect('localhost','root','pass1234','signup');
//check connection
if($conn){
	echo "connection sucessfully";
}
else
{
	echo "connection error";
}
$email=$_POST['email'];
$pass=$_POST['password'];
$rpass=$_POST['repeatpass'];
$q="select * from signupdetail where email='$email' && password='$pass' && repeatpass='$rpass'";
$result=mysqli_query($conn,$q);
if ($_POST["password"] === $_POST["repeatpass"]) {
	$qy="insert into signupdetail(email,password,repeatpass) values('$email','$pass','$rpass')";
	mysqli_query($conn,$qy);
}
else {
	echo "password does not match";
}
mysqli_close($conn);
?>