<?php
function fetch_customer_count()
{
    $count = 0;
    require_once 'Connection.php';
    $sql = "SELECT COUNT(Customer_Id) FROM Customer";
    $result = $con->query($sql);
    if($result->num_rows>0)
    {
        $row = $result->fetch_array();
        $count = $row[0];
    }
    $con->close();
    return $count;
}

function fetch_staff_count()
{
    $count = 0;
    require_once 'Connection.php';
    $sql = "SELECT COUNT(Staff_Id) FROM Bus_Staff";
    $result = $con->query($sql);
    if($result->num_rows>0)
    {
        $row = $result->fetch_array();
        $count = $row[0];
    }
    $con->close();
    return $count;
}