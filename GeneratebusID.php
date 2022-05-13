<?php
class Id
{
    static function generate_id()
    {
    include 'Connection.php';
    $sql = "SELECT registration_number FROM bus ORDER BY registration_number DESC LIMIT 1";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $busid = $row['registration_number'];
        $busid = substr($busid, 2);
        $busid = $busid + 1;
        if($busid<10)
            $busid = "BS00$busid";
        elseif($busid<100)
            $busid = "BS0$busid";
        elseif($busid<1000)
            $busid = "BS$busid";
    } else { 
        $busid = 'BS001';
       }
      $con->close();
      return $busid;
}
}