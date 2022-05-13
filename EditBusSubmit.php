<?php
$busid = $_GET['rnum'];
$busnum = $_GET['bus_number'];
$chassisnum = $_GET['chassis_number'];
$enginenum = $_GET['engine_number'];
$capacity = $_GET['seating_capacity'];
$bcolor = $_GET['bus_color'];


include 'Connection.php';
if(isset($_GET['submit'])) {
$sql = "UPDATE bus SET registration_number='$busid' , bus_number='$busnum', chassis_number='$chassisnum', engine_number='$enginenum', seating_capacity='$capacity', bus_color='$bcolor 'WHERE registration_number='$busid'";
if($con->query($sql)==true) {
    echo "Data Updated Successfully!";
} else{
    echo $con->error;
}
} elseif(isset($_GET['delete'])){
    $sql = "DELETE FROM bus WHERE registration_number='$busid'";
    if($con->query($sql)==true) {
    echo "Data Deleted Successfully!";
}   else{
    echo $con->error;
}

}