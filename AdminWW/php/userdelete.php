<?php
include("cons.php");
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = {$id}";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Admin Deleted</p>";
	header("Location:dashboard.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Admin Not Deleted</p>";
	header("Location:dashboard.php?msg=$msg");
}
mysqli_close($conn);
?>
