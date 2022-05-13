<?php
/*$uname = $_POST['uname'];
$password = $_POST['password'];
$type = $_POST['type'];
require 'Connection.php';

$sql = "SELECT * FROM user WHERE uname = ? AND password = ? AND type = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("sss", $uname, $password, $type);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['uname'] = $row['uname'];
    if($row['type'] == "administator") {
        header("Location:Home.php");
    } elseif ($row['type'] == "staff") {
         header("Location:NewCustomer.php");
    } else 
        echo "Invalid Username/Password";
} else
    echo "Invalid Username/Password";
$stmt->close();
$con->close(); */


$uname = $_POST['uname'];
$password = $_POST['password'];
$type = $_POST['type'];
require 'Connection.php';

$sql = "SELECT * FROM user WHERE uname = ? AND password = ? AND type = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("sss", $uname, $password, $type);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['uname'] = $row['uname'];
    if($row['type'] == "administator") {
        header("Location:Dasboared.php");
    } elseif ($row['type'] == "staff") {
         header("Location:StaffPannel.php");
    } else 
        echo "Invalid Username/Password";
} else
    echo "Invalid Username/Password";
$stmt->close();
$con->close();



