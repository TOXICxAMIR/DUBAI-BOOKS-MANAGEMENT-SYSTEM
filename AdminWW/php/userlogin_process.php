<?php 
session_start();
require('cons.php');

if(isset($_POST['loginsubmit'])){
    $username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
	$result = mysqli_query($conn,$sql);
	$final = mysqli_num_rows($result);

	if($final > 0){
		while ($row=mysqli_fetch_array($result)) {
     	 $_SESSION['id'] =  $row['id'];
     	 $_SESSION['name'] =  $row['name'];
        header("Location:userdashboard.php");
     }
 }else{
		echo "<script>alert('Please enter your correct details')</script>";
		echo "<script>window.open('userlogin.php','_self')</script>";		
	} 
}
?>

