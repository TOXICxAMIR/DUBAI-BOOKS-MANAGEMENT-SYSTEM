<?php
                    require('cons.php');
				    require('userlogin_process.php');	
				    $var1 ='';
				    $var1 = $_SESSION['name'];
				    $sql = "SELECT * FROM users WHERE name = '$var1'";
				    $result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result) > 0){
				       while ($row=mysqli_fetch_array($result)) {
				       $name =  $row['name'];
                       $address = $row['address'];
                       $gender = $row['gender'];
				       $phone_number = $row['phone_number'];
				       $email = $row['email'];
				       $username = $row['username'];
				       $password =   $row['password'];

				       }
				   }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('doctor_details.php', '_self')</script>";
    }
      
  
                    ?>
<!DOCTYPE html>

<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>User Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	<!<div class ="jumbotron" id="cs1"> </div>

	<div class="col-md-3">
	<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<a class="navbar-brand logo_h" href="userdashboard.php"><img src="../images/wwd.jpg" alt="" align="left"></a>                      		
					
					</div>

</div>
		<div class="container-fluid">
                   <?php
                    //session_start();
                   // require('userlogin_process.php'); 
                       $var1 ='';
                       $var1 = $_SESSION['name'] ;
                    ?>

           <h1>WELLCOME <?php echo $var1 ?> </h1>

<div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #1085c0; color: white; border-color: #06F2F8;"><h3 align="center">Preferences</h3>
					
                    <a href="Searchfeature.php" class="list-group-item">Search Book</a>
					<a href="orderform.php" class="list-group-item">Order Book</a>
					<a href="" class="list-group-item">My orders</a>
					
					
                    
                     </div>
					

				
			</div>
		
		<div class="col-md-6">
			<div class="card">
					<div class="card-body" style="background-color: #3498DB; color: white; text-align: center;";>
				
                      

				<h5>Update My Profile </h5></div>
				<div class="card-body" >
					<form class="form-group" action="userupdate_process.php" method="POST" enctype="multipart/form-data">	
					
					 <label>Full Name</label>
						<input type="text" name="name"  class="form-control" value="<?php echo $name;?>" required><br>
                     <label>Address</label>
						<input type="text" name="address"  class="form-control" value="<?php echo $address;?>" required><br>
                     <label>Gender</label>
						<input type="text" name="gender"  class="form-control" value="<?php echo $gender;?>" required><br>
					<label>Phone Number</label>
						<input type="number" name="phone_number"  class="form-control" value="<?php echo $phone_number; ?>" required><br>
					<label>Email</label>
						<input type="email" name="email"  class="form-control" value="<?php echo $email; ?>" required><br>
					<label>User Name</label>
						<input type="text" name="username"  class="form-control" value="<?php echo $username; ?>" required><br>
					<label>Password</label>
						<input type="text" name="password"  class="form-control" value="<?php echo $password; ?>" required><br>
					
                     
					
						<center> <input type="submit" name="update" value="Update Details" class="btn btn-primary"></center>

					</form>
				</div>
			</div><p><br><p><p>
		</div>
        <div class="col-md-1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
$(function(){
    $('#time').combodate({
        firstItem: 'name', //show 'hour' and 'minute' string at first item of dropdown
        minuteStep: 1
    });  
});
</script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
				  Swal.fire({
				  title: 'Welcome Admin',
				  text: 'Enjoy your operations',
				  imageUrl: 'images/logo.jpg',
				  imageWidth: 200,
				  imageHeight: 100,
				  imageAlt: 'Custom image',
				  animation: false
				})
	});

</script> > -->
</body>
</html>