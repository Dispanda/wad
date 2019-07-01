<?php
echo "<body background='images/terrace.jpg'></body>";
$mysqls = new mysqli("localhost", "root", "", "hotel");


$id=$_POST['room_id'];
$managerid=$_POST['manager_id'];
$roomid=$_POST['room_type_id'];
$price=$_POST['price'];

$qur ="insert into room values ('$id','$managerid','$roomid','$price')";

if (!$mysqls->multi_query($qur)) {
     echo "Multi query failed: (" . $mysqls->errno . ") " . $mysqls->error;
}else{
     
header("location:receptionistpannel.php");
}
$mysqls->close()

?>