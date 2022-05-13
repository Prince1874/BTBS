<?php
$sid = $_GET['sid'];
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
$sql = "UPDATE Bus_Staff SET Staff_Id='$sid' , fname='$fname', mname='$mname', lname='$lname', gender='$gender', dob='$dob', village='$village', district='$district', state='$state', mobileno='$mobile', email='$email'WHERE Staff_Id='$sid'";
if($con->query($sql)==true) {
    echo "Data Updated Successfully!";
} else{
    echo $con->error;
}
}
elseif(isset($_GET['delete'])) {
    $sql = "DELETE FROM Bus_Staff WHERE Staff_Id='$sid'";
    if($con->query($sql)==true) {
    echo "Data Deleted Successfully!";
}   else{
    echo $con->error;
}

}