<?php include "header.php";?>
<?php
$login = $_GET['login'];
?>

<div class="container-fluid  p-0">

    <div class="loginBackground h-100 w-100 position-fixed "></div>
    <div class="col-md-4 col-12 p-3 loginForm position-absolute top-50 start-50 translate-middle">
        <form method="POST" action="controller/LoginController.php" class="d-flex flex-column m-3 needs-validation" novalidate>
            <h2 class="text-white">LOGIN</h2>
            <div class="text-danger mb-1" id="eMessage"></div>
            <div class="mb-3">
                <input type="text" id="Email" name="Email" placeholder="Email" class="form-control" required>
                <div class="invalid-feedback">
                    Please fill out this field.
                </div>
            </div>

            <div class="mb-3">
                <input type="password" id="Password" name="Password" placeholder="Password" class="form-control" required>
                <div class="invalid-feedback">
                    Please fill out this field.
                </div>
            </div>
            
            
            <button type="submit"  class="btn btn-primary mb-3" name="submit" value="login">Login</button>

            <div class="d-flex justify-content-between">
              <a href="#" class="text-white">Forgot Password</a>
              <a href="register.php" class="text-white">Register</a>
            </div>
            
        </form>
        
    </div>

</div>
    




</body>
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

 var login = '<?=$login?>';
 if(login == 0){
    document.getElementById("eMessage").innerHTML= "Incorrect username or password!";
 }
 
 if(login == ""){
    document.getElementById("eMessage").innerHTML= "";
 }

 console.log (login);
</script>
</html>
