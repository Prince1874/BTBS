<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <title>BusList</title>
</head>
<body>

<div class="menu-bar">
      <h1 class="logo"><span>Bus Ticket Booking System</span></h1>
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

<li><a href="#">Ticket<i class="fas fa-caret-down"></i></a>

<div class="dropdown-menu">
<ul>
<li><a href="TicketReport.php">Ticket Reort</a></li>
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
       <h2 class="label-col2">Bus List</h2><br>
       <hr>
       <br>
       <?php
        include 'Connection.php';
        $sql = "SELECT * FROM bus";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            echo '<table class="list" border="1" width="100%">';
            echo "<tr>";
            echo "    <th>Registration Number </th>";
            echo "    <th>Chassis Number</th>";
            echo "    <th>Engine Number</th>";
            echo "    <th>Seating Capacity</th>";
            echo "    <th>Bus Color</th>";
          
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo '    <td> ' . $row["registration_number"] . '</td>';
                echo '    <td>' . $row["chassis_number"] . '</td>';
                echo '    <td>' . $row["engine_number"] . '</td>';
                echo '    <td>' . $row["seating_capacity"] . '</td>';
                echo '    <td>' . $row["bus_color"] . '</td>';
                
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