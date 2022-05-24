<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Route</title>
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
       <h2 class="label-col2">Add Route</h2><br>
       <hr>
       <br>
       <form  method="post"  action="" class="column-flex">
                    <div class="left-column">
                       
                         <label for="routename" class="label-col1">Route Name</label>
                         <input type="text" name="route_name" id="route_name">
                        <button class="btn label-col1">Submit</button>
                        <button class="btn" type="reset">Reset</button>
                    </div>

                   <div class="middle-column">
                        <label for="stationid" class="label-col1">Station Name</label>
                        <input type="text" name="sname" id="sname">
                        
                     <script>
                              function add_field()
                              {
                                  var total_text=document.getElementsByClassName("input_text");
                                  total_text=total_text.length+1;
                                  document.getElementById("field_div").innerHTML=document.getElementById("field_div").innerHTML+
                                  "<p id='input_text"+total_text+"_wrapper'><input type='text' class='input_text' id='input_text"+total_text+"'><input type='button' value='remove' onclick=remove_field('input_text"+total_text+"');></p>";
                              }
                              function remove_field(id)
                              {
                                document.getElementById(id+"_wrapper").innerHTML="";
                              }
                    </script>
                 
                        <div id="wrapper">
                          <div id="field_div">
                          <input type="button" value="Add TextBox" onclick="add_field();">
                          </div>
                          </div>
                </div>
                   
                    <div class="right-column">
                   
                   </select>
                    </div>
                </form>
                
            </div>
        </div>
</body>
</html>