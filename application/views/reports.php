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
    .custom-animation-report-header {
      position: relative;
      background-color: var(--primary-300);
      /* sky blue color */
      padding-top: 10rem;
      padding-bottom: 5.87rem;
      text-align: center;
      overflow: hidden;
      height: 19.6rem;
    }

    .custom-animation-report-header-lg {
      padding-top: 6.19rem;
      padding-bottom: 5.87rem;
      height: 21.4rem;
    }

    .custom-animation-report-header img {
      position: absolute;
      top: -3rem;
      height: 120%;
      right: 0;
      object-fit: scale-down;
    }

    .custom-animation-report-header h1 {
      font-size: 1.75rem;
      font-weight: bold;
    }

    .custom-animation-report-header-lg h1 {
      font-size: 2.5rem;
      /* equivalent to text-h1 */
    }

    .custom-animation-report-header p {
      margin-top: 1.25rem;
      max-width: 29.12rem;
      margin-left: auto;
      margin-right: auto;
      font-size: 1rem;
      /* equivalent to text-body-text */
    }

    .custom-animation-report-header-lg p {
      margin-top: 1.06rem;
      font-size: 1.25rem;
      /* equivalent to text-big-copy */
    }

    @media (min-width: 992px) {
      .custom-animation-report-header {
        text-align: left;
      }

      .custom-animation-report-header-lg {
        text-align: center;
      }
    }

    /* Content section */
    .custom-animation-content-section {
      display: none;
    }

    .custom-animation-content-section.active {
      display: block;
    }

    .custom-animation-container-xxl {}

    .custom-animation-report-types li {
      border-bottom: 1px solid black;
    }

    .custom-animation-scrollable {
      overflow-y: scroll;
      max-height: 500px;
      -ms-overflow-style: none;
      /* IE and Edge */
      scrollbar-width: none;
      /* Firefox */
    }

    .custom-animation-scrollable::-webkit-scrollbar {
      display: none;
      /* Chrome, Safari, and Opera */
    }

    .custom-animation-sticky-row {
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
      <a class="navbar-brand " href="/">
        <!-- <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/logo-dark-purple.742caa.svg" alt="Logo" /> -->

        <img src="<?= base_url('assets/images/eco-logo-01.png') ?>" class="w-100 h-80" alt="home-page-banner">
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
  <header class="custom-animation-report-header custom-animation-report-header-lg text-center px-3 px-lg-5">
    <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702262499/assets/magazine/hn4cpe8bbs7ponn1bch4.svg" alt="Background Image">


    <div class="relative">
      <h1 class="display-4">EcoSystem Reports</h1>
      <p>Actionable intelligence to inform your strategic and commercial decision making</p>
    </div>
  </header>

  <div class="custom-animation-container-xxl py-4">
    <!-- First row with buttons -->
    <div class="row mb-4">
      <div class="col">
        <button type="button" id="btn-solar" class="btn btn-primary w-100">Solar </button>
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
        <div class="col-3 custom-animation-report-types" id="check">
          <ul class="list-group fw-normal text-start gap-4">
            <li class="list-group-item py-3" id="market-sizing">
              <p>Market Sizing</p>
              <div class="arrow"><i class="icofont-arrow-right"></i></div>
            </li>
            <li class="list-group-item py-3" id="future-outlook">
              <p>Future Outlook</p>
              <div class="arrow"><i class="icofont-arrow-right"></i></div>
            </li>
            <li class="list-group-item py-3" id="focus-reports">
              <p>Focus Reports</p>
              <div class="arrow"><i class="icofont-arrow-right"></i></div>
            </li>
            <li class="list-group-item py-3" id="thematic-reports">
              <p>Thematic Reports</p>
              <div class="arrow"><i class="icofont-arrow-right"></i></div>
            </li>
            <li class="list-group-item py-3" id="databases">
              <p>Databases</p>
              <div class="arrow"><i class="icofont-arrow-right"></i></div>
            </li>
            <li class="list-group-item py-3" id="survey">
              <p>Databases</p>
              <div class="arrow"><i class="icofont-arrow-right"></i></div>
            </li>
          </ul>
        </div>
        <div class="col-9 custom-animation-moving-content">
          <!-- Placeholder for other content -->
          <div class="p-4 custom-animation-scrollable ">
            <!-- Content sections -->
            <div id="content-solar" class="custom-animation-content-section active">
              <div class="custom-animation-market-sizing">
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
              <div class="custom-animation-future-outlook">
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
              <div class="custom-animation-focus-reports">
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
              <div class="custom-animation-thematic-reports">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Thematic Report</h1>
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
              <div class="custom-animation-databases">
                <div class="d-flex gap-4 align-items-center">
                  <h1 class="h3">Databases</h1>
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
            </div>
            <div id="content-wind" class="custom-animation-content-section">
              <div class="d-flex gap-4 align-items-center">
                <h1 class="h3">Wind Reports</h1>
                <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
              </div>
            </div>
            <div id="content-coal" class="custom-animation-content-section">
              <div class="d-flex gap-4 align-items-center">
                <h1 class="h3">Coal Reports</h1>
                <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
              </div>
            </div>
            <div id="content-hydro" class="custom-animation-content-section">
              <div class="d-flex gap-4 align-items-center">
                <h1 class="h3">Hydrogen Reports</h1>
                <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      // Function to handle button clicks
      function handleButtonClick(buttonId, contentId) {
        $(buttonId).click(function() {
          $('.custom-animation-content-section').removeClass('active');
          $(contentId).addClass('active');
        });
      }

      // Handle button clicks for different sections
      handleButtonClick('#btn-solar', '#content-solar');
      handleButtonClick('#btn-wind', '#content-wind');
      handleButtonClick('#btn-coal', '#content-coal');
      handleButtonClick('#btn-hydro', '#content-hydro');
    });
  </script>
</body>

</html>