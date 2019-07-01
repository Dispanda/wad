<?php 
define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'hotel');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if(!$conn)
{}
else
{}

$id=$_POST['Username'];
$pass=$_POST['Password'];


$sql = "SELECT * FROM login where s_id='$id' and pass='$pass' and job_type_code='2'";
  $result = mysqli_query($db,$sql);
      
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      if($count == 1) {
                 header("location: managerpannel.php");
      }
else 
    echo "error";
?>
