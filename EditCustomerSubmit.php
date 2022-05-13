<?php
$cid = $_GET['cid'];
$fname = $_GET['fname'];
$mname =$_GET['mname'];
$lname = $_GET['lname'];
$gender = $_GET['gender'];
$dob = $_GET['dob'];
$village = $_GET['village'];
$district = $_GET['district'];
$state = $_GET['state'];
$mobile = $_GET['mobileno'];
$email = $_GET['email'];

include 'Connection.php';
if(isset($_GET['submit'])) {
$sql = "UPDATE Customer SET Customer_Id='$cid' , fname='$fname', mname='$mname', lname='$lname', gender='$gender', dob='$dob', village='$village', district='$district', state='$state', mobileno='$mobile', email='$email'WHERE Customer_Id='$cid'";
if($con->query($sql)==true) {
    echo "Data Updated Successfully!";
} else{
    echo $con->error;
}
} elseif(isset($_GET['delete'])){
    $sql = "DELETE FROM Customer WHERE Customer_Id='$cid'";
    if($con->query($sql)==true) {
    echo "Data Deleted Successfully!";
}   else{
    echo $con->error;
}

}

