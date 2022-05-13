<?php
include 'Id.php';
$sid =Id::generate_id();
//$cid = $_GET['customer_id'];
$fname = $_POST['fname'];
$mname =$_POST['mname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$village = $_POST['village'];
$district = $_POST['district'];
$state = $_POST['state'];
$mobile = $_POST['mobileno'];
$email = $_POST['email'];


include 'Connection.php';
$sql = "INSERT INTO Bus_Staff VALUES('$sid', '$fname', '$mname', '$lname', '$gender', '$dob', '$village', '$district', '$state', '$mobile', '$email')";
if($con->query($sql)==true) {
    echo "Data Inserted Successfully! ";
    echo "Customer Resistered Number is $sid"; 
} else {
    echo $con->error;
}    