<?php
include 'GeneratebusID.php';
$busid =Id::generate_id();
$busnum = $_POST['bus_number'];
$chassisnum = $_POST['chassis_number'];
$enginenum = $_POST['engine_number'];
$capacity = $_POST['seating_capacity'];
$bcolor = $_POST['bus_color'];

include 'Connection.php';
$sql = "INSERT INTO bus VALUES('$busid', '$busnum', '$chassisnum', '$enginenum', '$capacity', '$bcolor')";
if($con->query($sql)==true) {
    echo "Bus Registration Successfully! ";
    echo "Bus Resistered Number is $busid"; 
} else {
    echo $con->error;
}    