<?php


$sid = $_GET['Staff_Id'];
include 'Connection.php';
$sql = "SELECT * FROM Bus_Staff WHERE Staff_Id='$sid'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fname = $row['fname'];
    $mname = $row['mname'];
    $lname = $row['lname'];
    $gender = $row['gender'];
    $dob = $row['dob'];
    $village = $row['village'];
    $district = $row['district'];
    $state = $row['state'];
    $mobile = $row['mobileno'];
    $email = $row['email'];
 
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <title>Staff</title>
</head>
<body>

<div class="menu-bar">
      <h1 class="logo"><span>BTBS</span></h1>
      <ul>
       
    <li><a href="#">Bus-Staff<i class="fas fa-caret-down"></i></a>

<div class="dropdown-menu">
    <ul>
      <li><a href="Newstaff.php">New Staff</a></li>
      <li><a href="Editstaff.php">Edit Staff</a></li>
      <li><a href="StaffList.php">Staff List</a></li>
      <li>
        
    </ul>
  </div>
  <li><a href="#">Route<i class="fas fa-caret-down"></i></a>

<div class="dropdown-menu">
    <ul>
    
      <li><a href="AddRoute.php">Add Route</a></li>
      <li><a href="EditRoute.php">Edit Route</a></li>
      <li><a href="RouteDetails.php">Route Details</a></li>
      <li>
        
    </ul>
  </div>
</li>

<li><a href="#">Bus<i class="fas fa-caret-down"></i></a>

<div class="dropdown-menu">
<ul>
<li><a href="NewBus.php">New Bus</a></li>
<li><a href="EditBus.php">Edit Bus</a></li>
<li><a href="BusList.php">Bus List</a></li>
<li>

</ul>
</div>
</li>
  </div>
</li>
<div class="main-content"> <br><br>
       <h2 class="label-col2">Edit Staff</h2><br>
       <hr>
       <br>
       <form action="">
       <label for="staffid" class="label-col2">Staff Id</label> 
              <input type="search" name="Staff_Id" id="Staff_Id" value="<?= $sid ?>">
              <button>Search</button> <br><br><br><br>
        </form> 

       <form action="EditStaffSubmit.php" class="column-flex">
       <input type="hidden" name="sid" id="sid" value="<?= $sid?>">
                    <div class="left-column"> 
                        <label for="fname" class="label-col1">First Name</label>
                        <input type="text" name="fname" id="fname" value="<?= $fname ?>">
                        
                        <label for="gender" class="label-col1">Gender</label>
                        <span class="radio radio-span">
                     
                        <input type="radio" name="gender" id="gender" <?php if($gender == 'M') {echo 'checked';}?> value='M'>Male
                        <input type="radio" name="gender" id="gender" <?php if($gender == 'F') {echo 'checked';}?> value='F'>Female
                        </span>
                        
                        <label for="village" class="label-col1">Village</label>
                        <input type="text" id="village" name="village" value="<?= $village ?>">
                        
                        <label for="Ph" class="label-col1">Mobile Number</label>
                        <input type="text" name="mobileno" id="mobileno" value="<?= $mobile ?> ">
                        <button class="btn label-col1" name="submit">Edit</button>
                        <button class="btn" name="delete">Delete</button>
                    </div>

                   <div class="middle-column"> 
                       <label for="mnamane" class="label-col1">Middle Name</label>
                       <input type="text" id="miname" name="mname" value="<?= $mname ?>">
                       <label for="dob" class="label-col1">DOB</label>
                        <input type="date" name="dob" id="dob" class="radio-span"  value="<?= $dob ?>">
                         <label for="distric" class="label-col1">Distric</label>
                         <input type="text" id="district" name="district" value="<?= $district?>"> 
                         <label for="Mail" class="label-col1">Email</label>
                        <input type="text" name="email" id="email" value="<?= $email ?>">
                       
                   </div>

                    <div class="right-column">
                         <label for="lname" class="label-col1">Last Name</label>
                         <input type="text" id="lname" name="lname" value="<?= $lname ?>"><br> <br><br><br>
                         <label for="state" class="label-col1">State</label>
                         <input type="text" id="state" name="state" value="<?= $state ?>">
                       
                    </div>
</body>
</html>