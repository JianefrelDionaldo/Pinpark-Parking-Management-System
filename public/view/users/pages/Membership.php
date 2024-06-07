<?php
$title = "Membership";
$favicon_url = "../../../../../Pinpark/public/assets/Images/Pinpark_logo.png";
require_once "../../../../../Pinpark/public/view/users/include/header.php";
?>

<div class="navbar">
  <div class="lugu">
    <a href="../../../../../Pinpark/public/view/users/users_public.php"><img src="../../../../../Pinpark/public/view/users/assests/img/logo.png" height="150%" width="50%"></a>
  </div>
  <div class="burger-icon" onclick="toggleMenu()">&#9776;</div>
  <div class="sidemenu">
    <a href="../../../../../Pinpark/public/view/users/users_public.php" class="btn"><img src="../../../../../Pinpark/public/view/users/assests/img/x.png"></a>
    <a href="../../../../../Pinpark/public/view/users/pages/Myprofile.php">My Profile</a>
    <a href="../../../../../Pinpark/public/view/users/pages/Booking.php">Booking History</a>
    <a href="../../../../../Pinpark/public/view/users/pages/Wallet.php">Wallet</a>
    <a href="../../../../../Pinpark/public/view/users/pages/Membership.php">Membership</a>
  </div>
</div>


<script>
  function toggleMenu() {
    var sidemenu = document.querySelector('.sidemenu');
    sidemenu.style.display = (sidemenu.style.display === 'block') ? 'none' : 'block';
  }
</script>
<div class="form">
  <div class="banner">
    <div class="content">
      <h1 id="mem-heading">Pinpark Membership</h1>
      <p>Our parking facility boasts a convenient and secure space designed to cater to the diverse needs of our customers. With well-marked lanes and clearly designated areas, finding a spot is hassle-free. Our commitment to safety is reflected in well-lit surroundings and monitored CCTV cameras, ensuring a secure environment for your vehicle.</p>
      <div class="cards">
        <div class="card vip">
          <h2>VIP</h2>
          <ul>
            <li>30% off on all parking</li>
            <li>Exclusive perks</li>
            <li>Priority access</li>
          </ul>
          <a href="#" class="btn">Join Now</a>
        </div>

        <div class="card regular">
          <h2>Regular</h2>
          <ul>
            <li>Access to our Parking</li>
            <li>Free parking on your birthday</li>
            <li>Loyalty rewards</li>
          </ul>
          <a href="#" class="btn">Join Now</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
// include("../../../../../Pinpark/public/view/users/include/footer.php");
require_once "../../../../../Pinpark/public/view/users/include/footer.php";
?>