<?php
// $host = 'evacuation.mysql.database.azure.com';
// $username = 'khanghuai';
// $password = '7z5x4c9v0B';
// $db_name = 'evacuation_fyp';

// $conn = new mysqli($servername, $username, $password, $dbname );

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootG2.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "evacuation.mysql.database.azure.com", "khanghuai", "7z5x4c9v0B", "evacuation_fyp", 3306, MYSQLI_CLIENT_SSL);



function getUsername($conn, $Uid){
  $sql = " SELECT Username FROM user WHERE UID = '$Uid' ";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      return $row["Username"];
  }
}
?>

