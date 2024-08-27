<?php require(APPPATH . 'views/header.php'); ?>

<!-- header -->
<header class="report-header report-header-lg text-center px-2 px-lg-5">
  <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702262499/assets/magazine/hn4cpe8bbs7ponn1bch4.svg" alt="Background Image">
  <div class="relative">
    <h1 class="display-4"> Reports</h1>
    <p>Actionable intelligence to inform your strategic and commercial decision making</p>
  </div>
</header>

<!-- tab ribbon -->
<div class="container-fluid  text-center p-4 pointer w-blue">
  <div class="ribbon-content">
    <ul class="vb-res list-style-none d-flex p-0 width-500 justify-content-around m-auto">

      <li id="btn-ev" class="highlight tab p-3">
        <div class="text-center ">
          <img src="<?= base_url('assets/images/solar-line.svg') ?>" class="product-ribbon-svg">
          <p class="text-center  c-light-gray mt-2">EV</p>
        </div>
      </li>
      <li id="btn-solar" class="p-3 tab">
        <div class="text-center ">
          <img src="<?= base_url('assets/images/solar-line.svg') ?>" class="product-ribbon-svg">
          <p class="text-center  c-light-gray mt-2">Solar</p>
        </div>
      </li>

      <li id="btn-wind" class="p-3 tab">
        <div class="text-center">
          <img src="<?= base_url('assets/images/oa-line.svg') ?>" class="product-ribbon-svg">
          <p class="text-center  c-light-gray mt-2">Wind</p>
        </div>

      </li>


      <li id="btn-hydro" class="tab p-3">
        <div class="text-center ">
          <img src="<?= base_url('assets/images/solar-line.svg') ?>" class="product-ribbon-svg">
          <p class="text-center  c-light-gray mt-2">Hydrogen</p>
        </div>
      </li>

      <li id="btn-bess" class="tab p-3">
        <div class="text-center">
          <img src="<?= base_url('assets/images/ev-line.svg') ?>" class="product-ribbon-svg">
          <p class="text-center  c-light-gray mt-2">BESS</p>
        </div>
      </li>

      <li id="btn-power" class="tab p-3">
        <div class="text-center">
          <img src="<?= base_url('assets/images/ev-line.svg') ?>" class="product-ribbon-svg">
          <p class="text-center  c-light-gray mt-2">Power</p>
        </div>
      </li>
    </ul>
  </div>
</div>

<div class="reports-section container-fluid d-flex flex">
  <div class=" py-1" style="position: sticky; top: 0px; min-width: 300px; min-height: 100vh">
    <ul class="sticky-ul fw-normal text-start d-flex flex-column  report-types justify-content-between">
      <li class="d-flex  justify-content-between py-2 " id="market-sizing">
        <p class="v-list">Market Sizing</p>
        <div class="arrow align-items-center" id="market-sizing-arrow"><i class="icofont-arrow-right fs-40"></i></div>
      </li>
      <li class="d-flex  justify-content-between " id="future-outlook">
        <p class="v-list">Future Outlook</p>
        <div class="arrow " id="future-outlook-arrow"><i class="icofont-arrow-right fs-40"></i></div>
      </li>
      <li class="d-flex  justify-content-between " id="focus-reports">
        <p class="v-list">Focus Reports</p>
        <div class="arrow " id="focus-reports-arrow"><i class="icofont-arrow-right fs-40"></i></div>
      </li>
      <li class="d-flex  justify-content-between " target="four" id="thematic-reports">
        <p class="v-list">Thematic Reports</p>
        <div class="arrow " id="thematic-reports-arrow"><i class="icofont-arrow-right fs-40"></i></div>
      </li>
      <li class="d-flex  justify-content-between " target="five" id="databases">
        <p class="v-list">Databases</p>
        <div class="arrow " id="databases-arrow"><i class="icofont-arrow-right fs-40"></i></div>
      </li>
      <li class="d-flex  justify-content-between " target="six" id="survey" style="border: none;">
        <p class="v-list">Survey</p>
        <div class="arrow " id="survey-arrow"><i class="icofont-arrow-right fs-40"></i></div>
      </li>
    </ul>
  </div>
  <div>
    <div class="mx-4" style=" min-width: 50%;">
      <div class="p-1 mx-4 ">
        <!-- Content sections -->
        <div id="content-solar" class="content-section ">
          <div class="market-sizing">
            <div class="py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Market Sizing</h1>
            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class=" pointer h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
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
            <div class=" py-4">
              <h1 class="h5 fw-bold text-uppercase ">Future Outlook</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="focus-reports">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Focus Reports</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="thematic-reports">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase ">thematic reports</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="databases">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Databases</h1>

            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>
          <div class="survey">
            <div class=" py-4">
              <h1 class="h5 fw-bold text-uppercase  ">Survey</h1>

            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
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

        <div id="content-wind" class="content-section">
          <div class=" market-sizing">
            <div class="py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Market Sizing</h1>

            </div>

            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class=" pointer h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
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
            <div class=" py-4">
              <h1 class="h5 fw-bold text-uppercase ">Future Outlook</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="focus-reports">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Focus Reports</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="thematic-reports">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase ">thematic reports</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="databases">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Databases</h1>

            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="survey">
            <div class=" py-4">
              <h1 class="h5 fw-bold text-uppercase  ">Survey</h1>

            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
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

        <!-- content for ev  -->
        <div id="content-ev" class="content-section active">
          <div class=" market-sizing">
            <div class="py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Market Sizing</h1>
            </div>
            <!-- report listing -->
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class=" pointer h5
                ">EVs Market in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url() ?>market-sizing-ev-market">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Tyer Market for EVs in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url() ?>market-sizing-ev-tyer-market">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Transmission Market for EVs in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EVCI Market for EVs in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url() ?>market-sizing-ev-evci-market">>Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Controller Market for EVs in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Batteries Market for EVs in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Motor Market for EVs in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>



          </div>

          <div class="future-outlook">
            <div class=" py-4">
              <h1 class="h5 fw-bold text-uppercase ">Future Outlook</h1>
            </div>

            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class=" pointer h5
                ">EVs Market in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Tyer Market for EVs in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Transmission Market for EVs in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EVCI Market for EVs in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Controller Market for EVs in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Batteries Market for EVs in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Motor Market for EVs in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>


          </div>


          <div class="focus-reports">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Focus Reports</h1>

            </div>
            <!-- reports listing -->
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Comercialiazation of EVs</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV Demand-Supply in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV Policy Gap Compedium</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Demand Assessment</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">D2I Models</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="thematic-reports">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase ">thematic reports</h1>
            </div>
            <!-- reports listing -->
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV cluster development opportunities in India </p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Assessment of cost builtups & benchmarks for EV production in India</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Assessing viability of EVs & Chargers production in India & examining the VGF routes - PLI</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Unlocking trade opportunities for India with other countries</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Partnerships & deals in EV industry in India & global</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="databases">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Databases</h1>
            </div>
            <!-- reports listing -->
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Detailed Database of Operational EVs - State wise</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Detailed EV Sales & Production Database</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EVCI Database</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="survey">
            <div class=" py-4">
              <h1 class="h5 fw-bold text-uppercase  ">Survey</h1>
            </div>

            <!-- Survey listing -->
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Dummy Content for Survey</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Dummy Content for Survey</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Dummy Content for Survey</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                <p class="h5
                ">Dummy Content for Survey</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>



          </div>



        </div>
        <!-- content for bess -->
        <div id="content-bess" class="content-section">

          <div class=" market-sizing">
            <div class="py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Market Sizing</h1>

            </div>

            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class=" pointer h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
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
            <div class=" py-4">
              <h1 class="h5 fw-bold text-uppercase ">Future Outlook</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="focus-reports">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Focus Reports</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="thematic-reports">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase ">thematic reports</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="databases">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Databases</h1>

            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="survey">
            <div class=" py-4">
              <h1 class="h5 fw-bold text-uppercase  ">Survey</h1>

            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
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

        <!-- content for hydrogen -->
        <div id="content-hydro" class="content-section ">

          <div class=" market-sizing">
            <div class="py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Market Sizing</h1>

            </div>

            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class=" pointer h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
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
            <div class=" py-4">
              <h1 class="h5 fw-bold text-uppercase ">Future Outlook</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="focus-reports">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Focus Reports</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="thematic-reports">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase ">thematic reports</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="databases">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Databases</h1>

            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="survey">
            <div class=" py-4">
              <h1 class="h5 fw-bold text-uppercase  ">Survey</h1>

            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
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
        <!-- content for power -->
        <div id="content-power" class="content-section">
          <div class=" market-sizing">
            <div class="py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Market Sizing</h1>

            </div>

            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class=" pointer h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
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
            <div class=" py-4">
              <h1 class="h5 fw-bold text-uppercase ">Future Outlook</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="focus-reports">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Focus Reports</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="thematic-reports">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase ">thematic reports</h1>

            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="databases">
            <div class=" py-4 ">
              <h1 class="h5 fw-bold text-uppercase  ">Databases</h1>

            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class=" info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>

          </div>


          <div class="survey">
            <div class=" py-4">
              <h1 class="h5 fw-bold text-uppercase  ">Survey</h1>

            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
              <img src="https://placehold.co/25" class="">

              <div class="text-content d-flex flex-column">
                <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
              </div>
              <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
            </div>
            <div class="info-block d-flex flex p-2 mb-2 gap-4 mx-4  align-items-start">
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





<script>
  function getScreenPosition(element) {
    const rect = element.getBoundingClientRect();
    const screenX = rect.left + window.screenX;
    const screenY = rect.top;
    // console.log(screenX, screenY);

    return ({
      screenX,
      screenY
    });
  }

  function topCheck(element) {
    let currentPosition = getScreenPosition(element);
    console.log(currentPosition);

    if (currentPosition.screenY > -180 && currentPosition.screenY < 35 && currentPosition.screenX > 0) {

      return true;
    }
    return false;


  }

  function showContent(contentId) {


    var contents = document.querySelectorAll('.content-section');
    contents.forEach(function(content) {
      content.classList.remove('active');
    });


    document.getElementById(contentId).classList.add('active');
  }

  function highlight(element) {
    var tabs = document.querySelectorAll('.tab');
    tabs.forEach(function(tab) {
      tab.classList.remove('highlight');
    });
    element.classList.add('highlight');
  }





  window.addEventListener('scroll', function(e) {


    let x = document.querySelector('.sticky-ul').children;
    Array.from(x).forEach(function(element) {

      let blocks = document.querySelectorAll(`.${element.id}`);
      blocks.forEach(function(block) {
        if (topCheck(block)) {
          showArrow(`${block.classList[0]}-arrow`)

        }


      });




    });
  })

  // For arrow
  function showArrow(id) {
    // Hide all content sections
    var contents = document.querySelectorAll('.arrow');

    contents.forEach(function(content) {

      content.classList.remove('active');
    });
    let ele = document.getElementById(id);

    ele.classList.add('active');
  }



  document.getElementById('btn-ev').addEventListener('click', function() {

    highlight(this);
    showContent('content-ev');

  });

  document.getElementById('btn-solar').addEventListener('click', function() {
    highlight(this);
    showContent('content-solar');

  });

  document.getElementById('btn-wind').addEventListener('click', function() {
    highlight(this);
    showContent('content-wind');

  });



  document.getElementById('btn-hydro').addEventListener('click', function() {
    highlight(this);
    showContent('content-hydro');

  });

  document.getElementById('btn-bess').addEventListener('click', function() {
    highlight(this);
    showContent('content-bess');

  });
  document.getElementById('btn-power').addEventListener('click', function() {
    highlight(this);
    showContent('content-power');

  });
</script>

<?php require(APPPATH . 'views/header.php'); ?>