<?php
  $title = "Sign Up";
  $favicon_url = "../assets/Images/Pinpark_logo.png";
  require_once "../includes/header.php";

  // require_once __DIR__ . "\\..\\..\\..\\Pinpark\\db\\connectToDatabase.php";
  include("../../db/connectToDatabase.php");  
  
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['FullnameSignup'];
    $email = $_POST['emailSignup'];
  }

?>

    <section id="login-pg" class="container-fluid bg-body-secondary vh-100 d-flex justify-content-center align-items-center">
      <div id="login-ctr" class="bg-transparent z-1 container-sm vh-100 d-flex align-items-center flex-column justify-content-center">
        <a id="login-logo" class="brand mb-2" href="/../Pinpark/">
          <img class="img-fluid" src="/../Pinpark/public/assets/Images/Pin_park_logo_name.png" alt="Pinpark-logo">
        </a>
        <div id="login-ctnt" class="mw-ms-50 rounded-4 p-4 mb-4">
          <div class="login-body d-flex flex-column">
            <form action="/../Pinpark/public/view/login_page.php" method="post" id="signupForm" class="login-form d-flex flex-column row-gap-3">
              <div class="inputBox">
                <input id="fullnameSignup" type="text" name="FullnameSignup" class="login-input" autocomplete="new-password" placeholder="Fullname" size="30" oninput="checkEmailLength(this)" />
              </div>
              <div class="inputBox">
                <input id="emailSignup" type="email" name="emailSignup" class="login-input" autocomplete="new-password" placeholder="Email address" size="30" oninput="checkEmailLength(this)" />
              </div>
              <div class="inputBox">
                <input id="usernameSignup" type="text" name="usernameSignup" class="login-input" autocomplete="new-password" placeholder="Username" size="30" oninput="checkEmailLength(this)" />
              </div>            
              <div class="inputBox">
                <input id="passSignup" type="password" name="passwordSignup" class="login-input" autocomplete="new-password" placeholder="Password" oninput="checkPassLength(this)" />
                <span class="eye bg-transparent" onclick="showPass()">
                  <i id="hide-1" class="fa-regular fa-eye"></i>
                  <i id="hide-2" class="fa-regular fa-eye-slash"></i>
                </span>
              </div>
              <div class="inputBox">
                <input id="repeatPassSignup" type="password" name="repeartPasswordSignup" class="login-input" autocomplete="new-password" placeholder="Repeat password" oninput="checkPassLength(this)" />
                <span class="eye bg-transparent" onclick="showRptPass()">
                  <i id="hide1" class="fa-regular fa-eye"></i>
                  <i id="hide2" class="fa-regular fa-eye-slash"></i>
                </span>
              </div>

              <span id="errorMssgSignUp" class="text-center text-danger">
                <!-- ERROR MESSAGE HERE -->
              </span>

              <div class="login-text d-flex flex-column">
                <!-- <div class="form-option text-center">
                  <p class="forgot mb-2">
                    <a href="/../Pinpark/public/view/forgot_page.php" class="text-decoration-none">
                      Forgot password?
                    </a>
                  </p>
                  <div id="errorElement" class="text-center mb-3 text-danger"></div>
                </div> -->
                <p class="login-mssg block text-center mb-4 text-secondary">
                  By signing up, you're agree to Pinpark's <br />
                  <a href="#" class="text-decoration-none pe-none">Terms of service</a> and <a href="/../Pinpark/public/landingPage/landingPage_privacyAndSecurity.php" class="text-decoration-none">Privacy policy</a>.
                </p>
              </div>
              <div class="sbmt d-flex flex-column row-gap-3 text-center">
                <a class="signup-btn text-decoration-none" href="./login_page.php">Already have an account?</a>
                <input class="login-btn fw-medium" type="submit" value="Sign up">
              </div>
            </form>
          </div>
        </div>
        <!-- <a href="/../Pinpark/" id="back-home" class="text-decoration-none text-warning">back to home</a> -->
      </div>

    </section>
    <script>
      function checkPassLength(input) {
        if (input.value.length > 25) {
          input.value = input.value.slice(0, 25);
        }
      }
      function checkEmailLength(input) {
        if (input.value.length > 40) {
          input.value = input.value.slice(0, 40);
        }
      }
    </script>
    <script defer src="/../Pinpark/public/assets/Js/signup.js"></script>
<?php 
  require_once "../includes/footer.php";  
?>