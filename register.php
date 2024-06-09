<?php include "header.php";?>

<div class="container-fluid  p-0">
    <!-- BACKGROUND -->
    <div class="loginBackground h-100 w-100 position-fixed "></div>

    <!-- REGISTER FORM -->
    <div class="col-md-4 col-12 p-3 loginForm position-absolute top-50 start-50 translate-middle">
        <form method="POST" action="controller/RegisterController.php" class="d-flex flex-column m-3 needs-validation" novalidate>
            <h2 class="text-white">REGISTRATION</h2>
            <div class="mb-3">
                <input type="email" id="Email" name="Email" class="form-control" placeholder="Email" required>
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
            </div>
            
            <div class="mb-3">
                <input type="text" id="Username" name="Username" class="form-control" placeholder="Username" required>
                <div class="invalid-feedback">
                    Please fill out this field.
                </div>
            </div>

            <div class="mb-3">
                <input type="password" id="Password" name="Password" class="form-control"  placeholder="Password" required>
                <div class="invalid-feedback">
                    Please fill out this field.
                </div>
            </div>

            <div class="mb-3">
                <input type="password" id="ConfirmPassword" name="ConfirmPassword" class="form-control" placeholder="Confirm Password" required>
                <div class="invalid-feedback">
                    Please fill out this field.
                </div>
            </div>
            <button type="submit"  class="btn btn-primary mb-3">Register</button>

            <div class="text-white">Already registered?  <a href="login.php" class="text-white">Login</a></div>
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
</script>

</html>
