
<?php

$host="localhost";
$user="root";
$pass="";

mysql_connect("localhost", "root", "")or die("Cannot connect to SQL."); 
mysql_select_db('hotel');
$query=("SELECT * FROM Booking");
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$id=$row[0];

mysql_query("DELETE from booking WHERE b_id='$id'");

header("location:managerpannel.php");
?>