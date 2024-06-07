<?php
$title = "Home";
$favicon_url = "./public/assets/Images/Pinpark_logo.png";
require_once "../Pinpark/public/includes/header.php";

include("../Pinpark/db/connectToDatabase.php");
?>

<header id="lp_header" class="header">
  <nav class="navbar bg-dark navbar-expand-lg px-lg-3 fixed-top">
    <div class="container-fluid">
      <a id="logo" class="navbar-brand me-auto" href="/../Pinpark/">
        <img class="w-100" src="./public/assets/Images/Pin_park_logo_name.png" alt="Pinpark-logo">
      </a>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div id="hdr-logo" class="offcanvas-header bg-dark">
          <img class="offcanvas-title text-white w-25" id="offcanvasNavbarLabel" src="./public/assets/Images/Pin_park_logo_name.png" alt="Pinpark">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-dark">
          <ul class="navbar-nav justify-content-center flex-grow-1">
            <li class="nav-item">
              <a class="nav-link text-white mx-lg-2" href="./public/landingPage/landingPage_about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-lg-2" href="./public/landingPage/landingPage_howItWorks.php">How it works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-lg-2" href="./public/landingPage/landingPage_features.php">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-lg-2" href="./public/landingPage/landingPage_pricing.php">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-lg-2" href="./public/landingPage/landingPage_contact.php">Contact</a>
            </li>
            <li class="nav-item dropdown text-white">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Support
              </a>
              <ul class="dropdown-menu text bg-dark">
                <li>
                  <a class="dropdown-item text-white" href="./public/landingPage/landingPage_blog.php">Blog</a>
                </li>
                <li>
                  <a class="dropdown-item text-white" href="./public/landingPage/landingPage_fqas.php">FAQs</a>
                </li>
                <li>
                  <a class="dropdown-item text-white" href="./public/landingPage/landingPage_resources.php">Resouces</a>
                </li>
                <li>
                  <a class="dropdown-item text-white" href="./public/landingPage/landingPage_testimonials.php">Testimonial</a>
                </li>
                <li>
                  <a class="dropdown-item text-white" href="./public/landingPage/landingPage_privacyAndSecurity.php">Privacy & Security</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <a class="login-button btn btn-warning fw-medium mx-lg-3" type="button" href="./public/view/login_page.php">Login</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
</header>
<main id="main_body">
  <!-- Hero Section -->
  <section id="hero-sec">
    <div class="container d-flex justify-content-start align-items-center text-white">
      <div class="hero-title">
        <h5 class="hero-sup-title h5 fw-semibold">Welcome to</h5>
        <img src="./public/assets/Images/Pin_park_name.png" class="img-fluid" width="350" alt="hero-heading-img">
        <p class="subtitle fs-5 mt-lg-3 text-start">
          Tired of circling the block endlessly to find a parking spot? <br>
          Pinpark revolutionizes the way you park with its intuitive <br>
          designed for hassle-free parking solutions.
        </p>
      </div>
    </div>
    <div class="book-now container-sm bg-black bg-opacity-50 text-white d-flex flex-column py-sm-3">
      <h3 class="text-center h3 text-uppercase mt-lg-3 fw-semibold">Book Now</h3>
      <div class="booking mt-sm-4">
        <form class="book-form d-flex alig-items-center justify-content-around" action="./db/local_parkingSys_db.php" method="post" id="booking-form">
          <div class="book-list d-flex flex-column">
            <label for="location" class="form-label text-capitalize fs-5 fw-medium mb-2">Your location:</label>
            <input class="book-input" type="text" id="location" name="location" minlength="5" maxlength="50" placeholder="BGC Taguig" spellcheck="true" autocomplete="off" required>
          </div>
          <div class="book-list">
            <label for="checkIn" class="text-capitalize fs-5 fw-medium mb-2">Check In:</label>
            <div class="check-in-out">
              <input class="book-input me-2" type="date" name="checkIn-date" id="checkIn" min="2024-01-01" max="2030-12-31" pattern="\d{4}-\d{2}-\d{2}" required>
              <input class="book-input" type="time" name="checkIn-time" id="checkIn" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]" required>
            </div>
          </div>
          <div class="book-list">
            <label for="checkOut" class="text-capitalize fs-5 fw-medium mb-2">Check Out:</label>
            <div class="check-in-out">
              <input class="book-input me-2" type="date" name="checkOut-date" id="checkOut" min="2024-01-01" max="2030-12-31" pattern="\d{4}-\d{2}-\d{2}" required>
              <input class="book-input" type="time" name="checkOut-time" id="checkOut" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]" required>
            </div>
          </div>
          <div class="book-list d-flex flex-column">
            <label for="book-submit" class="text-capitalize fs-5 fw-medium mb-2">Confirmation:</label>
            <input class="book-submit text-uppercase" type="submit" id="book-submit" name="book-submit" value="Book Now">
          </div>
        </form>
      </div>
    </div>
  </section>
  <section style="width: 100vw; height:100vh" class="header3 bg-body-secondary" id="content02-2d">
    <div class="row g-0 text-center">
      <div class="col-sm-6 col-md-6 vh-100 p-5">
        <div class="p-5 h-100">
          <img class="w-100 pt-4" src="../Pinpark/public/assets/Images/phoneabout.jpg" alt="About PinPark">
        </div>
      </div>
      <div class="col-6 col-md-6 vh-100 p-5">
        <div class="p-5 col-md-12 h-100">
          <div id="abtCnt" class="media-content pt-4">
            <h2 id="abtHdr" class="mbr-section-title align-left mbr-bold mbr-black pb-3 mbr-fonts-style display-2 fw-semibold text-start">About Pinpark</h2>
            <h3 class="fs-4 mbr-semibold align-left mbr-black mbr-light pb-3 mbr-fonts-style display-5 fw-medium text-start">Your Effortless Parking Solution</h3>
            <div class="mbr-section-text mbr-black pb-3 text-start">
              <p class="mbr-text align-left mbr-fonts-style display-7 fs-6">
                At PinPark, we take pride in delivering innovative solutions that simplify everyday tasks.
              </p>
              <p class="mbr-text align-left mbr-fonts-style display-7 fs-6">
                Our journey began with a vision to revolutionize the way people interact with technology, and our dedicated team of developers to brought this vision to life through the creation of an advanced parking system.
              </p>
              <p class="mbr-text align-left mbr-fonts-style display-7 fs-6">
                Parking System:
              </p>
              <p class="mbr-text align-left mbr-fonts-style display-7 fs-6">
                Our cutting-edge parking system, developed by the talented minds, is a testament to our commitment to user-friendly technology. The system has been meticulously designed to address the challenges of parking in today's fast-paced world. Whether you're a business owner looking to optimize parking for your customers or an individual seeking a hassle-free parking experience, our solution is tailored just for you.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section style="width: 100vw; height:100vh" class="text-start bg-dark-subtle">
    <div class="container overflow-hidden pt-3">
      <div class="pt-5">

        <div class="row gy-5 pt-5">
          <div class="row gy-5 text-center d-flex align-items-center justify-content-center">
            <div class="col-6">
              <div class="p-3 border bg-light text-start"><b>How Pin Park Works</b>

                Navigating through the complexities of parking has never been easier, thanks to the innovative design
                and functionality of our parking system. Here's a breakdown of how our system works. <br><br></div>
            </div>
            <div class="col-6">
              <div class="p-3 border bg-light text-start"><b> In essence,</b>

                Pinpark is combines with user-friendly features with cutting-edge technology to create a parking experience that's efficient, convenient, and tailored to your needs.
                Join us in embracing the future of parking, where every journey begins and ends with simplicity and ease.</div>
            </div>
            <div class="col-6">
              <div class="p-3 border bg-light text-start"><b>User Registration:</b>

                Start by creating a user account on our platform. The registration process is straightforward and requires minimal information.
                Enjoy the convenience of a personalized dashboard where you can manage your parking preferences.</div>
            </div>
            <div class="col-6">
              <div class="p-3 border bg-light text-start"><b>Find Available Spaces:</b>

                Upon logging in, users can access real-time information on available parking spaces in their desired location.
                <br><br><br>
              </div>
            </div>
            <div class="col-6">
              <div class="p-3 border bg-light text-start"><b>Reservation and Booking:</b>

                Reserve your parking spot with just a few clicks. Our system allows users to book parking spaces in advance, ensuring a stress-free arrival at their destination.
                <br><br>
              </div>
            </div>
            <div class="col-6">
              <div class="p-3 border bg-light text-start"><b>24/7 Customer Support:</b>

                Our customer support team is available around the clock to assist with any queries or concerns. Whether it's a technical issue or general assistance, we're here to help.
                <br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="d-flex justify-content-center align-items-center bg-body-secondary">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="public/assets/Images/1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="public/assets/Images/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="public/assets/Images/5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="public/assets/Images/4.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section style="width: 100vw; height:100vh" class="d-flex justify-content-center align-items-center bg-dark-subtle">
    <h1 class="text-center">Pricing Section</h1>

  </section>
  <section style="width: 100vw; height:100vh" class="d-flex justify-content-center align-items-center bg-body-secondary">
    <h1 class="text-center">Contact Section</h1>

  </section>
</main>

<footer style="width: 100vw; height:10vh" class="d-flex justify-content-center align-items-center bg-dark-subtle">
  <h1 class="text-center">Footer Area</h1>
</footer>

<?php
echo "<!-- <h1>Hello World!</h1> -->";
?>
<script>
  function checkMaxLength(input) {
    if (input.value.length > 10) {
      input.value = input.value.slice(0, 10);
    }
  }
</script>
<?php
require_once "./public/includes/footer.php";
?>