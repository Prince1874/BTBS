<?php

$source = $_POST['source'];
$dest = $_POST['destination'];
$route =$_POST['route_name'];
$station = $_POST['station'];

include 'Connection.php';
$sql = "INSERT INTO routes VALUES('$source', '$dest', '$route', '$station[1]')";
if($con->query($sql)==true) {
    echo "Route Added Succussfully! ";
    
} else {
    echo $con->error;
}    