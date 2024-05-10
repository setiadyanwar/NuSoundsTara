<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>NuSoundTara - Ticket HTML Form</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <link href="css/event.css" rel="stylesheet">
    <link href="css/nusoundtara.css" rel="stylesheet">
</head>
<body>
        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">Welcome to Music Festival 2023</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    NuSoundTara
                </a>

                <a href="ticket.php" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php#section_event">Event</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php#section_4">Schedule</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php#section_5">Pricing</a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Event</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Apartment</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Villa House</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Penthouse</a>
        </li>
      </ul>
      <div class="row properties-box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href="property-details.html"><img src="images/events/75k.png" alt=""></a>
            <span class="category">3 days close</span>
            <h6>Rp75.000</h6>
            <h4><a href="property-details.html">Pesta Retro Mahalini X Kerispati</a></h4>
            <ul>
            Pesta Retro Mahalini X Kerispati: Konser megah memadukan nuansa retro dengan irama modern, menghadirkan performa tak terlupakan. Nikmati pengalaman musik yang luar biasa dalam suasana pesta yang meriah dan berenergi.
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
          <div class="item">
            <a href="property-details.html"><img src="images/events/125k.png" alt=""></a>
            <span class="category">18 Agustus</span>
            <h6>Rp125.000</h6>
            <h4><a href="property-details.html">RI Fest 2024</a></h4>
            <ul>
            Gambir Expo Kemayoran, Jakarta Pusat. Festival musik RI Fest 2024 ini akan digelar selama tiga hari, mulai tanggal 16 hingga 18 Agustus 2024. RI Fest 2024 digelar dalam rangka menyambut semarak Hari Kemerdekaan atau HUT ke-79 RI.
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv rac">
          <div class="item">
            <a href="property-details.html"><img src="images/events/194.250.png" alt=""></a>
            <span class="category">3 Maret</span>
            <h6>Rp1.460.000</h6>
            <h4><a href="property-details.html">Rasoundfest by Tiket.com</a></h4>
            <ul>
            Rasoundfest oleh Tiket.com: Sebuah festival musik spektakuler dengan melibatkan artis-artis ternama, pengalaman yang mendalam, dan energi yang berkobar-kobar. Bergabunglah dengan kami untuk pertunjukan tak terlupakan dan perayaan musik dan budaya.
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
          <div class="item">
            <a href="property-details.html"><img src="images/events/262.395.png" alt=""></a>
            <span class="category">9 Desember</span>
            <h6>Rp584.500</h6>
            <h4><a href="property-details.html">Pulse World Festival</a></h4>
            <ul>
            Pulse World Festival: Festival dunia yang merayakan keragaman musik, seni, dan budaya. Bergabunglah dalam pengalaman penuh semangat dan inspirasi dari berbagai penampilan dan aktivitas kreatif yang menggetarkan jiwa.
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
          <div class="item">
            <a href="property-details.html"><img src="images/events/Rp1.380.000-Rp3.800.000.png" alt=""></a>
            <span class="category">8 Mei</span>
            <h6>Rp925.600</h6>
            <h4><a href="property-details.html">Born Pink Jakarta</a></h4>
            <ul>
            "Born Pink" adalah sebuah acara yang diadakan di Gelora Bung Karno, Jakarta, yang memperingati kekuatan dan semangat wanita. Acara ini menghadirkan serangkaian pertunjukan seni, pembicaraan inspiratif, dan aktivitas yang meriah untuk merayakan peran penting wanita dalam masyarakat.
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
          <div class="item">
            <a href="property-details.html"><img src="images/events/Start from 125k-150k.png" alt=""></a>
            <span class="category">12 Januari</span>
            <h6>Rp450.000</h6>
            <h4><a href="property-details.html">Vocanight</a></h4>
            <ul>
            VocaNight: Sebuah acara malam yang menampilkan beragam bakat vokal dari penyanyi-penyanyi terampil. Nikmati malam yang penuh dengan suara indah dan pertunjukan vokal yang menginspirasi dari berbagai genre musik.
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
          <div class="item">
            <a href="property-details.html"><img src="images/events/Rp900.000-Rp5.000.000.png" alt=""></a>
            <span class="category">16 April</span>
            <h6>Rp980.000</h6>
            <h4><a href="property-details.html">Ed Sheeren</a></h4>
            <ul>
            Konser dengan Ed Sheeran dan Calum Scott akan memukau dengan suara emosional dan lagu-lagu hits mereka, menciptakan pengalaman musik yang tak terlupakan untuk para penonton.
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
          <div class="item">
            <a href="property-details.html"><img src="images/events/Start from 125k-350k.png" alt=""></a>
            <span class="category">28 Juni</span>
            <h6>Rp1.520.000</h6>
            <h4><a href="property-details.html">Sunset di kebun</a></h4>
            <ul>
            Konser sunset di kebun menjanjikan pengalaman musik yang magis di bawah langit senja, ditemani dengan suasana alam yang menyejukkan dan nuansa romantis yang menggetarkan hati para penikmat musik.
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
          <div class="item">
            <a href="property-details.html"><img src="images/events/Rp800.000-Rp11.000.000.png" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>Rp3.145.000</h6>
            <h4><a href="property-details.html">Coldplay music of Spheres</a></h4>
            <ul>
            Konser "Coldplay: Music of the Spheres" akan menjadi pengalaman musik yang luar biasa dengan kombinasi lagu-lagu hits Coldplay yang penuh emosi dan efek visual yang spektakuler, menciptakan atmosfer magis yang tak terlupakan bagi para penggemar musik.
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">>></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

        <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-lg-0">NuSoundTara</h2>
                    </div>

                    <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                        <ul class="social-icon d-flex justify-content-lg-end">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-apple"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-youtube"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-pinterest"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 pb-2">
                    <h5 class="site-footer-title mb-3">Links</h5>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">About</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Artists</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Schedule</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Pricing</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Have a question?</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 090-080-0760" class="site-footer-link">
                            090-080-0760
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:hello@company.com" class="site-footer-link">
                            hello@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="site-footer-title mb-3">Location</h5>

                    <p class="text-white d-flex mt-3 mb-2">
                        Silang Junction South, Tagaytay, Cavite, Philippines</p>

                    <a class="link-fx-1 color-contrast-higher mt-3" href="#">
                        <span>Our Maps</span>
                        <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="16" cy="16" r="15.5"></circle>
                                <line x1="10" y1="18" x2="16" y2="12"></line>
                                <line x1="16" y1="12" x2="22" y2="18"></line>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mt-5">
                        <p class="copyright-text">Copyright © 2036 NuSoundTara Company</p>
                    </div>

                    <div class="col-lg-8 col-12 mt-lg-5">
                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Terms &amp; Conditions</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Privacy Policy</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Your Feedback</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/event.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/owl-carousel.js"></script>

</html>