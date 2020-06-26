
<?php
  require('../server.php');


// echo "Connection established";


if (isset($_POST['username']) and isset($_POST['userpassword'])){

			// Assigning POST values to variables.
           $username = $_POST['username'];
             $password = $_POST['userpassword'];
			// echo $username;
			// echo $password;
// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user_signup` WHERE username='$username' and userPassword='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
header('Location: ../complain/complain_form.php');

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
echo "IF you not signup please first sigup your record Thanks!!!!!!!!!!";
//echo "Invalid Login Credentials";
}
}

?>