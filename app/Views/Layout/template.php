<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BAP | Berlian Amal Perkasa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-3 px-lg-5">
            <!-- <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>BAP</h2> -->
            <img src="img/BAP Logo Pendek.png" alt="" style="height: 50px; width: auto;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse col-lg-2 justify-content-between navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav align-item-evenly p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/news" class="nav-item nav-link">News</a>
                <a href="/katalog" class="nav-item nav-link">Equipment List</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="/about" class="dropdown-item">Company Overview</a>
                        <a href="/testimonial" class="dropdown-item">CEO Message</a>
                        <a href="/service" class="dropdown-item">Our Service</a>
                        <a href="/career" class="dropdown-item">Career</a>
                        <a href="/news" class="dropdown-item">News</a>
                        <!-- <a href="/404.html" class="dropdown-item">404 Page</a> -->
                    </div>
                </div>
                <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
            </div>
            <nav class="py-0 navbar bg-body-tertiary">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-5 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                   </form>
                   <div class="p-0 btn px-0">
                       <a href="/contact" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                   </div>
                </div>
            </nav>
        </div>
    </nav>
    <!-- Navbar End -->



    <?= $this->renderSection('content'); ?>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Head Office at Sovereign Plaza, 16th floor unit D-E, Jl. TB Simatupang Kav. 36, Cilandak, South Jakarta- 12430</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Machine Yard Jl. Raya Bojonegara RT 01/04 Desa Kedaleman, Kec. Cibeber, Kotamadya Cilegon, Banten</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(021) 29400320</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@bapconstruction.co.id</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Office Hour</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">08.00 AM - 16.00 PM</p>
                    <h6 class="text-light">Saturday :</h6>
                    <p class="mb-0">09.00 AM - 13.00 PM</p> 
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">Dry Rental</a>
                    <a class="btn btn-link" href="">Wet Rental</a>
                    <a class="btn btn-link" href="">Digital Timesheet</a>
                    <a class="btn btn-link" href="">Certified Operator</a>
                </div> -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Subscribe for information update.</p>
                    <div class="position-relative mx-auto mb-1" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                    <!-- <p>Privacy & Policy
                        <br>
                    </p> -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="">BAP Construction</a>, All Right Reserved 2023.

                        
                        Designed By <a class="border-bottom" href="">PT.Berlian Amal Perkasa</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <!-- <a href="">Home</a> -->
                            <a href="/policy">Privacy & Policy</a>
                            <!-- <a href="">Help</a> -->
                            <!-- <a href="">FQAs</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg rounded-pill btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

     <!-- Chatbox Start -->
    <!-- <div class="container-fluid chatbox">
        <input class="" type="checkbox" id="click">
          <label for="click">
          <i class="fa fa-comments"></i>
          <i class="fas fa-times"></i>
          </label>
          <div class="wrapper">
             <div class="fa fa-users d-flex head-text">
                Administrator -Online
             </div>
             <div class="col-12 col-sm-3 chat-box">
                <div class="desc-text">
                   Please fill out the form below to start chatting with the next available agent.
                </div>
                <form action="#">
                   <div class="col-12 col-sm-3 field">
                      <input type="text" placeholder="Your Name" required>
                   </div>
                   <div class="col-12 col-sm-3 field">
                      <input type="email" placeholder="Email Address" required>
                   </div>
                   <div class="col-12 col-sm-3 field textarea">
                      <textarea cols="30" rows="10" placeholder="Explain your queries.." required></textarea>
                   </div>
                   <div class="col-12 col-sm-3 field">
                      <button href="https://wa.me" type="submit">Start Chat</button>
                   </div>
                </form>
             </div>
          </div>
    </div> -->
    <!-- chatbox End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url() ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url() ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>js/main.js"></script>

    <!-- Charts Pluggin -->
    <script src="<?= base_url() ?>chart.js/Chart.min.js"></script>

    <!-- Chart Pie JS -->
    <script src="<?= base_url() ?>js/demo/chart-pie-demo.js"></script>
</body>

</html>