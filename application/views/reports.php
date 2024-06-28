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
      max-height: 400px;
      /* Adjust this height as needed */
      overflow-y: auto;
    }

    .content-section.active {
      display: block;
    }

    .container-xxl {
      position: sticky;
      top: 10px;
      background: white;
      /* Optional: to avoid content overlapping */
      z-index: 1000;
      /* Optional: to ensure it stays above other elements */
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
            <a class="nav-link text-dark fw-normal" href="/research">Research</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-normal" href="/consultancy">Consultancy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-normal" href="/events">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-normal" href="/get-in-touch">Get in touch</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- header -->

  <header class="report-header report-header-lg text-center px-3 px-lg-5">
    <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702262499/assets/magazine/hn4cpe8bbs7ponn1bch4.svg" alt="Background Image">
    <div class="relative">
      <h1 class="display-4">Research</h1>
      <p>Actionable intelligence to inform your strategic and commercial decision making</p>
    </div>
  </header>

  <div class="container-xxl mt-4">
    <!-- First row with buttons -->
    <div class="row mb-4">
      <div class="col">
        <button type="button" class="btn btn-primary w-100" id="btn-solar">Solar</button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary w-100" id="btn-wind">Wind</button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary w-100" id="btn-coal">Coal</button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary w-100" id="btn-hydrogen">Hydrogen</button>
      </div>
    </div>

    <!-- Second row with two columns -->
    <div class="row py-1">
      <div class="col-3">
        <ul class="list-group">
          <li id="nav-solar" class="list-group-item py-3">Market Sizing</li>
          <li id="nav-wind" class="list-group-item py-3">Future Outlook</li>
          <li id="nav-coal" class="list-group-item py-3">Focus Reports</li>
          <li id="nav-hydrogen" class="list-group-item py-3">Thematic Reports</li>
          <li id="nav-hydrogen" class="list-group-item py-3">Databases</li>
          <li id="nav-hydrogen" class="list-group-item py-3">Surveys</li>
        </ul>
      </div>
      <div class="col-9">
        <!-- Content sections -->
        <div id="content-solar" class="content-section active">
          <h2>Solar</h2>
          <p>Content related to Solar energy goes here...
            tempore, beatae amet aspernatur non voluptate voluptatem.</p>
        </div>
        <div id="content-wind" class="content-section">
          <h2>Wind</h2>
          <p>Content related to Wind energy goes here...</p>
        </div>
        <div id="content-coal" class="content-section">
          <h2>Coal</h2>
          <p>Content related to Coal energy goes here...</p>
        </div>
        <div id="content-hydrogen" class="content-section">
          <h2>Hydrogen</h2>
          <p>Content related to Hydrogen energy goes here...</p>
        </div>
      </div>
    </div>
  </div>

  <!-- main section -->
  <section>
    <div>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script>
    // JavaScript to handle button clicks and toggle content
document.getElementById('btn-solar').addEventListener('click', function () {
  showContent('content-solar');
  highlightNavItem('nav-solar');
});

document.getElementById('btn-wind').addEventListener('click', function () {
  showContent('content-wind');
  highlightNavItem('nav-wind');
});

document.getElementById('btn-coal').addEventListener('click', function () {
  showContent('content-coal');
  highlightNavItem('nav-coal');
});

document.getElementById('btn-hydrogen').addEventListener('click', function () {
  showContent('content-hydrogen');
  highlightNavItem('nav-hydrogen');
});

function showContent(contentId) {
  // Hide all content sections
  var contents = document.querySelectorAll('.content-section');
  contents.forEach(function (content) {
    content.classList.remove('active');
  });

  // Show the selected content section
  document.getElementById(contentId).classList.add('active');
}

function highlightNavItem(navItemId) {
  // Remove highlight from all nav items
  var navItems = document.querySelectorAll('.list-group-item');
  navItems.forEach(function (item) {
    item.innerHTML = item.innerHTML.replace('<i class="icofont-long-arrow-right"></i>', '');
  });

  // Add highlight to the selected nav item
  var selectedItem = document.getElementById(navItemId);
  selectedItem.innerHTML = selectedItem.innerHTML + '<i class="icofont-long-arrow-right"></i>';
}

  </script>
</body>

</html>