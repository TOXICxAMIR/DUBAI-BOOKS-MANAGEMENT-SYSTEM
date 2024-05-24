<!DOCTYPE html>
<html>
<head>

    <!--making page response

	--><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<!-- <body style="background:url('rak.jpg.jpeg'); background-size:cover; opacity: 2 ; "> -->
<body style="background:url('./signup.jpeg'); no-repeat background-size:cover; opacity ">
<div class="container" style="width: 400px; margin-top:100px";>
<a href="\\index.html" class="btn btn-warning">Back To Home</a>
<center>
<h1><b> Supplier Page</b></h1>
</center>
<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #F57460; color: white; text-align: center;";>
				
				<h5>Add Book Supplier Details </h5></div>
				<div class="card-body" >
					<form class="form-group" action="add_supplier_script.php" method="POST">	
					
					 <label>Supplier Name</label>
						<input type="text" name="supname"  class="form-control" required><br>

					<label>Supplier WsdlURL</label>
						<input type="text" name="address"  class="form-control" required><br>

					
                     
					
						<center> <input type="submit" name="addsup" value="Add Supplier" class="btn btn-danger"></center>

					</form>
</div>
</div>
</div>
 <footer id="footer" class="midnight-blue">
        <div class="container" style="width: 500px; margin-top: 150px  ">
            <div class="row">
                <div class="col-sm-12">
                    <center> Book Management System. &copy; <?= date('Y'); ?> .All Rights Reserved.</center>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>