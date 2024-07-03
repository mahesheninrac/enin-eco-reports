<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact us</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
</head>

<body>
  <!-- navbar section -->
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

  <section class="contact-us-form">
    <div class="con-wrapper">
      <div class="container-xxl">
        <div class="row text-start">
          <!-- Left Column -->
          <div class="col-md-5 bg-sky-blue-4 d-flex  justify-content-center position-relative  bg-primary-300 p-5">
            <!-- <img class="position-absolute bottom-0 start-0 d-none d-md-block" src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702261525/assets/get-in-touch/wa3vz0twauapwmkbsamy.svg" aria-hidden="true"> -->
            <div>
              <h2>Our offices</h2>
              <p>Second Floor, Randall House<br>6 Dowgate Hill<br>London EC4R 2SU</p>
              <p>
                <a href="tel:+4402039887648">+44 (0) 203 988 7648</a><br>
                <a href="mailto:info@rhomotion.com">info@rhomotion.com</a>
              </p>
              <div class="py-1">
                <h2>Press Enquiries</h2>
                <p>
                  <a href="mailto:press@rhomotion.com">press@rhomotion.com</a>
                </p>
              </div>
              <div class="py-1">
                <h2>Want to work with us?</h2>
                <p style="  max-width: 300px;">We're always looking for new talent and would love to hear from you.</p>
                <p>
                  <a href="mailto:careers@rhomotion.com">careers@rhomotion.com</a>
                </p>
              </div>

              <a href="https://www.google.com/" class="btn btn-primary  btn-md rounded-md px-3 py-2 font-medium">See open positions</a>
            </div>
          </div>
          <!-- Right Column -->
          <div class="col-md-7 bg-sky-blue-5 bg-primary-200 p-5 ">
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
                <button type="submit" class="btn btn-primary px-2 py-2">Register interest</button>
                <p class="py-4 fs-14">By submitting this form, you agree to Rho Motion’s <u>privacy policy</u>.</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>




  <!-- footer -->
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
                <a href="/research" class="d-block">Eco System Reports</a>
                <a href="/consultancy" class="d-block">Custom Requirements</a>
                <a href="/events" class="d-block">Surveys & VOC</a>
                <a href="/about-us" class="d-block">About us</a>
              </div>
            </div>
            <div class="col-6">
              <div class="nav-links">
                <a href="<?= base_url('reports') ?>" class="d-block">Eco System Reports</a>
                <a href="<?= base_url('custom_page') ?>" class="d-block">Custom Requirements</a>
                <a href="<?= base_url('event') ?>" class="d-block">Surveys & VOC</a>
                <a href="<?= base_url('contact_us') ?>" class="d-block" id="contact_us">Contact us</a>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/js/footer.js') ?>"></script>
</body>

</html>