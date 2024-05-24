<?php 

require('cons.php');
//require('doctorvalidate.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
	$gender = $_POST['gender'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$username = $_POST['username'];
    $password = $_POST['password'];
	

  $sql= "UPDATE `users` SET `id` = '$id',`name` = '$name', `address` = '$address', `gender` = '$gender', `phone_number` = '$phone_number', `email` = '$email',`username` = '$username',`password` = '$password' WHERE `users`.`id` = '$id' ";
 $result = mysqli_query($conn,$sql);

if ($result) {
	echo "<script>alert('Details Updated Succesfully')</script>";
	echo "<script>window.open('viewusers1.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "fields required";
}


?>