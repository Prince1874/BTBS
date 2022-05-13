<?php

function fetch_state()
{
  
    include 'Connection.php';
    $sql = "SELECT state FROM state ORDER BY state ASC";
    $result = $con->query($sql);
    if($result->num_rows > 0) {

       while($row = $result->fetch_assoc()) {
         echo '<option value=" ' . $row['state'] . '">';     
        }
    
    }
}