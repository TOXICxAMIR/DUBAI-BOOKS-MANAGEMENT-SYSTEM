<?php
                    require('cons.php');
				    //require('staffvalidate.php');	
				    //$var1 ='';
				    //$var1 = $_SESSION['name'];
				    $sql = "SELECT * FROM registry Where supid = 1; ";
				    $result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result) > 0){
				       while ($row=mysqli_fetch_array($result)) {
				       $id =  $row['supid'];
				       $name = $row['supname'];
				       $url = $row['wsdlurl'];

				       }
				   }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
      
         ?>
           <?php 
                    require('cons.php');
				    //require('staffvalidate.php');	
				    //$var1 ='';
				    //$var1 = $_SESSION['name'];
				    $sql = "SELECT * FROM registry Where supid = 2; ";
				    $result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result) > 0){
				       while ($row=mysqli_fetch_array($result)) {
				       $id2 =  $row['supid'];
				       $name2 = $row['supname'];
				       $url2 = $row['wsdlurl'];

				       }
				   }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
      
                    ?>
        <?php
                    require('cons.php');
				    //require('staffvalidate.php');	
				    //$var1 ='';
				    //$var1 = $_SESSION['name'];
				    $sql = "SELECT * FROM registry Where supid = 3; ";
				    $result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result) > 0){
				       while ($row=mysqli_fetch_array($result)) {
				       $id3 =  $row['supid'];
				       $name3 = $row['supname'];
				       $url3 = $row['wsdlurl'];

				       }
				   }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
      
                    ?>
<!DOCTYPE html>

<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Admin Dashboard</title>
		
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
					
					<!-- <a class="navbar-brand logo_h" href="index.html"><img src="../images/bg.png" alt="" align="left" height="150px"></a> -->
                      
					</div>

</div>
		<div class="container-fluid">
                   <!--<?php
                    //session_start();
                    //require('studlogin_process.php'); ?>


           --><h1>Edit Supplier Details </h1>

           <div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #0b6974; color: black; border-color: #229f90;"><h3 align="center">Admin Operations</h3>
					
                    <a href="editsupplier.php" target="_top" class="list-group-item">Edit Supplier Details</a>
					<a href="wieworder.php" target="_top" class="list-group-item">View Orders</a>
					<a href="viewusers.php" target="_top" class="list-group-item">Custormer Details</a>
					
            
                     </div>
					
			</div>
		<div class="col-md-3">
			<div class="card">
				<div class="card-body" style="background-color: #153e3b; color: white; text-align: center;";>
				
                      

				<img src="../images/ban1.jpg" alt=""  height="70px"></div>
				<div class="card-body" >
					<form class="form-group" action="editsupplier_process.php" method="POST" enctype="multipart/form-data">	
					
					 <label>Supplier ID</label>
						<input type="text" name="id"  class="form-control" value="<?php echo $id; ?>" readonly><br>

					<label>Supplier Name</label>
						<input type="text" name="name"  class="form-control" value="<?php echo $name; ?>"><br>
					<label>WsdlURL</label>
						<input type="text" name="wsdl"  class="form-control" value="<?php echo $url; ?>"><br>
					
					

						<center> <input type="submit" name="update" value="Update" class="btn btn-primary">
                              <input type="submit" name="update" value="Delete" class="btn btn-danger">
						</center>

					</form>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<div class="card-body" style="background-color: #153e3b; color: white; text-align: center;";>
				
                      

				<img src="../images/cer.jpg" alt=""  height="70px"></div>
				<div class="card-body" >
					<form class="form-group" action="editsupplier_process.php" method="POST" enctype="multipart/form-data">	
					
					 <label>Supplier ID</label>
						<input type="text" name="id"  class="form-control" value="<?php echo $id2; ?>" readonly><br>

					<label>Supplier Name</label>
						<input type="text" name="name"  class="form-control" value="<?php echo $name2; ?>"><br>
					<label>WsdlURL</label>
						<input type="text" name="wsdl"  class="form-control" value="<?php echo $url2; ?>"><br>
					
					
<center> <input type="submit" name="update" value="Update" class="btn btn-primary">
                              <input type="submit" name="update" value="Delete" class="btn btn-danger">
						</center>

					</form>
				</div>
			</div>
		</div>
		
<div class="col-md-3">
				<div class="card">
				<div class="card-body" style="background-color: #153e3b; color: white; text-align: center;";>
				
                      
<img src="../images/pl1.jpg" alt=""  height="70px">
				</div>
				<div class="card-body" >
					<form class="form-group" action="editsupplier_process.php" method="POST" enctype="multipart/form-data">	
					
					 <label>Supplier ID</label>
						<input type="text" name="id"  class="form-control" value="<?php echo $id3; ?>" readonly><br>

					<label>Supplier Name</label>
						<input type="text" name="name"  class="form-control" value="<?php echo $name3; ?>"><br>
					<label>WsdlURL</label>
						<input type="text" name="wsdl"  class="form-control" value="<?php echo $url3; ?>"><br>
					
					
<center> <input type="submit" name="update" value="Update" class="btn btn-primary">
                              <input type="submit" name="update" value="Delete" class="btn btn-danger">
						</center>

					</form>
				</div>
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