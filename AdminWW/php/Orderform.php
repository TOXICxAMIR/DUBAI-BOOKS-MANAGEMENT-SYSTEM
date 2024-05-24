<!--https://teamtreehouse.com/community/php-include-headerfooter-best-practice-->
<?php include 'userlogin_process.php';
$var1 ='';
$var2 ='';
$var1 = $_SESSION['name'];
$var2 = $_SESSION['id'];
?>
<?php include 'header.php';?>

	<div id="mainContent" style="width: 100%">
	<div id="header" style="border-bottom:2px solid #DDEEFF; display:block; height: 75px; padding-top: 25px; text-align: center; width: 100%">
		<h2> Order a Book </h2>
	</div>


	<div id="bodyContent">

	<form name="orderForm" id="orderForm" action="orderclient.php" method="post">

	<table border="0" cellpadding="10" cellspacing="5" width="100%">
	<tr>
	<td width="30%" align="left">
	<label for="title" class="btn btn-warning">
<span class="glyphicon glyphicon-book"></span>Book name:</label>

	</td>
<td width="30%" align="right">	
	<select name="title" class="form-control">
			<option>Select Book</option>

         <?php

	         
	      
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "banbury_db";

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
	$dbname = "banbury_db";

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
<?php include 'footer.php';?>
