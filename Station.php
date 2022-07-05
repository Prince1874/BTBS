<?php

function fetch_station()
{
  
    include 'Connection.php';
    $sql = "SELECT stationname FROM satationname ORDER BY station ASC";
    $result = $con->query($sql);
    if($result->num_rows > 0) {

       while($row = $result->fetch_assoc()) {
         echo '<option value=" ' . $row['stations'] . '">';     
        }
    
    }
  
}