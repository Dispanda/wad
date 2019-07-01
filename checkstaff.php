<?php
$conn=mysql_connect("localhost","root");
if(!$conn)
{}
else
{}
$id=$_POST['idToSearch'];

mysql_select_db('hotel');
$sql = "SELECT job_type_code,job_type_name,s_id,s_name,gender,CNIC,manager_id,phone_number,address_id FROM staff natural join staff_job_type natural join staff_addresses where s_id='$id'";
   
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
else 
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo " Job type Code:{$row['job_type_code']}  <br> ".
         "Job type Name : {$row['job_type_name']} <br> ".
          "Staff ID : {$row['s_id']} <br> ".
          "Staff Name: {$row['s_name']} <br> ".
          "Gender : {$row['gender']} <br> ".
          "CNIC No: {$row['CNIC']} <br> ".
          "Manager ID : {$row['manager_id']} <br> ".
          "Phone Number: {$row['phone_number']} <br> ".
          "Address ID: {$row['address_id']} <br> ".
          "--------------------------------<br>";
   }       
   
?>
