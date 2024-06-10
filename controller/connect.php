<?php
$servername = "evacuation.mysql.database.azure.com";
$username = "evacuation";
$password = "7z5x4c9v0B";
$dbname = "evacuation_fyp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "
    <script>
        console.log('Database Connected successfully');
    </script>
";


function getUsername($conn, $Uid){
  $sql = " SELECT Username FROM user WHERE UID = '$Uid' ";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      return $row["Username"];
  }
}
?>

