<?php
  $title = "Privacy and security";
  $favicon_url = "../assets/Images/Pinpark_logo.png";
  require_once "../includes/header.php";
?>

  <header id="lp_header" class="">
    <nav class="navbar bg-dark navbar-expand-lg px-lg-3 fixed-top">
      <div class="container-fluid">
        <a id="logo" class="navbar-brand me-auto" href="/../Pinpark">  
          <img class="w-100" src="../assets/Images/Pin_park_logo_name.png" alt="Pinpark-logo">
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div id="hdr-logo" class="offcanvas-header bg-dark">
            <img class="offcanvas-title text-white w-25" id="offcanvasNavbarLabel" src="../assets/Images/Pin_park_logo_name.png" alt="">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body bg-dark">
            <ul class="navbar-nav justify-content-center flex-grow-1">
              <li class="nav-item">
                <a class="nav-link active text-white mx-lg-2" aria-current="page" href="../landingPage/landingPage_about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white mx-lg-2" href="../landingPage/landingPage_howItWorks.php">How it works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white mx-lg-2" href="../landingPage/landingPage_features.php">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white mx-lg-2" href="../landingPage/landingPage_pricing.php">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white mx-lg-2" href="../landingPage/landingPage_contact.php">Contact</a>
              </li>
              <li class="nav-item dropdown text-white">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Support
                </a>
                <ul class="dropdown-menu text bg-dark">
                  <li>
                    <a class="dropdown-item text-white" href="../landingPage/landingPage_blog.php">Blog</a>
                  </li>
                  <li>
                    <a class="dropdown-item text-white" href="../landingPage/landingPage_fqas.php">FAQs</a>
                  </li>
                  <li>
                    <a class="dropdown-item text-white" href="../landingPage/landingPage_resources.php">Resouces</a>
                  </li>
                  <li>
                    <a class="dropdown-item text-white" href="../landingPage/landingPage_testimonials.php">Testimonial</a>
                  </li>
                  <li>
                    <a class="dropdown-item text-white" href="../landingPage/landingPage_privacyAndSecurity.php">Privacy & Security</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <a class="login-button btn btn-warning fw-medium mx-lg-3" type="button" href="/../Pinpark/public/view/login_page.php">Login</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </header>
  <main id="main_body">
    <section id="hero-section" class="d-flex justify-content-center align-items-center">
      <h1>Hello Privacy Policy and Security page</h1>
    </section>
  </main>
  <!-- <h1>Hello Security and testimonial's page</h1> -->

<?php 
  require_once "../includes/footer.php";  
?>