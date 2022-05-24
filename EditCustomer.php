<?php

$cid = $_GET['Customer_Id'];
include 'Connection.php';
$sql = "SELECT * FROM Customer WHERE Customer_Id='$cid'";
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <title>Customer</title>
</head>

<body>

  <div class="menu-bar">
    <h1 class="logo"><span>BTBS</span></h1>
    <ul>
      <li><a href="#">Customer<i class="fas fa-caret-down"></i></a>

        <div class="dropdown-menu">
          <ul>
            <li><a href="NewCustomer.php">New Customer</a></li>
            <li><a href="EditCustomer.php">Edit Customer</a></li>
            <li><a href="CustomerList.php">Customer List</a></li>
            <li>

          </ul>
     

      <li><a href="#">Ticket<i class="fas fa-caret-down"></i></a>

        <div class="dropdown-menu">
          <ul>
            <li><a href="BookTicket.php">Book Ticket</a></li>
            <li><a href="EditTicket.php">Edit Ticket</a></li>
            <li><a href="TicketReport.php">Ticket Reort</a></li>
            <li>

          </ul>
        </div>
      </li>

     
  </div>
  </li>
  <div class="main-content"> <br><br>
    <h2 class="label-col2">Edit Customer</h2><br>
    <hr>
    <br>
    <form action="">
      <label for="customerid" class="label-col2">Customer Id</label>
      <input type="search" name="Customer_Id" id="Customer_Id" value="<?= $cid ?>">
      <button>Search</button>
    </form>
    <form action="EditCustomerSubmit.php" class="column-flex">
      <input type="hidden" name="cid" id="cid" value="<?= $cid ?>">
      <div class="left-column"> <br><br><br><br>
        <label for="name" class="label-col1">First Name</label>
        <input type="text" name="fname" id="fname" value="<?= $fname ?>"> 

        <label for="gender" class="label-col1">Gender</label>
        <span class="radio radio-span">
         <input type="radio" name="gender" id="gender" <?php if($gender == 'M') {echo 'checked';}?> value='M'>Male
        <input type="radio" name="gender" id="gender" <?php if($gender == 'F') {echo 'checked';}?> value='F'>Female 
         </span>
        
        <label for="village" class="label-col1">Village</label>
        <input type="text" id="village" name="village" value="<?= $village ?>">

        <label for="Ph" class="label-col1">Mobile Number</label>
        <input type="text" name="mobileno" id="mobileno" value="<?= $mobile ?>">
        <button class="btn label-col1" name="submit">Edit</button>
        <button class="btn" name="delete">Delete</button>

      </div>

      <div class="middle-column"> <br><br><br><br>
        <label for="mnamane" class="label-col1">Middle Name</label>
        <input type="text" id="mname" name="mname" value="<?= $mname ?>">
        <label for="dob" class="label-col1">DOB</label>
        <input type="date" name="dob" id="dob" class="radio-span" value="<?= $dob ?>">
        <label for="distric" class="label-col1">District</label>
        <input type="text" id="district" name="district" list="state" value="<?= $district ?>">
        <label for="Mail" class="label-col1">Email</label>
        <input type="text" name="email" id="email" value="<?= $email ?>">

      </div>

      <div class="right-column"> <br><br><br><br>
        <label for="lname" class="label-col1">Last Name</label>
        <input type="text" id="lname" name="lname" value="<?= $lname ?>"><br><br><br><br><br>
        <label for="State" class="label-col1">State</label>
        <input type="text" name="state" id="" list="state" value="<?= $state ?>">
        <datalist id="state">
          <?php
          include 'State.php';
          fetch_state();
          ?>
        </datalist>

      </div>

</body>

</html>