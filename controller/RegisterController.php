<?php

include("connect.php");

function checkExist($conn, $Email){
    $sql = " SELECT Email FROM user WHERE Email = '$Email' ";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        return true;
    }
}

function insertUser($conn, $Email, $Username, $Password, $role){
    $sql = " INSERT INTO user (Username, Password, Email, Role) VALUES ('$Username', '$Password', '$Email','$role')  ";
    if (mysqli_query($conn, $sql)) {
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["Email"], $_POST["Username"], $_POST["Password"], $_POST["ConfirmPassword"])) {
        $Email= $_POST["Email"];
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];
        $ConfirmPassword = $_POST["ConfirmPassword"];
        $role = "USER";

        if(checkExist($conn, $Email)==true){
            if($Password == $ConfirmPassword){
                $Password = password_hash($Password,  PASSWORD_DEFAULT); 
                insertUser($conn, $Email, $Username, $Password, $role);
                header("Location: ../login.php");
                echo "
                    <script>
                        console.log('register success');
                    </script>
                ";
            }else{
                header("Location: ../register.php?error=Password do not match");
                echo "
                    <script>
                        console.log('password not match');
                    </script>
                ";
            }
            
        }else{
            header("Location: ../register.php?error=Email exist");
            echo "
                <script>
                    console.log('email exist');
                </script>
            ";
        }

        // $sql = " SELECT * FROM user WHERE Email = '$Email' ";
        // $result = $conn->query($sql);
        // if ($result->num_rows > 0) {
        //     while($row = $result->fetch_assoc()) {
        //         echo "
        //             <script>
        //                 console.log('" . $row["UID"]."');
        //             </script>
        //         ";
        //     }
        // }else{
        //     insertUser($conn, $Email, $Username, $Password, $role);
        // }
    }
}

