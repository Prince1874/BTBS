<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="menu-bar">
      <h1 class="logo"><span>Bus Ticket Booking System</span></h1>
    </div>
    
<div><br><br><br>
  <form method="post" action="RegisterSubmit.php"> 
    <div class="login-container">
    <input type="text" id="uname" placeholder="Enter Username" name="uname" required>
  
    <input type="password" id="password" placeholder="Enter Password" name="password" required >
    
    <select name="type" id="type" class="radio-span" required >
      <option value="staff">Staff</option>
     
    </select>
    <button type="submit" class="btn label-col1">Register</button> <br><br><br><br>
    <h4> Alredy an user <a href="Login.php">click here </a> to Login</h4>
    </div>
    </form>
    </div> 
    </body>
</html>