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
      max-height: 500px;
      -ms-overflow-style: none;
      /* IE and Edge */
      scrollbar-width: none;
      /* Firefox */
    }

    .custom-scrollable::-webkit-scrollbar {
      display: none;
      /* Chrome, Safari, and Opera */
    }

    .arrow {
      display: none;
    }

    .arrow.active {
      display: flex;

    }

    .v-list {
      color: var(--primary-800);
      font-weight: bold;
    }


    .report-types {}
  </style>

</head>

<body>

  <!-- navbar section  -->
  <nav class="navbar navbar-expand-md bg-white py-4">
    <div class="container">
      <a class="navbar-brand " href="<?= base_url('/') ?>">
        <!-- <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/logo-dark-purple.742caa.svg" alt="Logo" /> -->

        <img src="<?= base_url('assets/images/final-logo-ecosystem.png') ?>" class="w-100 h-80" alt="home-page-banner">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><img src="./Assets/menu.png" alt="" /></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-dark fw-normal" href="<?= base_url('reports') ?>">Eco System Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-normal" href="<?= base_url('custom_page') ?>">Custom Requirements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-normal" href="<?= base_url('event') ?>">Surveys</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-normal" href="<?= base_url('contact_us') ?>">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- header -->
  <header class="report-header report-header-lg text-center px-2 px-lg-5">
    <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702262499/assets/magazine/hn4cpe8bbs7ponn1bch4.svg" alt="Background Image">


    <div class="relative">
      <h1 class="display-4">EcoSystem Reports</h1>
      <p>Actionable intelligence to inform your strategic and commercial decision making</p>
    </div>
  </header>




  <!-- testing ribbon -->
  <div class="container p-4 pointer" >

    <ul class="vb-res list-style-none d-flex p-0 width-500 justify-content-around m-auto">
      <li id="btn-solar">
        <div class="text-center ">
          <img src="https://placehold.co/25" class="">
          <p class="text-center fs-14 c-light-gray mt-2">Solar</p>
        </div>

      </li>
      <li id="btn-wind">
        <div class="text-center">
          <img src="https://placehold.co/25" class="">
          <p class="text-center fs-14 c-light-gray mt-2">Wind</p>
        </div>

      </li>
      <li id="btn-coal">
        <div class="text-center">
          <img src="https://placehold.co/25" class="">
          <p class="text-center fs-14 c-light-gray mt-2">Coal</p>
        </div>
      </li>
      <li id="btn-hydro">
        <div class="text-center">
          <img src="https://placehold.co/25" class="">
          <p class="text-center fs-14 c-light-gray mt-2">Hydrogen</p>
        </div>
      </li>

    </ul>
  </div>

  <!-- <div class="row mb-4 tab-ribbon mx-2 py-3">
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
  </div> -->




  <div class="main d-flex flex gap-4 ">
    <div class="  py-1">
      <ul class=" fw-normal text-start d-flex flex-column gap-4  justify-content-between" style="position: sticky; top: 0px; min-width: 300px;">
        <li class="border-top border-bottom d-flex gap-5 py-2" id="market-sizing">
          <p class="fs-20 fw-400 v-list">Market Sizing</p>
          <div class="arrow align-items-center" id="first"><i class="icofont-arrow-right fs-30"></i></div>

        </li>
        <li class=" border-bottom  d-flex gap-5" id="future-outlook">
          <p class="fs-20 fw-400 v-list">Future Outlook</p>
          <div class="arrow " id="second"><i class="icofont-arrow-right fs-30"></i></div>
        </li>
        <li class="  border-bottom  d-flex gap-5" id="focus-reports">
          <p class="fs-20 fw-400 v-list">Focus Reports</p>
          <div class="arrow " id="third"><i class="icofont-arrow-right fs-30"></i></div>
        </li>
        <li class=" border-bottom  d-flex gap-4" id="thematic-reports">
          <p class="fs-20 fw-400 v-list">Thematic Reports</p>
          <div class="arrow " id="four"><i class="icofont-arrow-right fs-30"></i></div>
        </li>
        <li class="  border-bottom d-flex gap-5" id="databases">
          <p class="fs-20 fw-400 v-list">Databases</p>
          <div class="arrow " id="five"><i class="icofont-arrow-right fs-30"></i></div>
        </li>
        <li class=" border-bottom  d-flex gap-5" id="survey">
          <p class="fs-20 fw-400 v-list">Survey</p>
          <div class="arrow " id="six"><i class="icofont-arrow-right fs-30"></i></div>
        </li>
      </ul>
    </div>
    <div>
      <div class=" moving-content mx-4" style=" min-width: 50%;">
        <!-- Placeholder for other content -->
        <div class="p-1 mx-4 ">
          <!-- Content sections -->
          <div id="content-solar" class="content-section active">
            <div class="market-sizing">
              <div class=" py-4 ">
                <h1 class="h5 fw-bold text-uppercase  ">Market Sizing</h1>

              </div>
              <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                <img src="https://placehold.co/25" class="">

                <div class="text-content d-flex flex-column">
                  <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                  <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
                <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
              </div>
              <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                <img src="https://placehold.co/25" class="">

                <div class="text-content d-flex flex-column">
                  <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                  <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
                <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
              </div>

            </div>
            <div class="future-outlook">
              <div class="future-outlook">
                <div class=" py-4">
                  <h1 class="h5 fw-bold text-uppercase ">Future Outlook</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>
            <div class="focus-reports">
              <div class="focus-reports">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase  ">Focus Reports</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>
            <div class="thematic-reports">
              <div class="thematic-reports">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase ">thematic reports</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>


            <div class="databases">
              <div class="databases">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase  ">Databases</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>
            <div class="survey">
              <div class="survey">
                <div class=" py-4">
                  <h1 class="h5 fw-bold text-uppercase  ">Survey</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>

            </div>
          </div>
          <div id="content-wind" class="content-section">
            <div class="market-sizing">
              <div class=" py-4 ">
                <h1 class="h5 fw-bold text-uppercase  ">Market Sizing</h1>

              </div>
              <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                <img src="https://placehold.co/25" class="">

                <div class="text-content d-flex flex-column">
                  <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                  <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
                <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
              </div>
              <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                <img src="https://placehold.co/25" class="">

                <div class="text-content d-flex flex-column">
                  <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                  <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
                <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
              </div>

            </div>
            <div class="future-outlook">
              <div class="future-outlook">
                <div class=" py-4">
                  <h1 class="h5 fw-bold text-uppercase ">Future Outlook</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>
            <div class="focus-reports">
              <div class="focus-reports">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase  ">Focus Reports</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>
            <div class="thematic-reports">
              <div class="thematic-reports">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase ">thematic reports</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>


            <div class="databases">
              <div class="databases">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase  ">Databases</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>
            <div class="survey">
              <div class="survey">
                <div class=" py-4">
                  <h1 class="h5 fw-bold text-uppercase  ">Survey</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>

            </div>

          </div>
          <div id="content-coal" class="content-section">
            <div class="market-sizing">
              <div class=" py-4 ">
                <h1 class="h5 fw-bold text-uppercase  ">Market Sizing</h1>

              </div>
              <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                <img src="https://placehold.co/25" class="">

                <div class="text-content d-flex flex-column">
                  <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                  <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
                <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
              </div>
              <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                <img src="https://placehold.co/25" class="">

                <div class="text-content d-flex flex-column">
                  <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                  <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
                <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
              </div>

            </div>
            <div class="future-outlook">
              <div class="future-outlook">
                <div class=" py-4">
                  <h1 class="h5 fw-bold text-uppercase ">Future Outlook</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>
            <div class="focus-reports">
              <div class="focus-reports">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase  ">Focus Reports</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>
            <div class="thematic-reports">
              <div class="thematic-reports">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase ">thematic reports</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>


            <div class="databases">
              <div class="databases">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase  ">Databases</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>
            <div class="survey">
              <div class="survey">
                <div class=" py-4">
                  <h1 class="h5 fw-bold text-uppercase  ">Survey</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>

            </div>

          </div>
          <div id="content-hydro" class="content-section active">
            <div class="market-sizing">
              <div class=" py-4 ">
                <h1 class="h5 fw-bold text-uppercase  ">Market Sizing</h1>

              </div>
              <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                <img src="https://placehold.co/25" class="">

                <div class="text-content d-flex flex-column">
                  <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                  <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
                <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
              </div>
              <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                <img src="https://placehold.co/25" class="">

                <div class="text-content d-flex flex-column">
                  <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                  <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
                <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
              </div>

            </div>
            <div class="future-outlook">
              <div class="future-outlook">
                <div class=" py-4">
                  <h1 class="h5 fw-bold text-uppercase ">Future Outlook</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>
            <div class="focus-reports">
              <div class="focus-reports">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase  ">Focus Reports</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>
            <div class="thematic-reports">
              <div class="thematic-reports">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase ">thematic reports</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>


            <div class="databases">
              <div class="databases">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase  ">Databases</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>
            <div class="survey">
              <div class="survey">
                <div class=" py-4">
                  <h1 class="h5 fw-bold text-uppercase  ">Survey</h1>

                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
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
                <a href="<?= base_url('reports') ?>" class="d-block" id="reports">Eco System Reports</a>
                <a href="<?= base_url('custom_page') ?>" class="d-block">Custom Requirements</a>
                <a href="<?= base_url('event') ?>" class="d-block">Surveys & VOC</a>
                <a href="<?= base_url('') ?>" class="d-block">About us</a>
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
   document.getElementById('btn-solar').addEventListener('click', function() {
      showContent('content-solar');

    });

    document.getElementById('btn-wind').addEventListener('click', function() {
      showContent('content-wind');

    });

    document.getElementById('btn-coal').addEventListener('click', function() {
      showContent('content-coal');

    });

    document.getElementById('btn-hydro').addEventListener('click', function() {
      showContent('content-hydro');

    });

    // arrows



    document.querySelectorAll('.market-sizing').forEach(function(element) {
      element.addEventListener('wheel', function() {

        showArrow('first');
      });
    });
    document.querySelectorAll('.future-outlook').forEach(function(element) {
      element.addEventListener('mouseenter', function() {
        showArrow('second');
      });
    });
    document.querySelectorAll('.focus-reports').forEach(function(element) {
      element.addEventListener('mouseenter', function() {
        showArrow('third');
      });
    });

    document.querySelectorAll('.thematic-reports').forEach(function(element) {
      element.addEventListener('mouseenter', function() {
        showArrow('four');
      });
    });

    document.querySelectorAll('.databases').forEach(function(element) {
      element.addEventListener('mouseenter', function() {
        showArrow('five');
      });
    });

    document.querySelectorAll('.survey').forEach(function(element) {
      element.addEventListener('mouseenter', function() {
        showArrow('six');
      });
    });







    function showContent(contentId) {
      // Hide all content sections
      var contents = document.querySelectorAll('.content-section');
      contents.forEach(function(content) {
        content.classList.remove('active');
      });


      document.getElementById(contentId).classList.add('active');
    }



    // For arrow
    function showArrow(contentId) {
      // Hide all content sections
      var contents = document.querySelectorAll('.arrow');

      contents.forEach(function(content) {
        content.classList.remove('active');
      });


      document.getElementById(contentId).classList.add('active');
    }
  </script>
  <script>
  
  </script>
   <script src= "<?= base_url('assets/js/footer.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>