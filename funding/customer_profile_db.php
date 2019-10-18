<?php

include 'config.php';

$Category = $_POST['category'];
$Name = $_POST['name'];
$Date = $_POST['date'];
$Month = $_POST['month'];
$Year = $_POST['year'];
$Gender = $_POST['gender'];
$Email = $_POST['email'];
$Mobile = $_POST['mob'];

#$select = "SELECT Email from customer_profile_details WHERE Email='$Email";
#mysqli_query($conn, $select);
#if(mysqli_affected_rows($conn)){
#    echo die("Email already exist");
#}

$insert = "INSERT INTO customer_profile_details values('$Category', '$Name', $Date, '$Month', $Year, '$Gender', '$Email', $Mobile)";
$result = mysqli_query($conn, $insert);
if($result){
    echo "Form is successfully submitted";
} else {
    echo(mysqli_error($conn));
}

?>

<?php
// required headers
header("Access-Control-Allow-Origin: http://localhost/rest-api-authentication-example/");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// database connection will be here