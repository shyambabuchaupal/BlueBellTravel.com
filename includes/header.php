<!doctype html">
<html lang="en" style="
    overflow-x: hidden;>

<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESTINATIONS - BLUEBELL TRAVELS</title>
    <link href="./assets/images/Bluebellicon.png" rel="icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- bootstrap Icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/styles.css">

    <!-- Corinthia font  -->
    <link href="https://fonts.googleapis.com/css2?family=Corinthia&display=swap" rel="stylesheet">
    <!-- "Exo 2" font  -->
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
    <!-- Jura font -->
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@400;700&display=swap" rel="stylesheet">
      <!-- Swiper CSS -->
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
      <!-- Lato font  -->
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>

<body>
    <!-- Header Start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary custom-sticky-header">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="./assets/images/BlueBellLogo.png" alt="BlueBell Logo" class="img-fluid"
                    style="max-height: 50px;">
            </a>
            <!-- Toggle Button for Offcanvas Menu -->
            <button class="navbar-toggler  shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Links (Visible on Large Screens) -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Destination.php">Destination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="MahaKumbh2025.php">Maha Kumbh 2025</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Reviews.php">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="AboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="ContactUs.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header End -->

    <!-- Offcanvas Menu Start -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" id="offcanvasRightLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled">
                <li><a href="Destination.php" class="d-block py-2 active">Destination</a></li>
                <li><a href="MahaKumbh2025.php" class="d-block py-2 active">Maha Kumbh 2025</a></li>
                <li><a href="Reviews.php" class="d-block py-2 active">Reviews</a></li>
                <li><a href="AboutUs.php" class="d-block py-2 active">About Us</a></li>
                <li><a href="ContactUs.php" class="d-block py-2 active">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->