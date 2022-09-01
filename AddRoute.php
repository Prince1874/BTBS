<?php
session_start();
if (!isset($_SESSION['uname']))
  header("Location:Login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <title>Route</title>
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
            <li><a href="NewBus.php">Add New Bus</a></li>
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

      <li><a href="#">Fare<i class="fas fa-caret-down"></i></a>

        <div class="dropdown-menu">
          <ul>
            <li><a href="#">Fix Fare</a></li>
            <li><a href="#">Change Fare</a></li>

            <li>

          </ul>
        </div>
      </li>


  </div>
  </li>




  <div class="main-content"> <br><br>
    <h2 class="label-col2">Add Route</h2><br>
    <hr>
    <br>
    <form method="post" action="AddRouteSubmit.php" class="column-flex">
      <div class="left-column">
        <label for="source" class="label-col1">Source</label>
        <input type="text" name="source" id="source">
        <button class="btn label-col1">Submit</button>
        <button class="btn" type="reset">Reset</button>
      </div>


      <div class="middle-column">
        <label for="destination" class="label-col1">Destination</label>
        <input type="text" name="destination" id="destination">
      </div>

      <div class="right-column" id="station-details">
        <label for="routename" class="label-col1">Route Name</label>
        <input type="text" name="route_name" id="route_name">
        <label for="">Select Station</label>
        <div>
          <input type="checkbox" id="muzaffarpur" name="station[]" value="muzaffarpur">
          <label for="muzaffarpur">Muzaffarpur</label>
        </div>
        <div>
          <input type="checkbox" id="patna" name="station[]" value="patna">
          <label for="patna">Patna</label>
        </div>
        <div>
          <input type="checkbox" id="hajipur" name="station[]" value="hajipur">
          <label for="hajipur">Hajipur</label>
        </div>
        <div>
          <input type="checkbox" id="motihari" name="station[]" value="motihari">
          <label for="motihari">Motihari</label>
        </div>

    </form>
    <script>
      let Chackbox = document.querySelector('#other');
      let text = document.querySelector('#otherValue');
      text.style.visibility = 'hidden';

      Chacbox.addEventListener('change', () => {
        if (Chacbox.checked) {
          text.style.visibility = 'visible';
          text.value = '';
        } else {
          text.style.visibility = 'hidden';
        }
      });
    </script>
</body>

</html>