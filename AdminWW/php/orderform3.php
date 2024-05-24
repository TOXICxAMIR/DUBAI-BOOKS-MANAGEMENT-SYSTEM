<!--https://teamtreehouse.com/community/php-include-headerfooter-best-practice-->
<?php include 'userlogin_process.php';
$var1 ='';
$var2 ='';
$var1 = $_SESSION['name'];
$var2 = $_SESSION['id'];
?>
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
    <?php include("uheader.php"); ?>

	<div id="mainContent" style="width: 100%">
	<div id="header" style="border-bottom:2px solid #DDEEFF; display:block; height: 75px; padding-top: 25px; text-align: center; width: 100%">
    <br><br><br>
		<h2> Order a Book </h2>
	</div>

    <div class="col-md-12">
			<div class="card">
				<div class="card-body" style="background-color: #2b695b; color: white; text-align: center;";>
				
				<h5>Order a Book </h5></div>
				<div class="card-body">

	<form name="orderForm" id="orderForm" action="orderclient3.php" method="post">

	<table border="0" cellpadding="10" cellspacing="5" width="100%">
    <tr>
	<td width="30%" align="right">
	<label for="title">Book Name:</label>
	</td>
	<td width="70%" align="left">
	<select name="title" class="form-control">
			<option>Select Book</option>
         <?php	      
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "plutonium_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
          $sql = "SELECT * From books";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_num_rows($result);
          while ($row = mysqli_fetch_array($result)){
          echo "<option value='". $row['bid'] ."'>" .$row['title'] ."</option>" ;
          }
           ?>
</select>
</td>	</tr>


	<tr>
	<td width="30%" align="right">
	<label for="qty">Quantity:</label>
	</td>
	<td width="70%" align="left">
	<input type="number" name="qty" required="" min=1>
	</td>
	</tr>

    <tr>
	<td width="30%" align="right">
	<label for="aut">Book Author:</label>
	</td>
	<td width="70%" align="left">
	<select name="aut" class="form-control">
			<option>Select book Author</option>

         <?php
	               
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "plutonium_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
          $sql = "SELECT * From books";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_num_rows($result);
          while ($row = mysqli_fetch_array($result)){
          echo "<option value='". $row['bid'] ."'>" .$row['author'] ."</option>";
          }
           ?>
</select>
	</td>
	</tr>

	<tr>
	<td width="30%" align="right">
	<label for="cname" class="btn btn-warning">
          <span class="glyphicon glyphicon-user"></span>CustomerName:
	</label>
	</td>
	<td width="70%" align="left">	 
	<input type="text" name="cname_user" value="<?php echo $var1 ;?>" required="" readonly>
	<input type="hidden" name="cname" value="<?php echo $var2 ;?>" required="" readonly>
	</td>
	</tr>


	<tr>
	<td width="30%" align="right">
	<label for="address">Delivery Address:</label>
	</td>
	<td width="70%" align="left">
	<textarea name="address">
	</textarea>
	</td>
	</tr>


    <tr>
	<td width="30%" align="right">
	<label for="pno">Card Number:</label>
	</td>
	<td width="70%" align="left">
	<input type="number" name="cno" required="" >
	</td>
	</tr>

	<tr>
	<td width="30%" align="right"></td>
	<td width="70%" align="left">
	<input type="submit" name="goForAddNewBook" value="Order Book"
	class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus-sign"></span>
	</td>
	</tr>

	</table>
	</form>
	</div>
	</div>
    </div>
    </div>
    </div>