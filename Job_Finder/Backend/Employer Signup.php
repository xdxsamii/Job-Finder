<?php 






// Create connection
$link = mysqli_connect("localhost", "root", "", "jobfinder");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO employer(user_name, email, password, phone_number, license )
VALUES ('$_POST[user_name]','$_POST[email]','$_POST[pass]','$_POST[phone_number]','$_POST[license_number]')";

if(mysqli_query($link, $sql)){
    header('Location: ' . '/job Finder/employer login.php');
      die();
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
?>