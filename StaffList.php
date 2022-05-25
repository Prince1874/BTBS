<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Staff-List</title>
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
    <div class="main-content"> <br>
       <h2 class="label-col2">Staff List</h2><br>
       <hr>
       <br>
       <?php
        include 'Connection.php';
        $sql = "SELECT * FROM Bus_Staff";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            echo '<table class="list" border="1" width="100%">';
            echo "<tr>";
            echo "    <th>Staff Id </th>\t";
            echo "    <th>First Name</th>";
            echo "    <th>Middle Name</th>";
            echo "    <th>Last Name</th>";
            echo "    <th>Gender</th>";
            echo "    <th>DOB</th>";
            echo "    <th>Village</th>";
            echo "    <th>District</th>";
            echo "    <th>State</th>";
            echo "    <th>Mobile Number</th>";
            echo "    <th>Email</th>";
          
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo '    <td> ' . $row["Staff_Id"] . '</td>';
                echo '    <td>' . $row["fname"] . '</td>';
                echo '    <td>' . $row["mname"] . '</td>';
                echo '    <td>' . $row["lname"] . '</td>';
                echo '    <td>' . $row["gender"] . '</td>';
                echo '    <td>' . $row["dob"] . '</td>';
                echo '    <td>' . $row["village"] . '</td>';
                echo '    <td>' . $row["district"] . '</td>';
                echo '    <td>' . $row["state"] . '</td>';
                echo '    <td>' . $row["mobileno"] . '</td>';
                echo '    <td>' . $row["email"] . '</td>';
              
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No data found";
        }
        $con->close();
        ?>
        </div>
</body>
</html>