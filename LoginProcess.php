<?php

$uname = $_POST['uname'];
$password = $_POST['password'];
$type = $_POST['type'];
require 'Connection.php';

$sql = "SELECT * FROM user WHERE uname = ? AND password = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $uname, $password);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
   
    if($row['type'] == "administator") {
        session_start();
    $_SESSION['uname'] = $row['uname'];
        header("Location:Dasboared.php");
    } elseif ($row['type'] == "staff") {
        session_start();
    $_SESSION['uname'] = $row['uname'];
         header("Location:StaffPannel.php");
         session_start();
    $_SESSION['uname'] = $row['uname'];
    } else 
        echo "Invalid Username/Password";
} else
    echo "Invalid Username/Password";
$stmt->close();
$con->close();



