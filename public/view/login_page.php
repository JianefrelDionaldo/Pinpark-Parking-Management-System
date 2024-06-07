<?php
$title = "Login";
$favicon_url = "../assets/Images/Pinpark_logo.png";
require_once "../../../Pinpark/public/includes/header.php";

// Adjust the paths for connectToDatabase.php and local_parkingSysDb_table.php
require_once __DIR__ . "\\..\\..\\db\\connectToDatabase.php";

session_start();

$username = $password = ''; // Initialize variables
$error_message = ''; // Initialize error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate Login Authentication
    $sql = "SELECT * FROM login_tbl WHERE username='" . mysqli_real_escape_string($conn, $username) . "' AND password='" . mysqli_real_escape_string($conn, $password) . "'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if ($row["usertype"] == "user") {
            echo "user";
            $_SESSION["username"] = $username;
            header("location: /../../../../Pinpark/public/view/users/users_public.php");
            exit;
        } else if ($row["usertype"] == "admin") {
            echo "admin";
            $_SESSION["username"] = $username;
            header("location: /../../../../Pinpark/Admin/admin.php");
            exit;
        } else if ($row["usertype"] == "worker") {
            echo "worker";
            $_SESSION["username"] = $username;
            header("location: /../../../../Pinpark/public/view/employee/worker.php");
            exit;
        } else {
            $error_message = "username or password incorrect";
        }
    } else {
        $error_message = "username or password incorrect";
    }
}
?>

<!-- <head>
    <link rel="stylesheet" href="/../Pinpark/public/assets/Styles/css_logIn.css">
  </head> -->

<section id="login-pg" class="container-fluid bg-body-secondary vh-100 d-flex justify-content-center align-items-center">
  <div id="login-ctr" class="bg-transparent z-1 container-sm vh-100 d-flex align-items-center flex-column justify-content-center">
    <a id="login-logo" class="brand mb-4" href="/../Pinpark/">
      <img class="img-fluid" src="/../Pinpark/public/assets/Images/Pin_park_logo_name.png" alt="Pinpark-logo">
    </a>
    <div id="login-ctnt" class="mw-ms-50 rounded-4 p-4 mb-4">
      <div class="login-body d-flex flex-column">
        <form action="#" method="post" id="loginForm" class="login-form d-flex flex-column row-gap-3">
          <div class="inputBox">
            <input id="user-email" type="text" name="username" class="login-input" autocomplete="new-password" placeholder="Username or email address" size="30" oninput="checkEmailLength(this)" />
            <!-- <span id="email-label" class="label">Email</span> -->
            <!-- err-emaa -->
            <!-- <img src="../assets/Images/svg/bx-error-circle.svg" alt="err-icon"> -->
            <!-- <span id="errorEmail">please enter a valid email</span> -->
          </div>
          <div class="inputBox">
            <input id="user-pass" type="password" name="password" class="login-input" autocomplete="new-password" placeholder="Password" oninput="checkPassLength(this)" />
            <!-- <span class="label">Password</span> -->
            <span id="rpt-eye" class="eye bg-transparent" onclick="showPass()">
              <i id="hide-1" class="fa-regular fa-eye"></i>
              <i id="hide-2" class="fa-regular fa-eye-slash"></i>
            </span>
            <!-- <img src="../assets/Images/svg/bx-error-circle.svg" alt="err-icon"> -->
            <!-- <span id="errorPass">please enter atleast</span> -->
          </div>
          <div class="login-text d-flex flex-column">
            <div class="form-option text-center">
              <p class="forgot mb-2">
                <a href="/../Pinpark/public/view/forgot_page.php" class="text-decoration-none">
                  Forgot password?
                </a>
              </p>
              <div id="errorElement" class="text-center mb-3 text-danger"><?php echo $error_message; ?></div>
            </div>
            <p class="login-mssg block text-center text-secondary">
              By logging in, you're agree to Pinpark's <br />
              <a href="#" class="text-decoration-none pe-none">Terms of service</a> and <a href="/../Pinpark/public/landingPage/landingPage_privacyAndSecurity.php" class="text-decoration-none">Privacy policy</a>.
            </p>
          </div>
          <div class="sbmt d-flex flex-column row-gap-3 text-center">
            <a class="signup-btn text-decoration-none" href="./signUp_Page.php">Create an account</a>
            <input class="login-btn" type="submit" value="Login">
          </div>
        </form>
      </div>
    </div>
    <a href="/../Pinpark/" id="back-home" class="text-decoration-none text-warning">back to home</a>
  </div>

</section>
<!-- <footer class="mt-n5">hello</footer> -->
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
<script defer src="/../Pinpark/public/assets/Js/login.js"></script>

<?php
require_once "../includes/footer.php";
?>
