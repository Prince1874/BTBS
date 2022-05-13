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
    <li><a href="#">Bus-Staff<i class="fas fa-caret-down"></i></a>

<div class="dropdown-menu">
    <ul>
      <li><a href="Newstaff.php">New Staff</a></li>
      <li><a href="Editstaff.php">Edit Staff</a></li>
      <li><a href="#">Staff List</a></li>
      <li>
        
    </ul>
  </div>
</li>

<li><a href="#">Ticket<i class="fas fa-caret-down"></i></a>

<div class="dropdown-menu">
<ul>
<li><a href="BookTicket.php">Book Ticket</a></li>
<li><a href="#">Edit Ticket</a></li>
<li><a href="#">Ticket Reort</a></li>
<li>

</ul>
</div>
</li>

<li><a href="#">Bus<i class="fas fa-caret-down"></i></a>

<div class="dropdown-menu">
<ul>
<li><a href="NewBus.php">New Bus</a></li>
<li><a href="#">Edit Bus</a></li>
<li><a href="#">Bus List</a></li>
<li>

</ul>
</div>
</li>
  </div>
</li>
    <div class="main-content"> <br><br>
       <h2>Book Ticket</h2><br>
       <hr>
       <br>
       <form action="" class="column-flex">
                    <div class="right-column">
                    <table>
                        <?php 
                        $seatno = 0;
                        for ($i = 1; $i <= 10; $i++) {
                        ?> 
                          <tr>
                          <?php
                          for ($j = 1; $j <= 4; $j++)  {
                          $seatno++;
                          ?>
                             <td><button class="btn"  type="button" id="<?= $seatno ?>" name="<?= $seatno ?>"><?= $seatno ?></button></td>
                          <?php
                          }
                         ?>
                        </tr>
                     <?php
                      }
                     ?>
                   </table>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>