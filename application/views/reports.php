<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ecosystem Reports</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />

  <style>
    /* report page */
    .report-header {
      position: relative;
      background-color: var(--primary-300);
      /* sky blue color */
      padding-top: 10rem;
      padding-bottom: 5.87rem;
      text-align: center;
      overflow: hidden;
      height: 19.6rem;
    }

    .report-header-lg {
      padding-top: 6.19rem;
      padding-bottom: 5.87rem;
      height: 21.4rem;
    }

    .report-header img {
      position: absolute;
      top: -3rem;
      height: 120%;
      right: 0;
      object-fit: scale-down;
    }

    .report-header h1 {
      font-size: 1.75rem;
      font-weight: bold;
    }

    .report-header-lg h1 {
      font-size: 2.5rem;
      /* equivalent to text-h1 */
    }

    .report-header p {
      margin-top: 1.25rem;
      max-width: 29.12rem;
      margin-left: auto;
      margin-right: auto;
      font-size: 1rem;
      /* equivalent to text-body-text */
    }

    .report-header-lg p {
      margin-top: 1.06rem;
      font-size: 1.25rem;
      /* equivalent to text-big-copy */
    }

    @media (min-width: 992px) {
      .report-header {
        text-align: left;
      }

      .report-header-lg {
        text-align: center;
      }
    }

    /* Content section */
    .content-section {
      display: none;
    }

    .content-section.active {
      display: block;
    }

    .container-xxl {}

    .report-types li {
      border-bottom: 1px solid black;
    }

    .custom-scrollable {
      overflow-y: scroll;
      max-height: 400px;
      -ms-overflow-style: none;
      /* IE and Edge */
      scrollbar-width: none;
      /* Firefox */
    }

    .custom-scrollable::-webkit-scrollbar {
      display: none;
      /* Chrome, Safari, and Opera */
    }

    .sticky-row {
      position: -webkit-sticky;
      position: sticky;
      top: 20px;
      z-index: 1000;
      background-color: white;
      padding: 20px 0;
    }
  </style>

</head>

<body>

  <!-- navbar section  -->
  <nav class="navbar navbar-expand-md bg-white py-4">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/logo-dark-purple.742caa.svg" alt="Logo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><img src="./Assets/menu.png" alt="" /></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-dark fw-normal" href="/research">Eco System Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-normal" href="/consultancy">Custom Requirements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-normal" href="/events">Surveys</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-normal" href="/get-in-touch">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- header -->
  <header class="report-header report-header-lg text-center px-3 px-lg-5">
    <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702262499/assets/magazine/hn4cpe8bbs7ponn1bch4.svg" alt="Background Image">
    <div class="relative">
      <h1 class="display-4">EcoSystem Reports</h1>
      <p>Actionable intelligence to inform your strategic and commercial decision making</p>
    </div>
  </header>

  <div class="container-xxl py-4">
    <!-- First row with buttons -->
    <div class="row mb-4">
      <div class="col">
        <button type="button" id="btn-solar" class="btn btn-primary w-100">Solar</button>
      </div>
      <div class="col">
        <button type="button" id="btn-wind" class="btn btn-primary w-100">Wind</button>
      </div>
      <div class="col">
        <button type="button" id="btn-coal" class="btn btn-primary w-100">Coal</button>
      </div>
      <div class="col">
        <button type="button" id="btn-hydro" class="btn btn-primary w-100">Hydrogen</button>
      </div>
    </div>

    <!-- Second row with two columns -->
    <!-- splitting into two columns -->
    <div class="splitiing ">
      <div class="row py-2">
        <!-- list of internal-section -->
        <div class="col-3 report-types" id="check">
          <ul class="list-group fw-normal text-start gap-4">
            <li class="list-group-item py-3" id="market-sizing">Market Sizing</li>
            <li class="list-group-item py-3" id="future-outlook">Future Outlook</li>
            <li class="list-group-item py-3" id="focus-reports">Focus Reports</li>
            <li class="list-group-item py-3" id="thematic-reports">Thematic Reports</li>
            <li class="list-group-item py-3" id="databases">Databases</li>
            <li class="list-group-item py-3" id="survey">Surveys</li>
          </ul>
        </div>
        <div class="col-9 moving-content">
          <!-- Placeholder for other content -->
          <div class="p-4 custom-scrollable ">
            <!-- Content sections -->
            <div id="content-solar" class="content-section active">
              <div class="market-sizing">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Market Sizing</h1>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="future-outlook">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Future Outlook</h1>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="focus-reports">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Focus Report</h1>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="thematic-reports">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Focus Report</h1>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>

              
              <div class="databases">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Databases</h1>
                  <a href="">Learn More<i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="survey">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Survey</h1>
                  <a href="">Learn More<i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
            </div>
            <div id="content-wind" class="content-section">
              <div class="market-sizing">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Market Sizing</h1>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="future-outlook">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Future Outlook</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="focus-report">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Focus Report</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="databases">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Databases</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="survey">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Survey</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
            </div>
            <div id="content-coal" class="content-section">
              <div class="market-sizing">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Market Sizing</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="future-outlook">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Future Outlook</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="focus-report">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Focus Report</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="databases">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Databases</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="survey">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Survey</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
            </div>
            <div id="content-hydro" class="content-section active">
              <div class="market-sizing">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Market Sizing</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="future-outlook">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Future Outlook</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="focus-report">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Focus Report</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="databases">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Databases</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
              <div class="survey">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Survey</h1>
                  <a href="">Learn More</a>
                </div>
                <div class="d-flex flex-column mx-4">
                  <div class="title d-flex gap-1 align-items-start">
                    <img src="https://placehold.co/25" alt="">
                    <p>Pointer</p>

                  </div>
                  <p class="mx-2">Short Note</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer text-center text-md-start ">
    <div class="container-xxl">
      <div class="row">
        <div class="col-md-6 col-lg-6 mb-4 mb-md-0">
          <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/logo-sky-blue-1.ebb1bf.svg" alt="Logo" class="logo mb-4">
          <div class="contact-info">
            <p>Second Floor, Randall House<br>6 Dowgate Hill<br>London EC4R 2SU</p>
            <p>+44 (0) 203 988 7648<br><a href="mailto:info@rhomotion.com">info@rhomotion.com</a></p>
          </div>
          <div class="social-icons mt-4">
            <a href="https://www.linkedin.com/company/rhomotion/" target="_blank" rel="noreferrer">
              <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-linkedin.5fd894.svg" alt="LinkedIn">
            </a>
            <a href="https://twitter.com/rhomotion/" target="_blank" rel="noreferrer">
              <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-x.290b8c.svg" alt="Twitter">
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="row">
            <div class="col-6">
              <div class="nav-links">
                <a href="/research" class="d-block">Eco System Reports</a>
                <a href="/consultancy" class="d-block">Custom Requirements</a>
                <a href="/events" class="d-block">Surveys & VOC</a>
                <a href="/about-us" class="d-block">About us</a>
              </div>
            </div>
            <div class="col-6">
              <div class="nav-links">
                <a href="/magazine" class="d-block">Magazine</a>
                <a href="/news" class="d-block">News</a>
                <a href="/careers" class="d-block">Careers</a>
                <a href="/get-in-touch" class="d-block">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-6 text-md-start">
          <p class="copyright">&copy; 2024 Eninrac. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-md-end">
          <p class="privacy"><a href="/privacy-policy">Privacy Policy</a> • <a href="/terms">Terms & Conditions</a></p>
        </div>
      </div>
    </div>
  </footer>



  <script>
    // eventlisterners on classes 
    
    
    // ends

    document.getElementById('btn-solar').addEventListener('click', function() {
      showContent('content-solar');
      highlightNavItem('nav-solar');
    });

    document.getElementById('btn-wind').addEventListener('click', function() {
      showContent('content-wind');
      highlightNavItem('nav-wind');
    });

    document.getElementById('btn-coal').addEventListener('click', function() {
      showContent('content-coal');
      highlightNavItem('nav-coal');
    });

    document.getElementById('btn-hydro').addEventListener('click', function() {
      showContent('content-hydro');
      highlightNavItem('nav-hydro');
    });

    function showContent(contentId) {
      // Hide all content sections
      var contents = document.querySelectorAll('.content-section');
      contents.forEach(function(content) {
        content.classList.remove('active');
      });


      document.getElementById(contentId).classList.add('active');
    }

    function highlightNavItem(navItemId) {

      var navItems = document.querySelectorAll('.list-group-item');
      navItems.forEach(function(item) {
        item.innerHTML = item.innerHTML.replace('<i class="icofont-long-arrow-right"></i>', '');
      });


      var selectedItem = document.getElementById(navItemId);
      selectedItem.innerHTML = selectedItem.innerHTML + '<i class="icofont-long-arrow-right "></i>';
    }

    function movingCheck() {
      let ms = document.getElementById("market-sizing").getBoundingClientRect().top;
      let fm = document.getElementById("future-outlook").getBoundingClientRect().top;
      let fr = document.getElementById("focus-reports").getBoundingClientRect().top;
      let tr = document.getElementById("thematic-reports").getBoundingClientRect().top;
      let db = document.getElementById("databases").getBoundingClientRect().top;
      let survey = document.getElementById("survey").getBoundingClientRect().top;
      // class wise position
      let cms= document.getElementsByClassName("market-sizing").getBoundingClientRect().top
      let cfm= document.getElementsByClassName("future-outlook").getBoundingClientRect().top;
      let cfr= document.getElementsByClassName("focus-reports").getBoundingClientRect().top;
      let ctr= document.getElementsByClassName("thematic-reports").getBoundingClientRect().top;
      let cdb= document.getElementsByClassName("databases").getBoundingClientRect().top;
      let csurvey= document.getElementsByClassName("survey").getBoundingClientRect().top;


      if(true){
        var selectedItem = document.getElementById("market-sizing");
        selectedItem.innerHTML = selectedItem.innerHTML + '<h1>hello</h1>';

      }
    }

    document.getElementsByClassName("market-sizing")[0].addEventListener('onscroll',function(){
      movingCheck();
    });
   
    document.getElementsByClassName("future-outlook")[0].addEventListener('onscroll',function(){
      movingCheck();
    })
    document.getElementsByClassName("focus-reports")[0].addEventListener('onscroll',function(){
      movingCheck();
    })
    document.getElementsByClassName("thematic-reports")[0].addEventListener('onscroll',function(){
      movingCheck();
    })
    document.getElementsByClassName("databases")[0].addEventListener('onscroll',function(){
      movingCheck();
    })
    document.getElementsByClassName("survey")[0].addEventListener('onscroll',function(){
      movingCheck();});
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>