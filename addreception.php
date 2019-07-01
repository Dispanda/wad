<?php
echo "<body background='images/terrace.jpg'></body>";
$mysqls = new mysqli("localhost", "root", "", "hotel");


$id=$_POST['id'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$CNIC=$_POST['CNIC'];
$gender=$_POST['gender'];
$address_id=$_POST['aid'];
$house=$_POST['house_num'];
$block=$_POST['block'];
$streetnum=$_POST['streetnum'];
$areaName=$_POST['areaName'];
$town=$_POST['town'];
$country=$_POST['country'];
$phno=$_POST['phno'];

$qur ="insert into addresses values ('$address_id','$house','$block','$streetnum','$areaName','$town','$country');";
$qur .="insert into staff values('$id','2','$name ','$gender','$CNIC','3','$phno');";
$qur .="insert into staff_addresses values('$id','$address_id');";
$qur .= "insert into login values ('$id','3','$pass')";

if (!$mysqls->multi_query($qur)) {
     echo "Multi query failed: (" . $mysqls->errno . ") " . $mysqls->error;
}else{
     
header("location:adminpannel.php");
}
$mysqls->close()

?>
