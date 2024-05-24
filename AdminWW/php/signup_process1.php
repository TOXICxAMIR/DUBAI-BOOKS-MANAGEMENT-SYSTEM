<?php 

require('cons.php');
if(isset($_POST['register'])){

	$cpassword = $_POST['cpassword'];
    $password = $_POST['password'];	
    $username = $_POST['username'];
    if($password == $cpassword){
	
$sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New User Registed Succesfully')</script>";
	echo "<script>window.open('dashboard.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "<script>alert('Sorry Password do not match')</script>";
	echo "<script>window.open('signup.php','_self')</script>";
}
}


?>