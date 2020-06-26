<?php
// include("connection.php");
// require('../server.php');

// Escape user inputs for security
$con = mysqli_connect('localhost','root','','wafa_portal');


if(isset($_POST)){
  $date_of_complain=$_POST['date_of_complain'];
  $name=$_POST['username'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $phonenumber=$_POST['phone_number'];
  $incident_date=$_POST['incident_date'];
  $incident_details=$_POST['incident_details'];
  $desired_outcomes=$_POST['desired_outcomes'];
  $imageUpload=$_POST['image_Upload'];

    $sql = "INSERT INTO complain_form (`date_of_complain`,`name`, `email`, `address`, `phonenumber`, `incident_date`, `incident_details`, `desired_outcomes`, `imageUpload`)
    VALUES ('$date_of_complain', '$name', '$email', '$address','$phonenumber', '$incident_date', '$incident_details', '$desired_outcomes', '$imageUpload')";
    $query= mysqli_query($con, $sql);
    if($query){
        echo "Inserted";
    } else {
        echo $username;
    }
}



?>