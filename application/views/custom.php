<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />


</head>

<body>


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

  <header class="custom-banner w-100">
    <div class="overlay"></div>
    <div class="container position-relative pt-4">
      <div class="row">
        <div class="col-12">
          <div class="content">
            <h2>Rho Motion Consultancy</h2>
            <p>Tailored research and custom reports to inform your strategic decision-making</p>
            <a class="btn btn-primary" href="<?= base_url('contact_us') ?>">Get in touch</a>
          </div>
        </div>
      </div>
    </div>
  </header>



  <!-- our services -->
  <section class="custom-section bg-sky-blue-5 py-5">
    <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/v1702261345/assets/consultancy/kn5enxfwlgnjjjep4wtz.svg" class="custom-image" alt="Background Image">
   
    <div class="container content-container">
      <div class="row justify-content-end">
        <div class="col-md-6 py-5">
          <h2 class="text-uppercase text-bright-purple fw-bold mb-3">Our Services</h2>
          <p class="h2 fw-medium mb-4">Unparalleled experience, unique insight and unmatched data</p>
          <p class="lead">We provide commercial and vendor due diligence across the energy transition. From gigafactories to recycling, our dynamic and informed team can support the process.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- custom-about -->
  <section class="custom-about-section">
    <div class="custom-about-overlay d-none d-md-block"></div>
    <div class="container custom-about-content-container text-start">
      <div class="row">
        <div class="col-md-6">
          <h2 class="display-5 fw-medium">Independent, tailored advice for financial organisations involved in the energy transition</h2>
          <p class="lead">Our team has experience working on both the buy and sell side with unique and specialised commercial due diligence. Our comprehensive appraisals unlock the potential and identify paths to success.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- custom-animation -->
  <div class="custom-animation-section bg-primary-800 px-2">
    <div class="flex-grow-1">
      <video class="custom-animation-video w-auto" autoplay playsinline>
        <source src="https://res.cloudinary.com/dkklqdsqc/video/upload/v1705429115/assets/home/Market_Studies_320_pro4444px_ujmrov.mov" type="video/mp4; codecs=&quot;hvc1&quot;">
        <source src="https://res.cloudinary.com/dkklqdsqc/video/upload/v1705430270/assets/home/output_st1zps.webm" type="video/webm">
      </video>
      <p class="fs-4 mt-4 mt-md-5">Market studies</p>
      <p class="fs-6 mt-3 mt-md-5 opacity-80">We provide an overview of the sub-genres across the battery value chain, including regional and country level granularity of supply chains, and competitor landscape.</p>
    </div>
    <div class="flex-grow-1">
      <video class="custom-animation-video w-auto" autoplay playsinline>
        <source src="https://res.cloudinary.com/dkklqdsqc/video/upload/v1705673213/assets/home/Market_Research_320px_pro4444_2_snz9xy.mov" type="video/mp4; codecs=&quot;hvc1&quot;">
        <source src="https://res.cloudinary.com/dkklqdsqc/video/upload/v1705673192/assets/home/output_hwrufc.webm" type="video/webm">
      </video>
      <p class="fs-4 mt-4 mt-md-5">Market research & customer validation</p>
      <p class="fs-6 mt-3 mt-md-5 opacity-80">From major OEMs and public bodies, to technology developers, we source deep and relevant insights through interviews that capture the voice of your customers and identify critical demands for both B2B and B2C audiences.</p>
    </div>
    <div class="flex-grow-1">
      <video class="custom-animation-video w-auto" autoplay playsinline>
        <source src="https://res.cloudinary.com/dkklqdsqc/video/upload/v1705430830/assets/home/Due_Dilligence_320px_pro4444_gstrvl.mov" type="video/mp4; codecs=&quot;hvc1&quot;">
        <source src="https://res.cloudinary.com/dkklqdsqc/video/upload/v1705430900/assets/home/output_ph4ama.webm" type="video/webm">
      </video>
      <p class="fs-4 mt-4 mt-md-5">Due diligence</p>
      <p class="fs-6 mt-3 mt-md-5 opacity-80">We provide due diligence for both the buy and sell side through comprehensive, expert advice that gives you the best chance of deal success.</p>
    </div>
  </div>

  <!-- video-section -->

  <section class="video-section-relative video-section-aspect-ratio d-md-flex align-items-center justify-content-center bg-sky-blue-4">
    <img class="video-section-bg-image d-none d-md-block" src="https://res.cloudinary.com/dkklqdsqc/image/upload/f_auto,q_auto/v1705339164/assets/consultancy/our-consultancy-team_mkabyo.png" alt="Consultancy Team">
    <div class="video-section-overlay d-none d-md-block"></div>
    <div class="video-section-content container py-5">
      <div class="mx-3">
        <h2 class="text-h3 md:text-h2 mb-1 text-sky-blue-5">Our Consultancy Team</h2>
        <p class="text-body-text mb-4 text-sky-blue-5">How we support our clients' investment strategies</p>
        <div class="min-h-12">
          <button class="video-section-button" id="playButton">
            Play video
            <i class="icofont-ui-play"></i>
          </button>
          <div class="video-section-modal" id="videoModal">
            <div class="video-section-modal-content">
              <div class="video-section-video">
                <!-- Video  -->
              </div>
              <button class="video-section-close-button" id="closeButton">
                <img class="https://placehold.co/400" alt="Close">
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- process section -->



  <section class="process bg-primary-300">
    <div class="container py-4">

      <div class="row">
        <h2 class="fw-bold ">OUR PROCESS</h2>
        <div class="col-md-4 text-center mb-4">

          <p class="text-start h2 text-white">How do we conduct our consultancy and advisory work?</p>
        </div>
        <div class="col-md-8">
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card h-70">
                <div class="card-body">
                  <h5 class="card-title">Determine Suitable Companies</h5>
                  <p class="card-text">We use qualitative and semi-quantitative decision criteria to determine suitable companies for review.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-70">
                <div class="card-body">
                  <h5 class="card-title">Determine Suitable Companies</h5>
                  <p class="card-text">We use qualitative and semi-quantitative decision criteria to determine suitable companies for review.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-70">
                <div class="card-body">
                  <h5 class="card-title">Key Trend Analysis</h5>
                  <p class="card-text">We provide in-depth analysis on the key trends that drive decisions and investments across the LiB value chain.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-70">
                <div class="card-body">
                  <h5 class="card-title">Segmenting the Data</h5>
                  <p class="card-text">Our data is segmented in order to identify key trends, so we can size up various opportunities and challenges.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-70">
                <div class="card-body">
                  <h5 class="card-title">Map Out Competitive Landscape</h5>
                  <p class="card-text">We provide detailed insights into the lithium-ion battery value chain in order to map out the competitive landscape.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-70">
                <div class="card-body">
                  <h5 class="card-title">Explore Competitive Rivalry</h5>
                  <p class="card-text">We explore the degree of competitive rivalry and the relationship between buyers and suppliers.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="example-work bg-primary-300 mt-0">

    <div class="container py-5">
      <h3 class="text-center">EXAMPLES OF OUR WORK</h3>
      <p class="text-center">Our consultancy experience spans finance raising, market entry and strategic advisory</p>
      <div class="row py-4">
        <div class="col-md-4 mb-4">
          <div class="case-study ">
            <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/case-study-icons/case-study-01.98b84c.svg" class="py-4" alt="">
            <h5 class="">CASE STUDY 1</h5>
            <h6 class="fw-bold py-2">Next-generation battery technologies</h6>
            <p>We provided bottom-up cost models for the next-generation anode, cathode and electrolyte innovations for lithium-ion and sodium-ion batteries as a basis for future strategy and investment decisions on behalf of a major public body.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="case-study ">
            <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/case-study-icons/case-study-01.98b84c.svg" class="py-4" alt="">
            <h5 class="">CASE STUDY 1</h5>
            <h6 class="fw-bold py-2">Next-generation battery technologies</h6>
            <p>We provided bottom-up cost models for the next-generation anode, cathode and electrolyte innovations for lithium-ion and sodium-ion batteries as a basis for future strategy and investment decisions on behalf of a major public body.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="case-study ">
            <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/case-study-icons/case-study-01.98b84c.svg" class="py-4" alt="">
            <h5 class="">CASE STUDY 1</h5>
            <h6 class="fw-bold py-2">Next-generation battery technologies</h6>
            <p>We provided bottom-up cost models for the next-generation anode, cathode and electrolyte innovations for lithium-ion and sodium-ion batteries as a basis for future strategy and investment decisions on behalf of a major public body.</p>
          </div>
        </div>


      </div>
      <div class="row py-2">
        <div class="col-md-4 mb-4">
          <div class="case-study ">
            <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/case-study-icons/case-study-01.98b84c.svg" class="py-4" alt="">
            <h5 class="">CASE STUDY 1</h5>
            <h6 class="fw-bold py-2">Next-generation battery technologies</h6>
            <p>We provided bottom-up cost models for the next-generation anode, cathode and electrolyte innovations for lithium-ion and sodium-ion batteries as a basis for future strategy and investment decisions on behalf of a major public body.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="case-study ">
            <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/case-study-icons/case-study-01.98b84c.svg" class="py-4" alt="">
            <h5 class="">CASE STUDY 1</h5>
            <h6 class="fw-bold py-2">Next-generation battery technologies</h6>
            <p>We provided bottom-up cost models for the next-generation anode, cathode and electrolyte innovations for lithium-ion and sodium-ion batteries as a basis for future strategy and investment decisions on behalf of a major public body.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="case-study ">
            <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/case-study-icons/case-study-01.98b84c.svg" class="py-4" alt="">
            <h5 class="">CASE STUDY 1</h5>
            <h6 class="fw-bold py-2">Next-generation battery technologies</h6>
            <p>We provided bottom-up cost models for the next-generation anode, cathode and electrolyte innovations for lithium-ion and sodium-ion batteries as a basis for future strategy and investment decisions on behalf of a major public body.</p>
          </div>
        </div>


      </div>

  </section>


  <!-- get in touch form -->




  <!--  -->



  <section>
    <div class="con-wrapper">
      <div class="container-xxl">
        <div class="row text-start">
          <!-- Left Column -->
          <div class="col-md-5 d-flex flex-column justify-content-center position-relative p-0">
            <picture class="w-100 h-100">
              <source media="(min-width: 768px)" srcset="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701786601/assets/consultancy/consulting-contact_lf62dg_kr9cgs.jpg">
              <img class="position-absolute top-0 left-0 w-100 h-100 object-cover object-right-top" src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701786600/assets/consultancy/consulting-contact-mobile_w4syry_eed7cu.png" aria-hidden="true">
            </picture>
            <div class="d-none d-md-block position-absolute bg-black opacity-50 top-0 left-0 w-100 h-100"></div>
            <div class="position-relative text-white w-100 px-5 py-3 bg-sky-blue-5 bg-transparent-md">
              <h2 class="text-uppercase fw-semibold text-bright-purple text-sky-blue-4-md mb-2">Consultancy Team</h2>
              <p class="fs-5 fs-4-md fw-semibold mb-4">Independent, tailored advice for your business</p>
              <p class="mb-4">Our consultancy team brings a breadth of industry experience across the EV value chain and wider energy mix; from raw materials extraction through anode, cathode and battery cell technologies, charging, BESS, and battery recycling.</p>
              <p>To speak to our team about your consultancy project, call us on +44 (0) 203 988 7648, or email info@rhomotion.com</p>
            </div>
          </div>
          <!-- Right Column -->
          <div class="col-md-7 bg-sky-blue-5 p-4 bg-primary-200">
            <div class="px-5 mx-5">
              <h2>Get in touch</h2>
              <p>Contact us to discuss our products and how they can support you.</p>
              <form enctype="multipart/form-data" method="post">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Name" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="email@youremailaddress.com" required>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone number <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text">+123</span>
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="2290 0238376" required>
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="jobTitle" class="form-label">Job title</label>
                    <input type="text" id="jobTitle" name="jobTitle" class="form-control" placeholder="Job">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="companyName" class="form-label">Company Name <span class="text-danger">*</span></label>
                    <input type="text" id="companyName" name="companyName" class="form-control" placeholder="Your company name" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="industry" class="form-label">Industry</label>
                  <input type="text" id="industry" name="industry" class="form-control" placeholder="Industry">
                </div> -->
                <button type="submit" class="btn btn-primary">Register interest</button>
                <p class="py-4">By submitting this form, you agree to Rho Motion’s privacy policy.</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



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
                <a href="<?= base_url('reports') ?>" class="d-block">Eco System Reports</a>
                <a href="<?= base_url('custom_page') ?>" class="d-block" id="custom_page">Custom Requirements</a>
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



  <!-- scripts -->



  <!-- script for play/pause -->
  <!-- <script>
    document.getElementById('playButton').addEventListener('click', function() {
      document.getElementById('videoModal').style.display = 'flex';
    });
    document.getElementById('closeButton').addEventListener('click', function() {
      document.getElementById('videoModal').style.display = 'none';
    });
  </script> -->
  <script src= "<?= base_url('assets/js/footer.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


</body>

</html>