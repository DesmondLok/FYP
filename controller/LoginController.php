<?php
include("connect.php");
session_start();

function getUser($conn, $Email){
    $sql = " SELECT * FROM user WHERE Email = '$Email' ";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        return $user;
    }
}

// function getpassword($conn, $Username){
//     $sql = " SELECT Password FROM user WHERE Username = '$Username' ";
//     $result = $conn->query($sql);
//     if ($result->num_rows == 1) {
//         $user = $result->fetch_assoc();
//         return $user;
//     }
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["Email"], $_POST["Password"])) {
        // $Username = $_POST["Username"];
        // $Password = $_POST["Password"];

        $user = getUser($conn, $_POST["Email"]);
        $verify = password_verify($_POST["Password"], $user["Password"]); 

        if ($verify) {
            $_SESSION["Uid"] = $user["UID"];
            header("Location: ../forum.php");
            echo "
                <script>
                    console.log(' ".$_SESSION["Uid"]." ');
                </script>
            ";
        }else{
            header("Location: ../login.php?login=0");
            echo "
                <script>
                    console.log(' incorrect password ');
                </script>
            ";
        }
    }else{
        header("Location: ../login.php");
    }
}

