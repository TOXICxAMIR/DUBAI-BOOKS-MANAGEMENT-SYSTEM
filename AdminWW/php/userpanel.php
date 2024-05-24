
<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!<div class ="jumbotron" id="cs1"> </div>

	<div class="col-md-3">
	<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<center>
					<a class="navbar-brand logo_h" href="index.php"><img src="../images/bg2.png" alt="" align="center"></a>                      	
					</center>
					</div>

</div>
		<div class="container-fluid">
                   <?php
                    //session_start();
                    require('userlogin_process.php'); 
                       $var1 ='';
                       $var1 = $_SESSION['name'] ;
                       $var2 = $_SESSION['id'] ;
                    ?>

           <h1>WELLCOME <?php echo $var1, $var2?> </h1>

<div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #F57460; color: white; border-color: #06F2F8;"><h3 align="center">Preferences</h3>
					
                    <a href="Searchfeature.php" class="list-group-item">Search Book</a>
					<a href="orderform.php" class="list-group-item">Order Book</a>
					
					
					
                    
                     </div>
					

				
			</div>
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-body" style="background-color: #F57460; color: white; text-align: center;";>
				
				<h5>Contact Admin/Supplier </h5></div>
				<div class="card-body">
					<form class="form-group" action="comp_pros.php" method="POST" enctype="multipart/form-data">	
					
					 <label>Enquiry Message</label>
						<input type="text" name="msg"  class="form-control" required><br>
                     
					<label>Supplier Name</label>
						<select class="form-control" name="sup">
							<option>Select...</option>
							<option>Banbury</option>
							<option>Cerebro</option>
							<option>Plutonium</option>
						
						</select><br>

						<center> <input type="submit" name="comp" value="Submit Complaint" class="btn btn-danger"></center>

					</form>
				</div>
			</div><p><br><p><p>
			<?php include("footer.php");?>
		</div>
 <div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #F57460; color: white; border-color: #06F2F8;"><h3 align="center">My Profile</h3>
					
                    <a href="userupdate.php" class="list-group-item">Update profile</a>
					<a href="index.php" class="list-group-item">Log out</a>
					
					
                    
                     </div>
					
					
			</div>
			
		
	

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
