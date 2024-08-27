<?php require(APPPATH . 'views/header.php'); ?>
<!-- Hero Section -->
<div class="overflow-hidden hero  container-fluid">


  <div class="row mb-4">
    <div class="col-md-5">
      <div class="p-2 d-flex justify-content-end align-items-end h-100">
        <p class="fs-50">
          Market Intelligence for Enabling Indian Energy Transition
        </p>
      </div>
    </div>
    <div class="col-md-7 px-0">
      <div class="w-100 position-relative" style="height:480px;">
        <div class="overlay-content position-absolute top-0 w-100 h-100" style="background:rgb(40, 41, 68, 0.5)"></div>
        <img src="<?= base_url('assets/images/home-12.png') ?>" class="object-fit-cover w-100" height="100%" alt="home-page-banner">
      </div>
    </div>
  </div>

  <div class="d-flex flex-column flex-md-row gap-3 mt-1 py-3 ">
    <!-- card1 -->
    <a href="<?= base_url("reports") ?>" class="card overflow-hidden w-100 card-overlay ">
      <div class="card-body position-relative py-4 px-3">
        <div class="home-card-img-content">
          <img src="<?= base_url() ?>assets/images/ECO SYSTEM REPORTS.jpg" class="d-none d-lg-block" alt="" />
        </div>
        <h2 class="card-title d-flex justify-content-between align-items-center position-relative z-1">
          ECO SYSTEM REPORTS

          <i class="icofont-external-link"></i>
        </h2>
        <p class="card-text pt-2 position-relative z-1">
          Ford ahead with locking oppurtunities across India's energy transition.
        </p>
      </div>
    </a>

    <a href="<?= base_url('custom_page') ?>" class="card overflow-hidden w-100 hero-card-overlay ">
      <div class="card-body position-relative py-4 px-3">
        <div class="home-card-img-content">
          <img src="<?= base_url() ?>assets/images/CUSTOM REQUIREMENTS.jpg" class="d-none d-lg-block" alt="" />
        </div>
        <h2 class="card-title d-flex justify-content-between align-items-center position-relative z-1">
          CUSTOM REQUIREMENTS
          <i class="icofont-external-link"></i>
        </h2>
        <p class="card-text pt-2 position-relative z-1">
          Address your energy transition needs using tailored research.
        </p>
      </div>
    </a>

    <!-- card2 -->
    <a href="<?= base_url('') ?>" class="card overflow-hidden w-100  hero-card-overlay">
      <div class="card-body position-relative py-4 px-3">
        <div class="home-card-img-content w-100 h-100">
          <img src="<?= base_url() ?>assets/images/SURVEYS AND VOC.jpg" class="d-none d-lg-block" alt="" />
        </div>
        <h2 class="card-title d-flex justify-content-between align-items-center position-relative z-1">
          SURVEYS & VoC

          <i class="icofont-external-link"></i>
        </h2>
        <p class="card-text pt-2 position-relative z-1">

          Learn energy transition market signals & orient your product to tap early advantage.
        </p>
      </div>
    </a>
    <!-- card3 -->
    <a href="<?= base_url('event') ?>" class="card overflow-hidden w-100 hero-card-overlay ">
      <div class="card-body position-relative py-4 px-3">
        <div class="home-card-img-content">

          <img src="<?= base_url() ?>assets/images/WEBINARS & INTERVIEWA.jpg" class="d-none d-lg-block" alt="" />
        </div>
        <h2 class="card-title d-flex justify-content-between align-items-center position-relative z-1">
          WEBINARS & INTERVIEWS
          <!-- <img src="" class="opacity-75" alt="arrow" class="ms-2" /> -->
          <i class="icofont-external-link"></i>
        </h2>
        <p class="card-text pt-2 position-relative z-1">
          Understand the energy transition market perspective from seasoned professionals & experts
        </p>
      </div>
    </a>
  </div>
</div>

<div class="container-fluid py-4 our-research">
  <div class="row " style="margin-top: 4rem;">
    <div class="col-md-5">
      <p class="research-title h4 mb-3 section-header   fs-20  " style="font-weight: 800; color: #5866ff !important;">ECO SYSTEM REPORTS</p>
      <h2 class="mb-4" style="font-size: 2.25rem; font-weight: 800; line-height: 140%;">
        We analyse the following <br>areas across the energy <br> transition:
      </h2>


      <div class="accordion w-100" id="researchAccordion" style="width:80%;">
        <div class="accordion ">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button border-top  border-1 border-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-01.037f2f.svg" class="icon me-3" alt="" />
              <span class="research-area fw-400 fs-22" style="color: none;">EV Eco System Reports</span>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show " aria-labelledby="headingOne" data-bs-parent="#researchAccordion">
            <div class="accordion-body">
              Our comprehensive view of total battery demand and chemistry across all end-use markets.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button border-top  border-1 border-dark collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-02.1f9e80.svg" class="icon me-3" alt="" />
              <span class="research-area fw-400 fs-22">Solar Eco System Reports</span>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#researchAccordion">
            <div class="accordion-body">
              Professional analysis of the EV ecosystem, from sales data to battery insights and legislation impacts.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button border-top border-1 border-dark collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-02.1f9e80.svg" class="icon me-3" alt="" />
              <span class="research-area fw-400 fs-22">Wind Eco System Reports</span>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree" data-bs-parent="#researchAccordion">
            <div class="accordion-body">
              Analysing the role of batteries in supporting future renewable deployment.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button border-top border-1 border-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-04.8205fb.svg" class="icon me-3" alt="" />
              <span class="research-area fw-400 fs-22">Hydrogen Eco System Reports</span>
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#researchAccordion">
            <div class="accordion-body">
              Analysis beyond the battery covering motor types, power electronics and vehicle architectures.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button border-top border-1 border-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-05.1b030d.svg" class="icon me-3" alt="" />
              <span class="research-area fw-400 fs-22">Bess Eco System Reports</span>
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse " aria-labelledby="headingFive" data-bs-parent="#researchAccordion">
            <div class="accordion-body">
              Analysing the underlying charging networks and systems that support EV growth.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button border-top  border-bottom border-1 border-dark  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-06.f89a01.svg" class="icon me-3" alt="" />
              <span class="research-area fw-400 fs-22">Power Eco System Reports</span>
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse " aria-labelledby="headingSix" data-bs-parent="#researchAccordion">
            <div class="accordion-body">
              Analysing battery recycling dynamics covering feedstock and capacity balance, and key drivers.
            </div>
          </div>
        </div>
      </div>
      <a href="<?= base_url('reports') ?>" class="btn btn-primary see-more btn-outline-dark  btn-lg mb-5 mt-4" style="background-color: #d0ddf7; border:1px solid black;!important">See Our Eco System Reports</a>
    </div>
    <div class="col-md-7 d-none d-lg-block ">
      <div class="illustration">
        <img src="<?= base_url('assets/images/accord.svg
          ') ?>" alt="Research Illustration" class="img-fluid" />
      </div>
    </div>
  </div>
</div>



<!-- componet for consultency -->

<section class="position-relative bg-purple consultency">
  <div class="container-fluid">
    <div class="row no-gutters">
      <div class="col-md-6 d-flex flex-column justify-content-center text-white py-5">
        <p class="text-uppercase h4 text-white mb-3 fw-bold fs-20 " style="color: #5866ff !important;">Custom Requirements</p>
        <h2 class="text-sky-blue-5 mb-3 fw-bold fs-30" style="line-height: 140% !important; font-size:2.25rem !important; font-weight: 500 !important; width:70%">
          Research projects aligned with your specific objectives
        </h2>
        <p class="text-sky-blue-5 mb-4 fs-20" style="max-width: 500px;">
          Bespoke consultancy and advisory services based on your defined
          criteria across the EV and battery, charging and battery recycling
          supply chains.
        </p>
        <a href="<?= base_url('custom_page') ?>">
          <button type="button" class="btn btn-primary fw-bold px-3 py-2 rounded-md">
            Learn More
          </button>
        </a>
      </div>

      <!-- section for picture -->
      <div class="col-md-6 p-0">
        <picture class="w-100 h-100">
          <source media="(min-width: 640px)" srcset="
            https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701787900/assets/home/home-consultancy_e2n1v0_gxhm2i.webp
          " />
          <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701787900/assets/home/home-consultancy-mobile_ampnjz_yaluzd.webp" class="img-fluid w-100  object-fit-cover" style="min-height: 100vh;" />
        </picture>
      </div>
    </div>
  </div>
</section>





<!-- components for icon  -->

<div class="container-fluid   landing-service-ribbon">
  <!-- one -->
  <div class="h-100">
    <div class="row w-100 mx-auto">
      <div class="col-md-4 d-flex justify-content-md-center">
        <div class="text-white p-3">
          <img src="https://placehold.co/120x120" alt="" class="rounded-circle" />
          <p class="text-white py-2">Market studies</p>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-md-center">
        <div class="text-white p-3">
          <img src="https://placehold.co/120x120" alt="" class="rounded-circle" />
          <p class="text-white  py-2">Market research &<br>Market validation </p>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-md-center">
        <div class="text-white p-3">
          <img src="https://placehold.co/120x120" alt="" class="rounded-circle" />
          <p class="text-white py-2">Due diligence</p>
        </div>
      </div>
    </div>
  </div>


  <!-- 2 -->

  <!-- 3 -->

</div>

<section class="position-relative px-0 surveys-and-voc" style="">
  <div class="container-fluid  max-w-content-container d-md-flex align-items-lg-center pb-5 pb-md-5 pt-5 pt-md-5 mx-1">
    <div class="col-md-6 pe-md-5 p-2">
      <p class=" h4 mb-3 fw-bold fs-20 section-header" style="color: #5866ff !important;">
        SURVEYS & VoC
      </p>
      <h2 class="mb-3 text-h3 text-md-h2" style="font-size: 2.25rem; font-weight: 800; line-height: 40px;">
        Bringing together leaders and innovators across the energy
        transition
      </h2>
      <p class="mb-4 mb-md-5 max-w-lg text-body-text text-justify">
        We assemble leaders in energy, transport, technology and financial
        markets across the globe through dedicated events programmes.
        Exploring EV and Battery, Charging, Infrastructure and Battery
        Recycling, we create opportunities for long-lasting and meaningful
        industry connections.
      </p>
      <a class="btn btn-primary rounded-md fw-bold font-medium px-3" href="<?= base_url('event') ?>">Learn more</a>
    </div>
    <div class="col-md-6 d-flex justify-content-center mt-5 mt-md-0">
      <picture>
        <source media="(min-width: 640px)" srcset="
                https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701813186/assets/home/home-events_cfh9zf.webp
              " />
        <img class="img-fluid object-cover mx-auto mx-md-0 w-100 max-w-md h-auto" src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701812086/assets/home/home-events-mobile__qffpzj.webp" alt="" />
      </picture>
    </div>
  </div>
</section>

<!-- contact us -->

<section class="position-relative" style="min-height: 400px; margin:0 ; background-image: linear-gradient(#cac0ff,#041e42);">
  <div class="wrapper contact" style="margin:auto; min-width:95%; position:absolute; z-index: 2; top:0; bottom:0 ; left:15px; right:15px ">
    <div class="position-relative py-5 px-3 bg-lilac-medium md:py-7 max-w-content-container mx-auto overflow-hidden">
      <div class="d-flex flex-column align-items-center py-4">
        <h3 class="text-h3  fs-24 text-center md:text-5xl mb-3 mb-md-4 display-2">
          Contact us
        </h3>
        <span class="text-sm text-center mb-4 mb-md-5 md:max-w-3xl h3 fs-20" style="line-height: 140%;">Register your interest and we’ll contact you shortly to <br> provide
          sample materials and arrange a demo.</span>
        <a class="btn btn-primary px-5 py-2 text-sm md:py-0 md:text-base font-medium rounded-md btn-lg fw-bold" href="<?= base_url('contact_us') ?>">Get in touch</a>
      </div>
    </div>
  </div>
</section>

<!-- footer -->


<!--  -->


<script>
  document.getElementById('off-menu-toggler').addEventListener('click', function() {
    document.getElementById('off-menu-nav').classList.toggle('active');
  });

  document.getElementById('off-menu-close').addEventListener('click', function() {
    document.getElementById('off-menu-nav').classList.toggle('active');
  });
</script>

<?php require(APPPATH . 'views/footer.php'); ?>