<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<style>
body{
    /* background: -webkit-linear-gradient(left, #3931af, #00c6ff); */
    
		background-color: #25274d;
}  
table th,td{
    border: 4px solid white;
    color: white;
    text-align: center;
}
</style>
<body>
<table id="tblData">
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "wafa_portal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 	



// Attempt select query execution
$sql = "SELECT * FROM complain_form";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        // echo "<table id="tblData">";
            echo "<tr>";

                echo "<th>id</th>";
                echo "<th>date_of_complain</th>";
                echo "<th>name</th>";
                echo "<th>email</th>";
                echo "<th>address</th>";
                echo "<th>phonenumber</th>";
                echo "<th>incident_date</th>";
                echo "<th>incident_details</th>";
                echo "<th>desired_outcomes</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['date_of_complain'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phonenumber'] . "</td>";
                echo "<td>" . $row['incident_date'] . "</td>";
                echo "<td>" . $row['incident_details'] . "</td>";
                echo "<td>" . $row['desired_outcomes'] . "</td>";
            echo "</tr>";
        }
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

    

</body>
</html>