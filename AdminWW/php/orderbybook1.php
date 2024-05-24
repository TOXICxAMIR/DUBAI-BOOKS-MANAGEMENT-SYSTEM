<!DOCTYPE html>
<?php include('myorder2process.php'); ?>
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
<body style="background:url('../images/c1c.jpeg'); no-repeat background-size:cover; opacity: 2 ; ">
	<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/uob.png" alt=""></a>

</div>

	<div class="container" style="width: 800px; margin-top:100px";>
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-4">
						<a href="userdashboard.php" class="btn btn-danger">Back to User Dashboard</a>
						
					</div>
				<h3 style="color: brown;"> Search Result </h3>
				</div>	
			</div>
			<div class="card-body">
				<table class="table table-hover">
					<thead>
						<tr>
 
	                            <th scope="col">Book ID</th>
                                <th scope="col">Title</th>
	                            <th scope="col">Description</th>
	                            <th scope="col">Author</th>
	                            <th scope="col">Price</th>
	                            <th scope="col">Category</th>
						</tr>
					</thead>
					<tbody>
						<?php
                             search_by_book();
						?>
						
					</tbody>
				</table>
				
			</div>
		</div>
		
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>