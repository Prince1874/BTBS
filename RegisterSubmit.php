<?php

$uname = $_POST['uname'];
$password=$_POST['password'];
$type = $_POST['type'];

include 'Connection.php';
$sql = "INSERT INTO user VALUES('$uname', '$password', '$type')";
if($con->query($sql)==true) {
    echo "User Resistered Successfully"; 
} else {
    echo $con->error;
}    
