<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <title>NewCustomer</title>
</head>
<body>

<div class="menu-bar">
      <h1 class="logo"><span>Bus Ticket Booking System</span></h1>
      <ul>
        <li><a href="#">Customer<i class="fas fa-caret-down"></i></a>

   <div class="dropdown-menu">
    <ul>
      <li><a href="NewCustomer.php">New Customer</a></li>
      <li><a href="EditCustomer.php">Edit Customer</a></li>
      <li><a href="CustomerList.php">Customer List</a></li> 
    </ul>
    </div>
  </li>
   
<li><a href="#">Ticket<i class="fas fa-caret-down"></i></a>

<div class="dropdown-menu">
<ul>
<li><a href="BookTicket.php">Book Ticket</a></li>
<li><a href="EditTicket.php">Edit Ticket</a></li>
<li><a href="Ticketreport.php">Ticket Reort</a></li>
<li>

</ul>
</div>
</li>


  </div>
</li>
    <div class="main-content"> <br>
       <h2 class="label-col2">Customer List</h2><br>
       <hr>
       <br>
       <?php
        include 'Connection.php';
        $sql = "SELECT * FROM Customer";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            echo '<table class="list" border="1" width="100%">';
            echo "<tr>";
            echo "    <th>Customer Id </th>\t";
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
                echo '    <td> ' . $row["Customer_Id"] . '</td>';
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