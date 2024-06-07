  <?php
  $title = "Booking";
  $favicon_url = "../../../../../Pinpark/public/assets/Images/Pinpark_logo.png";
  require_once "../../../../../Pinpark/public/view/users/include/header.php";
  ?>

  <div class="navbar">
    <div class="lugu">
      <a href="../../../../../Pinpark/public/view/users/users_public.php"><img src="../../../../../Pinpark/public/view/users/assests/img/logo.png" height="150%" width="50%"></a>
    </div>
    <div class="burger-icon" onmouseenter="toggleMenu()">&#9776;</div>
    <div class="sidemenu">
      <a href="../../../../../Pinpark/public/view/users/pages/Booking.php" class="right"><button>
          <h3>back</h3>
        </button></a>
      <img src="#" class="profile">
      <h2>Username</h2>
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

    function showDiv(divId) {
      // Hide all content divs
      var allDivs = document.querySelectorAll('.content');
      allDivs.forEach(function(div) {
        div.style.display = 'none';
      });

      // Show the selected div
      var selectedDiv = document.getElementById(divId);
      selectedDiv.style.display = 'block';
    }
  </script>

  <div class="form">
    <div class="button-container">
      <p>Booking history</p>
      <button class="button1" onclick="showDiv('div1')">ACTIVE</button>
      <button class="button2" onclick="showDiv('div2')">HISTORY</button>
    </div>

    <div id="div1" class="content">
      <div class="contents">
        <div class="title">Beautiful Park</div>
        <div class="specs">
          <p><strong>Location:</strong> City Park</p>
          <p><strong>Capacity:</strong> 500 people</p>
          <p><strong>Facilities:</strong> Playground, Picnic Area</p>
        </div>
        <div class="rating">
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9734;</span>
          <span>(4.0)</span>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="card">
    <div class="image"></div>
    <div class="contents">
      <div class="title">Beautiful Park</div>
      <div class="specs">
        <p><strong>Location:</strong> City Park</p>
        <p><strong>Capacity:</strong> 500 people</p>
        <p><strong>Facilities:</strong> Playground, Picnic Area</p>
      </div>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9734;</span>
        <span>(4.0)</span>
      </div>
    </div>
  </div>
  </div>
  </div>


  <div id="div2" class="content">
    <div class="card">
      <div class="image"></div>
      <div class="contents">
        <div class="title">Beautiful Park</div>
        <div class="specs">
          <p><strong>Location:</strong> City Park</p>
          <p><strong>Capacity:</strong> 500 people</p>
          <p><strong>Facilities:</strong> Playground, Picnic Area</p>
        </div>
        <div class="rating">
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9734;</span>
          <span>(4.0)</span>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="image"></div>
    <div class="contents">
      <div class="title">Beautiful Park</div>
      <div class="specs">
        <p><strong>Location:</strong> City Park</p>
        <p><strong>Capacity:</strong> 500 people</p>
        <p><strong>Facilities:</strong> Playground, Picnic Area</p>
      </div>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9734;</span>
        <span>(4.0)</span>
      </div>
    </div>
  </div>
  </div>

  <?php
  // include("../../../../../Pinpark/public/view/users/include/footer.php");
  require_once "../../../../../Pinpark/public/view/users/include/footer.php";
  ?>