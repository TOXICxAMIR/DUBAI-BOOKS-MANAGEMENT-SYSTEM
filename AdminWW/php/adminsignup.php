<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>
<body style="background:url('./signup.jpeg'); no-repeat background-size:cover; opacity ">


<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="" alt=""></a>

					<a href="/book store/index.html" class="btn btn-warning">Back To Home</a>

</div>
<div class="container" style="width: 500px; margin-top:20px";>
	<div class="card" style="background-color: white; color: red;">
       <img src="./registration.jpeg" class="card-img-top" width="100px" height="100px">
		<div class="card-body">

	<form class="form-group" action="signup_process1.php" method="post">
		            
					<label>Username</label>
			             <input type="text" name="username" class="form-control" placeholder="Enter your Username" required="">
			         <label>Password</label>
			             <input type="password" name="password" class="form-control" placeholder="Enter your password" required="">
                     <label>Confirm Password</label>
			             <input type="password" name="cpassword" class="form-control" placeholder="Enter your password Again" required=""><BR>
		<center>
		<input type="submit" name="register"  class="btn btn-primary" value="Register">	
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