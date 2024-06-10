<?php
// $servername = "evacuation.mysql.database.azure.com";
// $username = "khanghuai";
// $password = "7z5x4c9v0B";
// $dbname = "evacuation_fyp";

// // Create connection
// // $conn = new mysqli($servername, $username, $password, $dbname );

// $conn = mysqli_init();
// mysqli_real_connect($conn, "evacuation.mysql.database.azure.com", "khanghuai", "7z5x4c9v0B", "evacuation_fyp", 3306);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

$host = 'evacuation.mysql.database.azure.com';
$username = 'khanghuai';
$password = '7z5x4c9v0B';
$db_name = 'evacuation_fyp';

//Initializes MySQLi
$conn = mysqli_init();

// Establish the connection
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
  die('Failed to connect to MySQL: '.mysqli_connect_error());
}


function getUsername($conn, $Uid){
  $sql = " SELECT Username FROM user WHERE UID = '$Uid' ";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      return $row["Username"];
  }
}
?>

