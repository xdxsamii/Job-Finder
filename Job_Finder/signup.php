<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up Form</title>
	<link rel="stylesheet" href="assets/css/signup.css" type="text/css"> 
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>





<body background="assets\img\cox.jpg">
	<div class= "signupbox">
		
		<h2>Sign up Here</h2>
		<form action="Backend/signup.php" method="post">
			<p> First name </p>
			<input type="text" name="f_name" placeholder="first name">
	        <p> Last name </p>
			<input type="text" name="l_name" placeholder="last name">	       	
			<p> Your Email </p>
			<input type="text" name="email" placeholder="your email">			
			<p> Password </p>
			<input type="Password" name="pass" placeholder="Password">
			<p> Re Type Password </p>
			<input type="Password" name="repass" placeholder="Password">
			<p> Mobile Number </p>
			<input type="Number" name="phn_no" placeholder="Mobile Number">
			<div class="form-group">
				<br>
				<div class="form-group">
    <label >Resume</label>
    <input name="cv" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
  </div>
  <br>
		  <label for="sel1" name="gender">Gender</label>
		  <select name="gender" class="form-control" id="sel1">
		    <option name="" >Male</option>
		    <option name="">Female</option>
		  </select>

		</div>
		<br>
		<input type="submit" name="" value="Sign me Up" >
     </div>
			
			
			
		</form>
	</div>
</body>
</html>