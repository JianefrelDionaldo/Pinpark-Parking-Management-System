<?php
$title = "Welcome";
// $favicon_url = "../public/assets/Images/Pinpark_logo.png";
$favicon_url = "../../../../Pinpark/public/assets/Images/Pinpark_logo.png";
// require_once "../public/includes/header.php";

// $style = "../../../../Pinpark/public/view/users/assests/css/Home.css";

// require_once "../Pinpark/public/view/users/include/header_user.php";
include_once("../../../../Pinpark/public/view/users/include/header.php");

session_start();
if (!isset($_SESSION["username"])) {
  header("location: ../../../login_page.php");
}
?>

<main class="background">

  <div class="navbar">
    <div class="lugu">
      <a href="/../Pinpark/public/view/users/users_public.php"><img src="/../Pinpark/public/view/users/assests/img/logo.png" height="150%" width="50%" /></a>
    </div>
    <div class="burger-icon" onclick="toggleMenu()">&#9776;</div>
    <div class="sidemenu">
      <a href="/../Pinpark/public/view/users/users_public.php" class="btn"><img src="/../Pinpark/public/view/users/assests/img/x.png" /></a>
      <a href="/../Pinpark/public/view/users/pages/Myprofile.php">My Profile</a>
      <a href="/../Pinpark/public/view/users/pages/Booking.php">Booking History</a>
      <a href="/../Pinpark/public/view/users/pages/Wallet.php">Wallet</a>
      <a href="/../Pinpark/public/view/users/pages/Membership.php">Membership</a>
    </div>
  </div>
  <script>
    function toggleMenu() {
      var sidemenu = document.querySelector(".sidemenu");
      sidemenu.style.display =
        sidemenu.style.display === "block" ? "none" : "block";
    }
  </script>

  <div class="container_right">
    <p>
      Navigating city parking has never been easier! With Pinpark, we bring
      you a seamless way to PIN your spot, BOOK in advance, and PARK
      stress-free.
    </p>
    <br />
    <p class="pin">
      <span style="color: #fca311">Pin</span>,<span style="color: #fca311">
        Book</span>, and<span style="color: #fca311"> Park </span>with
      <img src="/../Pinpark/public/assets/Images/Pin_park_name.png" class="w-50 h-25" />
    </p>
    <!-- <img src="/../Pinpark/public/assets/Images/Pin_park_name.png" class="w-50 h-25" /> -->
    <!-- add more paragraphs as needed -->
  </div>

  <div id="left-content" class="container">
    <form form id="bookingForm">
      <label for="location">Location</label>
      <input type="text" name="location" id="location" required class="w-50" /><br />

      <label for="start_date">Start Date:</label>
      <input type="date" id="start_date" name="start_date" required class="w-50" />

      <label for="end_date">End Date:</label>
      <input type="date" id="end_date" name="end_date" required class="w-50" />

      <label for="start_time">Start Time:</label>
      <input type="time" id="start_time" name="start_time" required class="w-50" />

      <label for="end_time">End Time:</label>
      <input type="time" id="end_time" name="end_time" required class="w-50" />
      <br />
      <br />
      <button type="submit">Book Now</button>
    </form>
  </div>
  <div id="logout" class="text-center w-100">
    <h1 class="bg-transparent">W . E . L . C . O . M . E</h1>
    <h2 class="text-white">User's Page</h2>
    <a href="/../Pinpark/public/view/login_page.php" class="text-white text-decoration-none">Logout</a>
    <hr class="mw-100 text-white h-4">
    <h5 class="text-warning"><?php echo $_SESSION["username"]; ?></h5>
  </div>


  <script>
    document
      .getElementById("bookingForm")
      .addEventListener("submit", function(event) {
        event.preventDefault();
        const formData = new FormData(event.target);
        const name = formData.get("name");
        const start_date = formData.get("start_date");
        const start_time = formData.get("start_time");
        const end_date = formData.get("end_date");
        const end_time = formData.get("end_time");
        const vehicle_number = formData.get("vehicle_number");
      });
  </script>

</main>


<?php
// require_once "../public/includes/footer.php";
include("../../../../Pinpark/public/view/users/include/footer.php");
?>