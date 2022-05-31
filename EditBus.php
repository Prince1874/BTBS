<?php

$busid = $_GET['registration_number'];
include 'Connection.php';
$sql = "SELECT * FROM bus WHERE registration_number='$busid'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $busnum = $row['bus_number'];
  $chassisnum = $row['chassis_number'];
   $enginenum = $row['engine_number'];
   $capacity = $row['seating_capacity'];
   $bcolor = $row['bus_color'];

}
?>

<?php
     session_start();
     if(!isset($_SESSION['uname'])) 
     header("Location:Login.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Bus</title>
</head>
<body>

<div class="menu-bar">
      <h1 class="logo"><span>BTBS/span></h1>
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
</li>

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
       <h2 class="label-col2">Edit Bus</h2><br>
       <hr>
       <br>
       <form action="">
      <label for="busid" class="label-col2">Registration Number</label>
      <input type="search" name="registration_number" id="regisration_number" value="<?= $busid ?>">
      <button>Search</button> <br><br><br><br>
    </form>
       <form action="EditBusSubmit.php" class="column-flex">
       <input type="hidden" name="rnum" id="rnum" value="<?= $busid ?>">
                    <div class="left-column">
                        <label for="BusNumber" class="label-col1">Bus Number</label>
                        <input type="text" name="bus_number" id="bus_number" value="<?= $busnum?>">
                        <label for="capacity" class="label-col1">Seating Capacity</label>
                        <input type="text" id="seating_capacity" name="seating_capacity" value="<?= $capacity ?>"> 
                      
                         <button class="btn label-col1" name="submit">Edit</button>
                         <button class="btn" name="delete">Remove</button>

                    </div>

                   <div class="middle-column">
                    <label for="chassis" class="label-col1">Chassis Number</label>
                    <input type="text" id="chassis_number" name="chassis_number" value="<?= $chassisnum ?>">
                    <label for="color" class="label-col1">Bus Color</label>
                    <input type="text" id="bus_color" name="bus_color" value="<?= $bcolor ?>">
                   </div>

                    <div class="right-column">
                    <label for="engine" class="label-col1">Engine Number</label>
                    <input type="text" id="engine_number" name="engine_number" value="<?= $enginenum?>">
                    </div>
                </form>
            </div>
        </div>
</body>
</html>