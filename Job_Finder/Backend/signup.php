<?php 






// Create connection
$link = mysqli_connect("localhost", "root", "", "jobfinder");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO jobseeker (first_name, last_name, email, password,cv,phone_number,gender )
VALUES ('$_POST[f_name]','$_POST[l_name]','$_POST[email]','$_POST[pass]','$_POST[phn_no]','$_POST[cv]','$_POST[gender]')";

if(mysqli_query($link, $sql)){
    header('Location: ' . '/job Finder/jobseeker login.php');
      die();
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
?>