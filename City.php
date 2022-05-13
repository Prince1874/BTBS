<?php

function fetch_city()
{
  
    include 'Connection.php';
    $sql = "SELECT city FROM city ORDER BY city ASC";
    $result = $con->query($sql);
    if($result->num_rows > 0) {

       while($row = $result->fetch_assoc()) {
         echo '<option value=" ' . $row['city'] . '">';     
        }
    
    }
  
}