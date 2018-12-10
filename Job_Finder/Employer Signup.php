<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up Form</title>
	<link rel="stylesheet" href="assets/css/signup.css" type="text/css"> 
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>





<body background="assets\img\cox.jpg">
	<div class= "signupbox">
		
		<h2>Sign up Here</h2>
		<form action="Backend/Employer Signup.php" method="post">
			<p> User Name </p>
			<input type="text" name="user_name" placeholder="user name" required="">
	       	       	
			<p> Your Email </p>
			<input type="text" name="email" placeholder="your email" required="">			
			<p> Password </p>
			<input type="Password" name="pass" placeholder="Password" required="">
			<p> Re Type Password </p>
			<input type="Password" name="repass" placeholder="Password" required="">
			<p> Phone Number </p>
			<input type="Number" name="phone_number" placeholder="Phone Number" required="">
			<p> License Number </p>
			<input type="Number" name="license_number" placeholder="License Number" required="">
		<br>
		<input type="submit" name="" value="Sign me Up" >
     </div>
			
			
			
		</form>
	</div>
</body>
</html>