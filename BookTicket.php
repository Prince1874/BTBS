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
    <title>Ticket</title>
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
       <h2 class="label-col2">Book Ticket</h2><br>
       <hr>
       <br>
       <form action="" class="column-flex">
                    <div class="middle-column">
                   <label for="from" class="label-col1">FROM</label>
                   <input type="text" name="from" id="" placeholder="Enter 3 letter Atleast" list="city" value="<?= $from ?>">
                   <datalist id="city">
                          <?php
                         include 'City.php';
                         fetch_city();
                        ?>
                     </datalist>
                       <label for="date" class="label-col1">Date</label>
                       <input type="date" name="date" id="date" class="radio-span"  value="<?= $date?>">

                    </div>
                     
                    <div class="right-column">
                   <label for="to" class="label-col1">TO</label>
                   <input type="text" name="to" id=""  placeholder="Enter 3 letter Atleast"  list="city" value="<?= $to ?>"> <br><br>
                 <button class=" sbtn label-col1" type="search"> Search Buses</button>

                  </div>
                </form>
            </div>
        </div>
</body>
</html>