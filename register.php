<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Library CSS -->

        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    
    <title>Registration</title>

<!-- Internal Style Sheet -->

    <style>
      body {
        font-family: sen;
      }

      /* navbar login & register */

      hr {
        margin: 0;
        border: 1.25pt solid !important;
      }

      p {
        padding-left: 12px;
        margin-top: 4px;
      }

      /* form register*/

      .invalid-feedback {
        padding-left: 0.75rem;
      }    
    </style>
  </head>
  <body>
    <div class="content">

      <div class="container" style="padding-top: 100px">
        <div class="row justify-content-center pt-5"> 
          <div class="lebar-450">
            <nav class="navbar navbar-expand-sm navbar-light bg-putih" style="padding: 0px; font-size: 25pt; ">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100">
                  <li class="nav-item w-50">
                    <a class="nav-link" style="padding-left: 0" href="login.php">Login </a>
                  </li>

                  <li class="nav-item w-50">
                    <a style="color: black; font-weight: bold; padding-left: 0" class="nav-link" href="#">Register</a>
                    <hr>
                  </li>
                </ul>
              </div>
            </nav>

            <form action="sistem_login/register_user.php" method="POST" class="needs-validation" novalidate>
              <div class="form-group">
                <input type="text" name="email_user" class="iniemail form-control border-bawah" id="txtEmail" placeholder="Email" required>
                <div class="invalid-feedback">Required field</div>
                <span id="invemail"></span>
              </div>

              <div class="form-group">
                <input type="password" name="pass_user" class="form-control border-bawah" placeholder="Password" required>
                <div class="invalid-feedback">Required field</div>
              </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <input type="text" name="nd_user" class="form-control border-bawah" placeholder="Name" required>
                  <div class="invalid-feedback">Required field</div>
                </div>

                <div class="col-md-6 mb-3">
                  <input type="text" name="nb_user" class="form-control border-bawah" placeholder="Surname" required>
                  <div class="invalid-feedback">Required field</div>
                </div>
              </div>

              <div class="form-group">
                <input type="text" name="alamat" class="form-control border-bawah" placeholder="Address" required>
                <div class="invalid-feedback">Required field</div>
              </div>

              <div class="form-group">
                <input type="text" name="kodepos" class="form-control border-bawah" placeholder="Postcode" required>
                <div class="invalid-feedback">Required field</div>
              </div>

              <div class="form-group">
                <input type="text" name="phone" class="form-control border-bawah" placeholder="Phone" required>
                <div class="invalid-feedback">Required field</div>
              </div>

              <button type="submit" name="register" class="btn btn-dark w-100" style="font-size: 13pt" required>Register</button>
            </form>

            <div class="text-center">
              <small class="text-muted">Already have an account?</small>
              <button class="text-muted bold" style="text-transform: none; border: none; background-color: transparent; text-decoration: underline; font-size: 10pt; outline: none;" onclick="window.location.href='login.php'">Login</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <script>
      var navbar = document.querySelector('nav');
      var konten = $(".content");

      window.onscroll = function() {
        var height = konten.height();
        if (window.pageYOffset > height) {
          navbar.classList.add('scrolled');
          //konten.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
          //konten.classList.remove('scrolled');
        }
      };

      //Validasi Form
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          //validasi real-time
          var inputs = document.getElementsByClassName('form-control');
          var validation = Array.prototype.filter.call(inputs, function(input) {
            input.addEventListener('blur', function(event) {
              // reset
              input.classList.remove('is-invalid');
              input.classList.remove('is-valid');

              // cek validasi
              if (input.checkValidity() === false) {
                input.classList.add('is-invalid');
                
              }
              else {
                input.classList.add('is-valid');
              }
              
              input.classList.add('was-validated');
            }, false);
          });

          //validasi email
          var iniemail = document.getElementsByClassName('iniemail');
          var validation = Array.prototype.filter.call(iniemail, function(email) {
            email.addEventListener('blur', function(event){
              var mail = $('#txtEmail').val();
              var reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;  //pola email : xxxx@xxxx.xxx
              
              //cek validasi
              if(!reg.test(mail)){
                email.classList.add('wrong-email');
                $('#invemail').html("<p>Enter a valid email address</p>").css({"color": "#dc3545", "font-size": "8pt"});
              }
              else {
                email.classList.add('is-valid');
                email.classList.remove('wrong-email');
                $("p").remove();
              }
            }, false);
          });

          //validasi saat tombol submit diklik
          var forms = document.getElementsByClassName('needs-validation');
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              var mail = $('#txtEmail').val();
              var reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }

              if(!reg.test(mail)){
                event.preventDefault();
                event.stopPropagation();
              }
              
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>

