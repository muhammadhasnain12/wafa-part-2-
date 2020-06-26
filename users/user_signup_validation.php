<?php
// include("connection.php");
// require('../server.php');

// Escape user inputs for security
$con = mysqli_connect('localhost','root','','wafa_portal');


if(isset($_POST)){
  $name=$_POST['username'];
  $password=$_POST['password'];
  $phonenumber=$_POST['phonenumber'];
  $city=$_POST['city'];
    $sql = "INSERT INTO user_signup (`username`,`userpassword`, `phonenumber`, `city`)
    VALUES ('$name', '$password', '$phonenumber', '$city')";
    $query= mysqli_query($con, $sql);
    if($query){
        echo "You data is successfully submitted";
    } else {
        echo "Not inserted";
    }
}



?>