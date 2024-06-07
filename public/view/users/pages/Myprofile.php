<?php
$title = "My Profile";
$favicon_url = "../../../../../Pinpark/public/assets/Images/Pinpark_logo.png";
// include_once("../../../../../Pinpark/public/view/users/include/header_user.php");
require_once "../../../../../Pinpark/public/view/users/include/header.php";
?>

<div class="navbar">
  <div class="lugu">
    <a href="/../Pinpark/public/view/users/users_public.php"><img src="/../Pinpark/public/view/users/assests/img/logo.png" height="150%" width="50%"></a>
  </div>
  <div class="burger-icon" onclick="toggleMenu()">&#9776;</div>
  <div class="sidemenu">
    <a href="/../Pinpark/public/view/users/users_public.php" class="btn"><img src="/../Pinpark/public/view/users/assests/img/x.png"></a>
    <a href="/../Pinpark/public/view/users/pages/Myprofile.php">My Profile</a>
    <a href="/../Pinpark/public/view/users/pages/Booking.php">Booking History</a>
    <a href="/../Pinpark/public/view/users/pages/Wallet.php">Wallet</a>
    <a href="/../Pinpark/public/view/users/pages/Membership.php">Membership</a>
  </div>
</div>

<script>
  function toggleMenu() {
    var sidemenu = document.querySelector('.sidemenu');
    sidemenu.style.display = (sidemenu.style.display === 'block') ? 'none' : 'block';
  }
</script>
<div class="main">
  <div class="form1">
    <h1>My Profile</h1>
    <ul>
      <li>Name: <strong>Jasmine Abo</strong></li>
      <li>Username: <strong>Jasmine_Abo123</strong></li>
      <li>Regular/VIP: <strong>Regular</strong></li>
    </ul>
  </div>

  <br>
  <hr>
  <br>
  <form>
    <h2>Profile Settings</h2>
    <table>
      <tr>
      </tr>
      </tr>
      <a href="#" class="right"><button>
          <h6>Edit</h6>
        </button></a>&nbsp;
      <a href="#" class="right"><button>
          <h6>Save</h6>
        </button></a>
      </tr>
    </table>
    <table class="table1">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="fname" placeholder="Your first name..">
      <br>
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lname" placeholder="Your last name..">
      <br>
      <label for="Vehicle">Phone Number</label>
      <input type="Vehicle" id="Vehicle" name="Vehicle" placeholder="Type of Vehicle..">
      </th>


      <th>
        <label for="address">Location</label>
        <input type="text" id="address" name="address" placeholder="Your address..">
        <br>
        <label for="phone">Change Password</label>
        <input type="text" id="phone" name="phone" placeholder="Your phone number..">
        <br>
        <label for="password">Vehicle Name</label>
        <input type="password" id="password" name="password" placeholder="Your new password..">
      </th>

      <th>
        <label for="address">Vehicle Name</label>
        <input type="text" id="address" name="address" placeholder="Your address..">
        <br>
        <label for="phone">Vehicle Type</label>
        <input type="text" id="phone" name="phone" placeholder="Your phone number..">
        <br>
        <label for="password">Vehicle Number</label>
        <input type="password" id="password" name="password" placeholder="Your new password..">
      </th>

      <td>
      </td>
      <br>
      <br>
    </table>
    <hr><br>
    <a href="#" class="right">
      <h6>Log Out</h6>
    </a>
  </form>
</div>

<?php
// include("../../../../../Pinpark/public/view/users/include/footer.php");
require_once "../../../../../Pinpark/public/view/users/include/footer.php";
?>