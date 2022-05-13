<?php
class Id
{
    static function generate_id()
    {
    include 'Connection.php';
    $sql = "SELECT Staff_Id FROM Bus_Staff ORDER BY Staff_Id DESC LIMIT 1";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $cid = $row['Staff_Id'];
        $cid = substr($cid, 2);
        $cid = $cid + 1;
        if($cid<10)
            $cid = "BS00$cid";
        elseif($cid<100)
            $cid = "BS0$cid";
        elseif($cid<1000)
            $cid = "BS$cid";
    } else { 
        $cid = 'BS001';
       }
      $con->close();
      return $cid;
}
}