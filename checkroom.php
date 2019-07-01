<?php
$conn=mysql_connect("localhost","root");
if(!$conn)
{}
else
{}
$id=$_POST['idToSearch'];

mysql_select_db('hotel');
$sql = "SELECT room_id,manager_id,price,room_type_id FROM room natural join room_type where room_id='$id'";
   
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
else 
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo " Room Id :{$row['room_id']}  <br> ".
         "Manager ID : {$row['manager_id']} <br> ".
          "Price : {$row['price']} <br> ".
          "Room Type ID: {$row['room_type_id']} <br> ".
          "--------------------------------<br>";
   }       
   echo "Fetched data successfully\n";
   
?>