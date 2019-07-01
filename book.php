<?php
echo "<body background='images/terrace.jpg'></body>";
$mysqls = new mysqli("localhost", "root", "", "hotel");

if(!mysql)
{}
else
{}
$bid=$_POST['bookingId'];
$roomid=$_POST['roomid'];
$staffid=$_POST['staffid'];
$startdate=$_POST['startDate'];
$enddate=$_POST['EndDate'];
$charges=$_POST['charges'];

$qur ="insert into booking values ('$bid','$roomid','$staffid','$startdate','$enddate','$charges');";

if (!$mysqls->multi_query($qur)) {
     echo "Multi query failed: (" . $mysqls->errno . ") " . $mysqls->error;
}else{
     
header("location:adminpannel.php");
}
$mysqls->close()

?>