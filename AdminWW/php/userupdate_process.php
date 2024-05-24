<?php 

require('cons.php');
require('userlogin1.php');

if(isset($_POST['update'])){
	$var1 ='';
    $var1 = $_SESSION['name'] ;
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	

  $sql= "UPDATE `users` SET  `phone_number` = '$phone_number', `email` = '$email', `address` = '$address',  `username` = '$username',  `password` = '$password',  `gender` = 'gender' WHERE `users`.`name` = '$var1'";
 $result = mysqli_query($conn,$sql);

if ($result) {
	echo "<script>alert('Details Updated Succesfully')</script>";
	echo "<script>window.open('userdashboard.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "fields required";
}


?>