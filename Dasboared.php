<?php
session_start();
if (!isset($_SESSION['uname']))
  header("Location:Login.php");
?>



<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <title>Admin Dasboared</title>
</head>

<body>
  <div class="menu-bar">
    <h1 class="logo"><span>BTBS</span></h1>
    <ul>


      <li><a href="#">Staff<i class="fas fa-caret-down"></i></a>

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



      <ul>
        <li><a class="fa fa-user-circle" style='font-size:30px; color:white'><i class="fas fa-caret-down"></i></a>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li><a href="index.html">Logout</a></li>

            </ul>
        </li>
      </ul>
  </div>

  </div>

  <div>

    <?php
    require_once 'DashboardCommon.php';
    echo "Customers\n";
    echo fetch_customer_count();
    ?>
  </div>

  <div>

    <?php
    require_once 'DashboardCommon.php';
    echo "Staffs\n";
    echo fetch_staff_count();
    ?>
  </div>


  </div>

  </div>

</body>

</html>