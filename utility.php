<?php
class Utility
{
    static function generate_id()
    {
    include 'Connection.php';
    $sql = "SELECT Customer_Id FROM Customer ORDER BY customer_Id DESC LIMIT 1";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $cid = $row['Customer_Id'];
        $cid = substr($cid, 2);
        $cid = $cid + 1;
        if($cid<10)
            $cid = "CS00$cid";
        elseif($cid<100)
            $cid = "CS0$cid";
        elseif($cid<1000)
            $cid = "CS$cid";
    } else { 
        $cid = 'CS001';
       }
      $con->close();
      return $cid;
}
}