<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Dubai Books | User</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
    <?php include("uheader.php"); ?>
    <div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/uob.png" alt=""></a>

</div>
<div class="container" style="width: 400px; margin-top:30px";>
	<center><a href="userdashboard.php" class="btn btn-danger">Click to go back</a></center>
 <div class="col-md-5">
        </div>
	<div class="card" style="background-color: #171b1b ;">
       <img src="../images/src1.gif" class="card-img-top" width="100px" height="150px">
		<div class="card-body">
	<form class="form-group" action="Searchclient1.php" method="post">
		<label>Supplier Name</label>
		<select name="supname" class="form-control">
			<option>Select Suplier</option>
            <!-- <option>Banbury</option>
			<option>Cerebro</option>
			<option>Plutonium</option> -->

         <?php

	         
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dubaibooks_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

          $sql = "SELECT * From registry";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_num_rows($result);
          while ($row = mysqli_fetch_array($result)){
          echo "<option value='". $row['supid'] ."'>" .$row['supname'] ."</option>" ;
          }
           ?>
</select>

     
        <label for="txttitle">Book Title</label>
        <input type="text" name="txttitle" class="form-control" placeholder="Enter book name" required="">
		<label for="txttitle">Book Category</label>
        <input type="text" name="txtcategory" class="form-control" placeholder="Enter book Category" >
        
        <label for="txttitle">Book Author</label>
        <input type="text" name="txtauthor" class="form-control" placeholder="Enter book Author" >
        <label for="txttitle">Book Price</label>
        <input type="number" name="txtprice" class="form-control" placeholder="" ><br>
		
		<center>
		<input type="submit" name="submit"  class="btn btn-danger" value="Search Book">	
		</center>
		
	</form>
</div>
</div>
</div>
 <footer id="footer" class="midnight-blue">
        <div class="container" style="width: 500px; margin-top: 150px  ">
            <div class="row">
                <div class="col-sm-12">
                    <center> University Of Bolton &copy; <?= date('Y'); ?> .All Rights Reserved.</center>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
