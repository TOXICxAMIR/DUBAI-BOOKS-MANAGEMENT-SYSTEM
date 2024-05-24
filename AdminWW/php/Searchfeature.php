
<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body style="background:url('../images/cc.jpeg'); no-repeat background-size:cover; opacity ">


<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/uob.png" alt=""></a>

</div>
<div class="container" style="width: 400px; margin-top:30px";>
	<center><a href="index.php" class="btn btn-danger">Click to go back</a></center>
 <div class="col-md-5">
        </div>
	<div class="card">
       <img src="../images/src.gif" class="card-img-top" width="100px" height="150px">
		<div class="card-body">
	<form class="form-group" action="Searchclient.php" method="post">
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
