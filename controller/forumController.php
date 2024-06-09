<?php
include("connect.php");
session_start();

date_default_timezone_set("Asia/Kuala_Lumpur");
// $date =  date("Y-m-d");
// echo "
//     <script>
//         console.log('  Error: ".$date."  ');
//     </script>
// ";

// INSERT NEW DISCUSSION
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['submit'] == "discussion") {
    $title = $_POST["Title"];
    $content = $_POST["Content"];
    $date =  date("Y-m-d h:i:s");
    $Uid = $_POST["Uid"];

    $sql = " INSERT INTO discussion (Title, Description, Date, Uid) VALUES ('$title', '$content', '$date','$Uid')  ";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../forum.php?postdiscussion=1");
        echo "
            <script>
                console.log('New record created successfully');
            </script>
        ";
    } else {
        echo "
            <script>
                console.log('  Error: ".$sql." <br> ".mysqli_error($conn)." ');
            </script>
        ";
    }
}

// INSERT NEW REPLY
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['submit'] == "reply") {
    $text = $_POST["reply"];
    $date =  date("Y-m-d H:i:s");
    $Uid = $_POST["Uid"];
    $Did = $_POST["Did"];

    $sql = " INSERT INTO reply (Text, Date, Uid, Did) VALUES ('$text', '$date', '$Uid', '$Did')  ";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../topic.php?topic=".$Did."&reply=1");
        echo "
            <script>
                console.log('New record created successfully');
            </script>
        ";
    } else {
        echo "
            <script>
                console.log('  Error: ".$sql." <br> ".mysqli_error($conn)." ');
            </script>
        ";
    }
}

// DELETE DISCUSSION POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['submit'] == "deletePost") {
    $Did = $_POST["Did"];

    $sql = "SELECT * FROM reply WHERE Did = '$Did'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $sql2 = "DELETE d,r FROM discussion d JOIN reply r ON D.DID = r.Did WHERE D.DID = '$Did'";
    }
    if ($result->num_rows == 0){
        $sql2 = "DELETE FROM discussion WHERE DID = '$Did'";
    }

    if (mysqli_query($conn, $sql2)) {
        header("Location: ../forum.php?delete=1");
        echo "
            <script>
                console.log('discussion deleted');
                console.log(".$sql.");
            </script>
        ";
    } else {
        echo "
            <script>
                console.log('  Error: ".$sql." <br> ".mysqli_error($conn)." ');
            </script>
        ";
    }
}

// DELETE REPLY
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['submit'] == "deleteReply") {
    $Rid = $_POST["Rid"];
    $Did = $_POST["Did"];

    $sql = "DELETE FROM reply WHERE Rid = '$Rid'";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../topic.php?topic=".$Did."&delete=1");
        echo "
            <script>
                console.log('discussion deleted');
            </script>
        ";
    } else {
        echo "
            <script>
                console.log('  Error: ".$sql." <br> ".mysqli_error($conn)." ');
            </script>
        ";
    }
}