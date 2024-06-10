<?php include "header.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<div class="container-fluid p-0">

    <div class="w-100">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item col-6" role="presentation">
                <button class="nav-link w-100 active p-0 rounded-0" id="pills-FAQs-tab" data-bs-toggle="pill" data-bs-target="#pills-FAQs" type="button" role="tab" aria-controls="pills-FAQs" aria-selected="true">
                    <h1 class="p-3 mb-0">FAQs</h1>
                </button>
            </li>

            <li class="nav-item col-6" role="presentation">
                <button class="nav-link w-100 p-0 rounded-0" id="pills-forum-tab" data-bs-toggle="pill" data-bs-target="#pills-forum" type="button" role="tab" aria-controls="pills-forum" aria-selected="false">
                    <h1 class="p-3 mb-0">Forum</h1>
                </button>
            </li>
            
        </ul>

    </div>

    
    <div class="tab-content container-fluid mt-3" id="pills-tabContent">
        <!-- FAQs -->
        <div class="tab-pane fade show active" id="pills-FAQs" role="tabpanel" aria-labelledby="pills-FAQs-tab">
            <div >
                <div>Can't find the Question? Need help from our support? Contact Us <a href="#" data-bs-toggle="modal" data-bs-target="#inquirymodal">here</a>.</div>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            What is the forum?
                        </button>
                        </h2>
                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            This forum is an online community dedicated to discussing and improving emergency evacuation procedures. It provides a space where users can share insights, experiences, and suggestions to enhance safety measures during evacuations.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What is the purpose of the forum?
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            The forum serves as a platform for users to engage in discussions pertaining to emergency evacuation procedures. It facilitates the exchange of ideas and feedback aimed at enhancing evacuation protocols.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Who can use the forum?
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            The forum is open to all registered users. Whether you're a stakeholder in emergency management, a concerned citizen, or anyone interested in contributing to the discourse on evacuation procedures, you're welcome to join the discussion.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- FORUM -->
        <div class="tab-pane fade " id="pills-forum" role="tabpanel" aria-labelledby="pills-forum-tab">
        <?php
        if($_SESSION["Uid"] == ""){
        ?>
            <div class="row justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row justify-content-start">
                        <div class="col-sm-3 ">
                            <a role="button" href="login.php" class="btn btn-primary w-content p-2 w-100 mb-3" >Login</a>
                        </div>
                        <div class="col-sm-3 ">
                            <a role="button" href="register.php" class="btn btn-primary w-content p-2 w-100 mb-3" >Register</a>
                        </div>
                        
                        
                    </div>
                   
                </div>

                <div class="col-sm-3 mb-3">
                    <div class="input-group ">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                            </svg>
                        </span>
                        <input type="text" class="form-control" placeholder="Search"  aria-describedby="basic-addon1" id="myInput">
                    </div>
                </div>
            </div>
            
        <?php
        }else{
            $username = getUsername($conn, $_SESSION["Uid"]);
        ?>
            <div class="row justify-content-between mt-3">
                <div class="fs-3 fw-semibold col-sm-3 mb-3 text-sm-start" style="text-align:center"><?=$username;?></div>

                <div class="col">
                    <div class="row justify-content-end">
                        <!-- Button trigger modal -->
                        <div class="col-sm-3 mb-3">
                            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                New Discussion
                            </button>
                        </div>
                        
                        
                        <div class="col-sm-3 mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                    </svg>
                                </span>
                                <input type="text" class="form-control" placeholder="Search"  aria-describedby="basic-addon1" id="myInput">
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        <?php
        }
        ?>
         
         
            <div id="Topics">
        <?php
        $sql = " SELECT * FROM discussion ORDER BY Date DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>

            <a href="topic.php?topic=<?=$row["DID"]?>" class="link-underline link-underline-opacity-0">
                <div class="card container-fluid mb-3 p-3 cardForum">
                    <div class="d-flex flex-row justify-content-between">
                        <div><?= $row["Title"]?></div>
                        <div><?= $row["Date"]?></div>
                    </div>
                    <div>
                        <?= $row["Description"]?>
                    </div>
                </div>
            </a>

        <?php
            }
        }
        ?>

            </div>


        
        </div>

        
    </div>

    <!-- INQUIRY FORM Modal -->
    <div class="modal fade" id="inquirymodal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form method="POST" action="mailsender.php" class="d-flex flex-column m-3 needs-validation" novalidate>
                    <h2 class="text-center">Contact Us</h2>
                    <div class="mb-3">
                        <input type="text" id="Name" name="Name" class="form-control" placeholder="Name" required>
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="email" id="Email" name="Email" class="form-control" placeholder="Email" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="text" id="Subject" name="Subject" class="form-control" placeholder="Subject" required>
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>

                    <div class="">
                        <textarea type="text" id="Content" name="Content" placeholder="Description" class="form-control" required></textarea>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="submit" value="discussion">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>


                </form>
            </div>
        </div>
    </div>

    <!-- NEW DISCUSSION Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form method="POST" action="controller/forumController.php" class="d-flex flex-column m-3 needs-validation" novalidate>
                    <div class="modal-header">
                        <input type="text" id="Title" name="Title" placeholder="Topic" class="form-control" required>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <textarea type="text" id="Content" name="Content" placeholder="Description" class="form-control" required></textarea>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit" value="discussion">Post Discussion</button>
                    </div>

                    <input type="hidden" id="Uid" name="Uid" value="<?=$_SESSION["Uid"]?>">
                </form>
            </div>
        </div>
    </div>

    <!-- NOTIFICATION -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    </svg>

    <div class="alert alert-success d-flex align-items-center alert-dismissible fade w-content position-absolute top-0 end-0" role="alert" id="alertdeleteSuccess">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
        The discussion has been successfully deleted.
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="alert alert-success d-flex align-items-center alert-dismissible fade w-content position-absolute top-0 end-0" role="alert" id="alertpostSuccess">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
        The discussion has been successfully posted.
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>


</div>
</body>



<script>
    window.onload=function(){
        var deletenotification = "<?=$_GET['delete']?>";
        if (deletenotification =="1"){
            document.getElementById("alertdeleteSuccess").classList.add("show");
        }
        var postnotification = "<?=$_GET['postdiscussion']?>";
        if (postnotification =="1"){
            document.getElementById("alertpostSuccess").classList.add("show");
        }
        document.getElementById("navForum").classList.add("active");
        var user = "<?=$_SESSION["Uid"]?>";
        if(user != ""){
            document.getElementById("pills-forum").classList.add("active", "show");
            document.getElementById("pills-FAQs").classList.remove("active", "show");
            document.getElementById("pills-forum-tab").classList.add("active");
            document.getElementById("pills-FAQs-tab").classList.remove("active");
        }
    }
</script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#Topics *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
    (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

</html>    

<!-- // document.getElementById("pills-forum-tab").addEventListener("click", forumActive);
    // document.getElementById("pills-FAQs-tab").addEventListener("click", faqActive);

    // function forumActive(){ 
    //     document.getElementById("pills-FAQs-tab").classList.add("bg-body-secondary",);
    //     document.getElementById("pills-forum-tab").classList.remove("bg-body-secondary");
    //     document.getElementById("pills-forum-tab").classList.add("navlinkActive");
    //     document.getElementById("pills-FAQs-tab").classList.remove("navlinkActive");
    // }

    // function faqActive(){
    //     document.getElementById("pills-forum-tab").classList.add("bg-body-secondary");
    //     document.getElementById("pills-FAQs-tab").classList.remove("bg-body-secondary");
    //     document.getElementById("pills-forum-tab").classList.remove("navlinkActive");
    //     document.getElementById("pills-FAQs-tab").classList.add("navlinkActive");
    // } -->