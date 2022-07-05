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
    <title>Staff</title>
</head>
<body>

<div class="menu-bar">
      <h1 class="logo"><span>BTBS</span></h1>
      <ul>
      
    <li><a href="#">Bus-Staff<i class="fas fa-caret-down"></i></a>

<div class="dropdown-menu">
    <ul>
      <li><a href="Register.php">Register Staff</a></li>
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


<li><a href="#">Bus Schedule<i class="fas fa-caret-down"></i></a>

<div class="dropdown-menu">
    <ul>
      <li><a href="SetSchedule.php">Set Schedule</a></li>
      <li><a href="EditSchedule.php">Edit Schedule</a></li>
      <li><a href="ScheduleDetails.php">Schedule Details</a></li>
      <li>
        
    </ul>
  </div>
</li>

  </div>
</li>
    <div class="main-content"> <br><br>
       <h2 class="label-col2">Bus Staff</h2><br>
       <hr>
       <br>
       <form method="post"  action="NewStaffSubmit.php" class="column-flex">
       <div class="left-column">
        <label for="name" class="label-col1">First Name</label>
        <input type="text" name="fname" id="fname" required>
        <label for="Gender" class="label-col1">Gender</label>
        <span class="radio radio-span">
          <input type="radio" name="gender" id="gender" checked value="M">Male
          <input type="radio" name="gender" id="gender" value="F">Female
        </span>
        <label for="village" class="label-col1">Village</label>
        <input type="text" id="village" name="village">

        <label for="Ph" class="label-col1">Mobile Number</label>
        <input type="text" name="mobileno" id="mobileno">
        <button class="btn label-col1">Submit</button>
        <button class="btn" type="reset">Reset</button>
      </div>

      <div class="middle-column">
        <label for="mnamane" class="label-col1">Middle Name</label>
        <input type="text" id="mname" name="mname">
        <label for="dob" class="label-col1">DOB</label>
        <input type="date" name="dob" id="dob" class="radio-span">
        <label for="distric" class="label-col1">District</label>
        <input type="text" id="district" name="district">
        <label for="Mail" class="label-col1">Email</label>
        <input type="text" name="email" id="email">

      </div>

      <div class="right-column">
        <label for="lname" class="label-col1">Last Name</label>
        <input type="text" id="lname" name="lname"><br><br><br><br>
        <label for="State" class="label-col1">State</label>
        <input type="text" name="state" id="" list="state">
        <datalist id="state">
          <?php
          include 'State.php';
          fetch_state();
          ?>
        </datalist>


      </div>
                </form>
            </div>
        </div>

  

</body>
</html>