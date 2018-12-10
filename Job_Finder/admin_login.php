

 <!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
</br>
  <h1><i>ADMIN LOG IN</i></h1>
  <div class= "loginbox">
      <form>
      <p> username </p>
      <input type="text" name="" placeholder="user name">
      <p> Password </p>
      <input type="Password" name="" placeholder="Your Password">
      <input type="submit" name="" value="Log In">
      <br> </br>
    </form>
  </div>
</body>
</html>


 <?php
session_start();

  if (isset($_POST['login']))
    {
      $username = mysqli_real_escape_string($con, $_POST['username']);
      $password = mysqli_real_escape_string($con, $_POST['password']);
      
      $query    = mysqli_query($con, "SELECT * FROM admin WHERE  password='$password' and username='$username'");
      $row    = mysqli_fetch_array($query);
      $num_row  = mysqli_num_rows($query);
      if($num_row == 1) {
        # code...
      
      $_SESSION['user_id']=$row['id'];
          header('location:/job Finder/admin_layout.php');
          }
          else {
         $error = "Your Login Name or Password is invalid";
      }
      