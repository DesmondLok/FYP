<?php include "header.php"; ?>


<?php
$Did = $_GET['topic'];
$sql = " SELECT * FROM discussion WHERE DID = '$Did' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $discussion = $result->fetch_assoc();
}

if($_SESSION["Uid"] != ""){
    $Uid = $_SESSION["Uid"];
    $sql = " SELECT * FROM user WHERE UID = '$Uid' ";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $userRole = $row["Role"];
    }
}
?>

<div class="container p-0 pt-3">
    <!-- Main Discussion -->
    <div class="card container mb-3 p-3">
        <div class="d-flex flex-row justify-content-between">
            <div><?= $discussion["Title"]?></div>
            <div><?= $discussion["Date"]?></div>
        </div>
        <div>
            <?= $discussion["Description"]?>
        </div>
    </div>

    <hr class="my-4">

    <!-- Reply -->
    <?php
    $sql = "SELECT * FROM reply r, user u WHERE r.Uid = u.UID AND DID = '$Did' ORDER BY Date DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($row["Role"] == "USER"){
                $user = $row["Username"];
            }elseif ($row["Role"] == "ADMIN") {
                $user = "Admin";
            }
    ?>

    <div class="card container mb-3 p-3">
        <div class="d-flex flex-row justify-content-between align-items-center">
            <div><?= $row["Text"]?></div>
            <div class="d-flex flex-row align-items-center">
                <div>-<?= $user?>-</div>
                <?php
                    if($userRole == "ADMIN"){
                ?>
                    <form method="POST" action="controller/forumController.php" class="m-0">
                        <input type="hidden" id="Rid" name="Rid" value="<?=$row['Rid']?>">
                        <input type="hidden" id="Did" name="Did" value="<?=$Did?>">
                        <button type="submit" class="btn btn-danger ms-3" name="submit" value="deleteReply">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                        </button>
                    </form>
                <?php
                    }
                ?>
            </div>
            
            
        </div>
    </div>

    <?php
        }
    }else{
    ?>

    <div class="text-muted">There is no reply for this discussion currently.</div>

    <?php
    }
    ?>

    <hr class="mt-4">

    <!-- Reply Input-->
    <?php
        if($_SESSION["Uid"] != ""){
    ?>
    <form method="POST" action="controller/forumController.php" class="d-flex flex-column m-0 needs-validation" novalidate>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Write your reply here</label>
            <textarea class="form-control" id="reply" name="reply" rows="3"></textarea>
        </div>
        
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="submit" value="reply">Submit Reply</button>
            <?php
            if($userRole == "ADMIN"){
            ?>
            <button type="submit" class="btn btn-danger ms-3" name="submit" value="deletePost">Delete Post</button>
            <?php
            }
            ?>
            
        </div>

        <input type="hidden" id="Uid" name="Uid" value="<?=$_SESSION["Uid"]?>">
        <input type="hidden" id="Did" name="Did" value="<?=$Did?>">
    </form>
    <?php
        }
    ?>



    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    </svg>

    <div class="alert alert-success d-flex align-items-center alert-dismissible fade w-content position-absolute top-0 end-0" role="alert" id="alertDelete">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
        The reply has been successfully deleted.
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="alert alert-success d-flex align-items-center alert-dismissible fade w-content position-absolute top-0 end-0" role="alert" id="alertAdd">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
        The reply has been added.
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

</div>
</body>

<script>
    window.onload=function(){
        var alertDelete = "<?=$_GET['delete']?>";
        if (alertDelete =="1"){
            document.getElementById("alertDelete").classList.add("show");
        }
        var alertAdd = "<?=$_GET['reply']?>";
        if (alertAdd =="1"){
            document.getElementById("alertAdd").classList.add("show");
        }
    }
    
</script>


