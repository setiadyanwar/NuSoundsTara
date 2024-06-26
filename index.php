
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">


    <title>NuSoundTara</title>

    <title>NuSoundsTara</title>


    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/nusoundtara.css" rel="stylesheet">

    <!--



-->
</head>

<body>

    <main>

    <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">Welcome to NuSoundTara 2024</strong>
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
                            <a class="nav-link" href="event.php">Event</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Schedule</a>
                        </li>
                        
                        <!-- <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Pricing</a>
                        </li> -->

                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>

                    <a href="ticket.php" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>
                </div>
            </div>
    </nav>
        


    <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5 text-center">
                        <small>We are Presents</small>
                        <small>NuSoundsTara</small>
                        <h1 class="text-white mb-5">NuSoundTara 2024</h1>
                        <a class="btn custom-btn btn-lg" href="event.php">Let's begin</a>
                    </div>

                    <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                        <div class="date-wrap">
                            <h5 class="text-white">
                                <i class="custom-icon bi-clock me-2"></i>
                                18 - 20<sup>th</sup>, March 2024
                            </h5>
                        </div>

                        <div class="location-wrap mx-auto py-3 py-lg-0">
                            <h5 class="text-white">
                                <i class="custom-icon bi-geo-alt me-2"></i>
                                Sekolah Vokasi IPB, Bogor Indonesia
                            </h5>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon d-flex align-items-center justify-content-center">
                                <span class="text-white me-3">Share:</span>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-facebook"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-twitter"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="video/pexels-2022395.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
    </section>

    <section class="topics-section section-padding pb-0" id="section_event">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h2 class=" mb-4 text-center section-title">Event Up Coming</h2>
                </div>
            </div>
            <div class="row" id="event-list">
                <!-- Event items will be injected here by JavaScript -->
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        fetch('fetch_events.php')
            .then(response => response.json())
            .then(data => {
                const eventList = document.getElementById('event-list');
                data.forEach(event => {
                    const eventItem = document.createElement('div');
                    eventItem.classList.add('col-lg-3', 'col-md-6', 'col-12', 'mb-4', 'mb-lg-0');
                    eventItem.innerHTML = `
                        <div class="custom-block custom-block-overlay">
                            <a href="detail-page.html" class="custom-block-image-wrap">
                                <img src="${event.image}" class="custom-block-image img-fluid" alt="">
                            </a>
                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="listing-page.html">
                                        ${event.title}
                                    </a>
                                </h5>
                                <p class="fw-normal mb-0">${event.description}</p>
                            </div>
                        </div>
                    `;
                    eventList.appendChild(eventItem);
                });
            });
    });
</script>


<!--     <section class="topics-section section-padding pb-0" id="section_event">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h2 class=" mb-4 text-center section-title">Event Up Coming</h2>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-12 col-12">
                    
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="detail-page.html" class="custom-block-image-wrap">
                                <img src="images/events/Rp800.000-Rp11.000.000.png"
                                    class="custom-block-image img-fluid" alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="listing-page.html">
                                        ColdPlay music
                                    </a>
                                </h5>
                                <p class=" fw-normal mb-0">Rp800.000 - Rp11M</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="detail-page.html" class="custom-block-image-wrap">
                                <img src="images/events/Rp900.000-Rp5.000.000.png"
                                    class="custom-block-image img-fluid" alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="listing-page.html">
                                        Ed sheeran
                                    </a>
                                </h5>

                                <p class="fw-normal mb-0">Rp900.000 - Rp5M</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="detail-page.html" class="custom-block-image-wrap">
                                <img src="images/events/Start from 125k-150k.png"
                                    class="custom-block-image img-fluid" alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="listing-page.html">
                                        VocaNight
                                    </a>
                                </h5>

                                <p class="fw-normal mb-0">Rp125k-Rp150k</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="detail-page.html" class="custom-block-image-wrap">
                                <img src="images/events/Rp1.380.000-Rp3.800.000.png"
                                    class="custom-block-image img-fluid" alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="listing-page.html">
                                        Born Pink
                                    </a>
                                </h5>

                                <p class="fw-normal mb-0">Rp1.380K - Rp3.800K</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </section> -->

    <section class="artists-section section-padding" id="section_3">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">Popular Artist</h1>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="images/artists/isyana.jpg"
                                    class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">
                                <p>
                                    <strong>Name: </strong>
                                    Isyana Saraswati
                                </p>

                                <p>
                                    <strong>Birthdate:</strong>
                                    August 16, 1958
                                </p>

                                <p>
                                    <strong>Music:</strong>
                                    Pop, R&amp;B
                                </p>

                                <hr>

                                <p class="mb-0">
                                    <strong>Youtube Channel:</strong>
                                    <a href="#">Madona Official</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="images/artists/abstral-official-bdlMO9z5yco-unsplash.jpg"
                                    class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">
                                <p>
                                    <strong>Name:</strong>
                                    Rihana
                                </p>

                                <p>
                                    <strong>Birthdate:</strong>
                                    Feb 20, 1988
                                </p>

                                <p>
                                    <strong>Music:</strong>
                                    Country
                                </p>

                                <hr>

                                <p class="mb-0">
                                    <strong>Youtube Channel:</strong>
                                    <a href="#">Rihana Official</a>
                                </p>
                            </div>
                        </div>

                        <div class="artists-thumb">
                            <img src="images/artists/soundtrap-rAT6FJ6wltE-unsplash.jpg"
                                class="artists-image img-fluid">

                            <div class="artists-hover">
                                <p>
                                    <strong>Name:</strong>
                                    Bruno Bros
                                </p>

                                <p>
                                    <strong>Birthdate:</strong>
                                    October 8, 1985
                                </p>

                                <p>
                                    <strong>Music:</strong>
                                    Pop
                                </p>

                                <hr>

                                <p class="mb-0">
                                    <strong>Youtube Channel:</strong>
                                    <a href="#">Bruno Official</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="schedule-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">Event Schedule</h1>

                            <div class="table-responsive">
                                <table class="schedule-table table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>

                                            <th scope="col">Wednesday</th>

                                            <th scope="col">Thursday</th>

                                            <th scope="col">Friday</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th scope="row">Day 1</th>

                                            <td class="table-background-image-wrap pop-background-image">
                                                <h3>Pop Night</h3>

                                                <p class="mb-2">5:00 - 7:00 PM</p>

                                                <p>By Adele</p>

                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #F3DCD4"></td>

                                            <td class="table-background-image-wrap rock-background-image">
                                                <h3>Rock & Roll</h3>

                                                <p class="mb-2">7:00 - 11:00 PM</p>

                                                <p>By Rihana</p>

                                                <div class="section-overlay"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Day 2</th>

                                            <td style="background-color: #ECC9C7"></td>

                                            <td>
                                                <h3>DJ Night</h3>

                                                <p class="mb-2">6:30 - 9:30 PM</p>

                                                <p>By Rihana</p>
                                            </td>

                                            <td style="background-color: #D9E3DA"></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Day 3</th>

                                            <td class="table-background-image-wrap country-background-image">
                                                <h3>Country Music</h3>

                                                <p class="mb-2">4:30 - 7:30 PM</p>

                                                <p>By Rihana</p>

                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #D1CFC0"></td>

                                            <td>
                                                <h3>Free Styles</h3>

                                                <p class="mb-2">6:00 - 10:00 PM</p>

                                                <p>By Members</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="pricing-section section-padding section-bg" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">Plans, you' love</h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="pricing-thumb">
                            <div class="d-flex">
                                <div>
                                    <h3><small>Early Bird</small> $120</h3>

                                    <p>Including good things:</p>
                                </div>

                                <p class="pricing-tag ms-auto">Save up to <span>50%</span></h2>
                            </div>

                            <ul class="pricing-list mt-3">
                                <li class="pricing-list-item">platform for potential customers</li>

                                <li class="pricing-list-item">digital experience</li>

                                <li class="pricing-list-item">high-quality sound</li>

                                <li class="pricing-list-item">standard content</li>
                            </ul>

                            <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.php">
                                <span>Buy Ticket</span>
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

                    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                        <div class="pricing-thumb">
                            <div class="d-flex">
                                <div>
                                    <h3><small>Standard</small> $240</h3>

                                    <p>What makes a premium NuSoundTara?</p>
                                </div>
                            </div>

                            <ul class="pricing-list mt-3">
                                <li class="pricing-list-item">platform for potential customers</li>

                                <li class="pricing-list-item">digital experience</li>

                                <li class="pricing-list-item">high-quality sound</li>

                                <li class="pricing-list-item">premium content</li>

                                <li class="pricing-list-item">live chat support</li>
                            </ul>

                            <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.php">
                                <span>Buy Ticket</span>
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
            </div>
        </section>
    </main>

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
                            <a href="about.php" class="site-footer-link">About</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="event.php" class="site-footer-link">Event</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_4" class="site-footer-link">Schedule</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="contact.php" class="site-footer-link">Contact</a>
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
                            nusoundstara@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="site-footer-title mb-3">Location</h5>

                    <p class="text-white d-flex mt-3 mb-2">
                    Sekolah Vokasi IPB, Bogor Indonesia</p>

                    <a class="link-fx-1 color-contrast-higher mt-3" href="contact.php">
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
                        <p class="copyright-text">Copyright © 2024 NuSoundTara Company</p>
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

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>