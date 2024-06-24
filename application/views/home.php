<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ecosystem</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />

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
        <ul class="navbar-nav ms-auto  ">
          <li class="nav-item">
            <a class="nav-link text-dark fw-normal  " href="/research">Research</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-normal " href="/consultancy">Consultancy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-normal " href="/events">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-normal " href="/get-in-touch">Get in touch</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="p-1 overflow-hidden hero  container-xxl">
    <div class="hero-section py-4" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center;">
      <div class="text-container" style="flex: 1 1 55%; padding: 10px; max-width: 55%;">
        <p class="fs-70 fw-bold display-4">
          Actionable intelligence for the energy transition
        </p>
      </div>
      <div class="video-container py-3" style="flex: 1 1 45%; padding: 10px; max-width: 45%;">
        <video class="w-100 " playsinline autoplay loop>
          <source src="https://res.cloudinary.com/dkklqdsqc/video/upload/v1704214063/assets/home/Car_LineWork_Animation_ProRes_8bpc_4444-HVEC_xkyamg.mov" type='video/mp4; codecs="hvc1"' />
          <source src="https://res.cloudinary.com/dkklqdsqc/video/upload/q_auto/v1703807857/assets/home/homepage_hero_animation_zw5l2c_mhczgo_oxh068.webm" type="video/webm" />
          Not Playing Video
        </video>
      </div>
    </div>

    <div class="d-flex flex-column flex-md-row gap-3 mt-1 py-4">
      <!-- card1 -->
      <a href="/consultancy" class="card overflow-hidden w-100  ">
        <div class="card-body position-relative py-4 px-3">
          <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/v1702337706/assets/home/ymfa0talxlppyy682pqp.svg" class="d-none d-lg-block" alt="" />
          <h2 class="card-title d-flex justify-content-between align-items-center">
            Consultancy
            <!-- <img src="" class="opacity-75" alt="arrow" class="ms-2" /> -->
            <i class="icofont-external-link"></i>
          </h2>
          <p class="card-text pt-2">
            Drive your strategic decision-making using tailored research lore.
          </p>
        </div>
      </a>

      <a href="/consultancy" class="card overflow-hidden w-100  ">
        <div class="card-body position-relative py-4 px-3">
          <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/v1702337706/assets/home/ymfa0talxlppyy682pqp.svg" class="d-none d-lg-block" alt="" />
          <h2 class="card-title d-flex justify-content-between align-items-center">
            Consultancy
            <!-- <img src="" class="opacity-75" alt="arrow" class="ms-2" /> -->
            <i class="icofont-external-link"></i>
          </h2>
          <p class="card-text pt-2">
            Drive your strategic decision-making using tailored research lore.
          </p>
        </div>
      </a>

      <!-- card2 -->
      <a href="/consultancy" class="card overflow-hidden w-100  ">
        <div class="card-body position-relative py-4 px-3">
          <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/v1702337706/assets/home/ymfa0talxlppyy682pqp.svg" class="d-none d-lg-block" alt="" />
          <h2 class="card-title d-flex justify-content-between align-items-center">
            Consultancy
            <!-- <img src="" class="opacity-75" alt="arrow" class="ms-2" /> -->
            <i class="icofont-external-link"></i>
          </h2>
          <p class="card-text pt-2">
            Drive your strategic decision-making using tailored research lore.
          </p>
        </div>
      </a>
      <!-- card3 -->
      <a href="/consultancy" class="card overflow-hidden w-100  ">
        <div class="card-body position-relative py-4 px-3">
          <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/v1702337706/assets/home/ymfa0talxlppyy682pqp.svg" class="d-none d-lg-block" alt="" />
          <h2 class="card-title d-flex justify-content-between align-items-center">
            Consultancy
            <!-- <img src="" class="opacity-75" alt="arrow" class="ms-2" /> -->
            <i class="icofont-external-link"></i>
          </h2>
          <p class="card-text pt-2">
            Drive your strategic decision-making using tailored research lore.
          </p>
        </div>
      </a>
    </div>
  </div>
  </div>

  <!--       component      -->


  <div class="container py-5 our-research">
    <div class="row">
      <div class="col-md-6">
        <p class="research-title h4 mb-2 section-header ">OUR RESEARCH</p>
        <h2 class="h3 mb-4 h1">
          We analyse the following <br>areas across the energy <br> transition:
        </h2>
        <div class="accordion" id="researchAccordion">
          <div class="accordion ">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button border-top  border-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-01.037f2f.svg" class="icon me-3" alt="" />
                <span class="research-area" style="color: none;">Battery Demand</span>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show p-2" aria-labelledby="headingOne" data-bs-parent="#researchAccordion">
              <div class="accordion-body">
                Our comprehensive view of total battery demand and chemistry across all end-use markets.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button border-top  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-02.1f9e80.svg" class="icon me-3" alt="" />
                <span class="research-area">EV & Battery</span>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse p-2" aria-labelledby="headingTwo" data-bs-parent="#researchAccordion">
              <div class="accordion-body">
                Professional analysis of the EV ecosystem, from sales data to battery insights and legislation impacts.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button border-top  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-02.1f9e80.svg" class="icon me-3" alt="" />
                <span class="research-area">Energy Stationary Storage</span>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse p-2" aria-labelledby="headingTwo" data-bs-parent="#researchAccordion">
              <div class="accordion-body">
                Analysing the role of batteries in supporting future renewable deployment.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button border-top  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-04.8205fb.svg" class="icon me-3" alt="" />
                <span class="research-area">EV Motors & Systems</span>
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
              <button class="accordion-button border-top  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-05.1b030d.svg" class="icon me-3" alt="" />
                <span class="research-area">EV Charging & Infrastructure</span>
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse p-2" aria-labelledby="headingFive" data-bs-parent="#researchAccordion">
              <div class="accordion-body">
                Analysing the underlying charging networks and systems that support EV growth.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button border-top border-bottom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-06.f89a01.svg" class="icon me-3" alt="" />
                <span class="research-area">Battery Recycling</span>
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse p-2" aria-labelledby="headingSix" data-bs-parent="#researchAccordion">
              <div class="accordion-body">
                Analysing battery recycling dynamics covering feedstock and capacity balance, and key drivers.
              </div>
            </div>
          </div>
        </div>
        <a href="/research" class="btn btn-primary  btn-lg mt-3">See our research products</a>
      </div>
      <div class="col-md-6 d-none d-lg-block">
        <div class="illustration">
          <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/v1702260914/assets/home/rheuih0ro6to7vjvznbq.svg" alt="Research Illustration" />
        </div>
      </div>
    </div>
  </div>



  <!-- componet for consultency -->

  <section class="position-relative bg-purple consultency">
    <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col-md-6 d-flex flex-column justify-content-center text-white py-5">
          <p class="text-uppercase h4 text-white mb-3">Consultancy</p>
          <h2 class="text-sky-blue-5 mb-3">
            Research projects aligned with your specific objectives
          </h2>
          <p class="text-sky-blue-5 mb-4">
            Bespoke consultancy and advisory services based on your defined
            criteria across the EV and battery, charging and battery recycling
            supply chains.
          </p>
          <a href="#">
            <button type="button" class="btn btn-primary px-4 rounded-md">
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
            <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701787900/assets/home/home-consultancy-mobile_ampnjz_yaluzd.webp" class="img-fluid w-100 " style="min-height: 100vh;" />
          </picture>
        </div>
      </div>
    </div>
  </section>





  <!-- components for icon  -->

  <div class="container-fluid bg-dark d-flex flex-wrap justify-content-evenly text-center">
    <!-- one -->
    <div class="text-white p-3">
      <img src="https://placehold.co/120x120" alt="" class="rounded-circle" />
      <p class="text-white">Market</p>
    </div>
    <!-- 2 -->
    <div class="text-white p-3">
      <img src="https://placehold.co/120x120" alt="" class="rounded-circle" />
      <p class="text-white">Market</p>
    </div>
    <!-- 3 -->
    <div class="text-white p-3">
      <img src="https://placehold.co/120x120" alt="" class="rounded-circle" />
      <p class="text-white">Market</p>
    </div>
  </div>
  <!-- component -->

  <section class="relative px-5 bg-lilac">
    <div class="container mx-auto max-w-content-container d-md-flex align-items-lg-center pb-5 pb-md-5 pt-5 pt-md-5">
      <div class="col-md-6 pe-md-5">
        <p class="mb-3 h4 text-uppercase  section-header">
          RHO MOTION EVENTS
        </p>
        <h2 class="mb-3 text-h3 text-md-h2">
          Bringing together leaders and innovators across the energy
          transition
        </h2>
        <p class="mb-4 mb-md-5 max-w-lg text-body-text">
          We assemble leaders in energy, transport, technology and financial
          markets across the globe through dedicated events programmes.
          Exploring EV and Battery, Charging, Infrastructure and Battery
          Recycling, we create opportunities for long-lasting and meaningful
          industry connections.
        </p>
        <a class="btn btn-primary rounded-md font-medium px-3" href="/events">Learn more</a>
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

  <section class="contact">
    <div class="position-relative py-5 px-3 bg-lilac-medium md:py-7 max-w-content-container mx-auto overflow-hidden">
      <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702335829/assets/home/xdttfk68dth46okvu2ef.svg" alt="header" class="position-absolute top-0 end-0 h-100 d-md-none opacity-60" />
      <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702335828/assets/home/xogp12myy767yihl27fx.svg" alt="header" class="d-none position-absolute top-0 start-0 h-100 d-md-block" />
      <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702335828/assets/home/ncqbux3lhshl4h8jfa3s.svg" alt="header" class="d-none position-absolute top-0 end-0 h-100 d-md-block" />
      <div class="position-relative d-flex flex-column align-items-center">
        <h3 class="text-h3 text-center md:text-5xl mb-3 mb-md-4 display-2">
          Contact us
        </h3>
        <span class="text-sm text-center mb-4 mb-md-5 md:max-w-3xl h3">Register your interest and we’ll contact you shortly to <br> provide
          sample materials and arrange a demo.</span>
        <a class="btn btn-primary px-5 py-1 text-sm md:py-0 md:text-base font-medium rounded-md btn-lg" href="/get-in-touch">Get in touch</a>
      </div>
    </div>
  </section>

  <!-- footer -->


  <!--  -->

  <footer class="footer text-center text-md-start">
    <div class="container">
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
                <a href="/research" class="d-block">Research</a>
                <a href="/consultancy" class="d-block">Consultancy</a>
                <a href="/events" class="d-block">Events</a>
                <a href="/about-us" class="d-block">About us</a>
              </div>
            </div>
            <div class="col-6">
              <div class="nav-links">
                <a href="/magazine" class="d-block">Magazine</a>
                <a href="/news" class="d-block">News</a>
                <a href="/careers" class="d-block">Careers</a>
                <a href="/get-in-touch" class="d-block">Get in touch</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-6 text-md-start">
          <p class="copyright">&copy; 2024 Rho Motion. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-md-end">
          <p class="privacy"><a href="/privacy-policy">Privacy Policy</a> • <a href="/terms">Terms & Conditions</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!--  -->




  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>