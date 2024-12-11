<?php
define('ROOT_PATH', 'http://localhost/asw-digital/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php $title = isset($meta['title']) ? $meta['title'] : 'ASW Digital Marketing';
    echo $title; ?></title>
    <meta name="description" content="<?php
    $title = isset($meta['description']) ? $meta['description'] : 'ASW Digital Marketing';
    echo $meta['description']; ?>">
    <meta name="keywords" content="<?php
    $title = isset($meta['keywords']) ? $meta['keywords'] : 'ASW Digital Marketing';
    echo $meta['keywords']; ?>">

  <!-- favicon icon -->
  <link rel="shortcut icon" href="<?= ROOT_PATH ?>image/aswdm-circle-logo.png" />

  <!-- inject css start -->

  <!--== bootstrap -->
  <link href="<?= ROOT_PATH ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <!--== bootstrap-icons -->
  <link href="<?= ROOT_PATH ?>css/bootstrap-icons.css" rel="stylesheet" type="text/css" />

  <!--== animate -->
  <link href="<?= ROOT_PATH ?>css/animate.css" rel="stylesheet" type="text/css" />

  <!--== magnific-popup -->
  <link href="<?= ROOT_PATH ?>css/magnific-popup.css" rel="stylesheet" type="text/css" />

  <!--== swiper -->
  <link href="<?= ROOT_PATH ?>css/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

  <!--== odometer -->
  <link href="<?= ROOT_PATH ?>css/odometer.css" rel="stylesheet" type="text/css" />

  <!--== spacing -->
  <link href="<?= ROOT_PATH ?>css/spacing.css" rel="stylesheet" type="text/css" />

  <!--== seoland-icon -->
  <link href="<?= ROOT_PATH ?>css/asw-digital-icon.css" rel="stylesheet" type="text/css" />

  <!--== base -->
  <link href="<?= ROOT_PATH ?>css/base.css" rel="stylesheet" type="text/css" />

  <!--== shortcodes -->
  <link href="<?= ROOT_PATH ?>css/shortcodes.css" rel="stylesheet" type="text/css" />

  <!--== default-theme -->
  <link href="<?= ROOT_PATH ?>css/style.css" rel="stylesheet" type="text/css" />

  <!--== responsive -->
  <link href="<?= ROOT_PATH ?>css/responsive.css" rel="stylesheet" type="text/css" />

  <!--== color-customizer -->
  <link href="#" data-style="styles" rel="stylesheet">
  <link href="<?= ROOT_PATH ?>css/color-customize/color-customizer.css" rel="stylesheet" type="text/css" />

  <!-- inject css end -->
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9G1LSD9FJQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9G1LSD9FJQ');
</script>

</head>

<body>

  <!-- page wrapper start -->

  <div class="page-wrapper">

    <!-- preloader start -->

    <div id="ht-preloader">
      <div class="loader clear-loader">
        <img class="img-fluid" src="<?= ROOT_PATH ?>image/aswdm-circle-logo.png" alt="">
      </div>
    </div>

    <!-- preloader end -->


    <div id="particles-js"></div>

    <!--header start-->

    <header id="site-header" class="header">
      <div id="header-wrap">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <!-- Navbar -->
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand logo" href="<?= ROOT_PATH ?>index.php">
                  <img class="img-fluid" src="<?= ROOT_PATH ?>image/aswdm-circle-logo.png" alt=""> </a>
                <button class="navbar-toggler ht-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <svg width="100" height="500" viewBox="0 0 100 100">
                    <path class="line line1"
                      d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
                    </path>
                    <path class="line line2" d="M 20,50 H 80"></path>
                    <path class="line line3"
                      d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
                    </path>
                  </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <!-- Left nav -->
                  <ul class="nav navbar-nav mx-auto">
                    <!-- Home -->
                    <li class="nav-item ">
                      <a class="nav-link active " href="<?= ROOT_PATH ?>index.php">Home</a>

                    </li>
                    <li class="nav-item ">
                      <a class="nav-link " href="<?= ROOT_PATH ?>about-us.php">About Us</a>

                    <li class="nav-item ">
                      <a class="nav-link " href="<?= ROOT_PATH ?>services.php">Services</a>

                    </li>
                    <li class="nav-item ">
                      <a class="nav-link " href="<?= ROOT_PATH ?>portfolio.php">Portfolio</a>

                    </li>
                    <li class="nav-item ">
                      <a class="nav-link " href="https://aswdigitalmarketing.com/blog/">Blogs</a>

                    </li>
                    <li class="nav-item ">
                      <a class="nav-link " href="<?= ROOT_PATH ?>price-table.php">Packages </a>

                    </li>
                    <li class="nav-item ">
                      <a class="nav-link " href="<?= ROOT_PATH ?>contact.php">Contact</a>

                    </li>
                  </ul>
                </div>
                <div class="header-right d-flex align-items-center">
                  <a class="header-btn" href="<?= ROOT_PATH ?>contact.php">Let's Chat <i class="bi bi-arrow-right"></i>
                  </a>
                  <a href="#" class="ht-nav-toggle">
                    <i class="bi bi-grid-fill"></i>
                  </a>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>

    <nav id="ht-main-nav">
      <a href="#" class="ht-nav-toggle">
        <i class="bi bi-x-lg"></i>
      </a>
      <a class="navbar-brand logo" href="<?= ROOT_PATH ?>index.php">
        <img class="img-fluid" src="<?= ROOT_PATH ?>image/aswdm-circle-logo.png" alt="logo"> </a>
      <p class="mt-3">Our motto is to drive success through innovative digital solutions, combining technology and
        creativity to elevate your brand's online presence.</p>
      <div class="form-info">
        <h4 class="mb-4">Contact Info</h4>
        <div class="contact-link">
          <ul class="contact-info list-unstyled">
            <li>
              <i class="flaticon flaticon-gps-1"></i>
              <span>Address:</span>
              <p>G9 & G9A, Ground floor, Amrutha Ville, Raj Bhavan Rd, opposite Yashoda Hospital Road, Somajiguda,
                Hyderabad, Telangana 500082</p>
            </li>
            <li>
              <i class="flaticon flaticon-email"></i>
              <span>Email:</span>
              <a href="mailto:asdigitalmarketingpvtltd@gmail.com">asdigitalmarketingpvtltd@gmail.com</a>
            </li>
            <li>
              <i class="flaticon flaticon-mobile"></i>
              <span>Phone:</span>
              <a href="tel:+91 93902 29056">+91 93902 29056</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="social-icons mt-5">
        <ul class="list-inline">
        <li class="list-inline-item">
                <a href="https://wa.me/+919390229056" target="_blank" >
                  <i class="bi-whatsapp"></i>
                </a>

              </li>
          <li>
            <a href="#">
              <i class="flaticon-facebook-app-symbol"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="flaticon-twitter-2"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/p/DDZi5GszK7l/?igsh=MTY0dnJ2bWdqeXNrdg==">
              <i class="flaticon-instagram"></i>
            </a>
          </li>
          <li class="list-inline-item">
                <a href="https://www.youtube.com/@ASWDIGITALMARKETINGSERVICES" target="_blank">
                  <i class="bi-youtube"></i>
                </a>

              </li>
        </ul>
      </div>
    </nav>

    <!--header end-->