<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surveys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <style>
        .survey-card{
            width: 15rem;
            
        }
        .survey-card .card-body{

            /* background-color: var(--primary-600); */
        }
    </style>
</head>

<body>

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
                        <a class="nav-link text-dark fw-normal  " href="/research">Eco System Report </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal " href="/consultancy">Custom Requirements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal " href="/events">Surveys</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal " href="/get-in-touch">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- grid section -->

    <div class="container-xxl bg-primary-200 text-center p-4  justify-content-around" >
        <div class="row py-2">
            <div class="col-md-4">
                <div class="card survey-card" >
                    <img class="card-img-top" src="https://placehold.co/50" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">EV</h5>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4">
                    <div class="card survey-card">
                        <img class="card-img-top" src="https://placehold.co/50" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Solar</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4">
                    <div class="card survey-card" >
                        <img class="card-img-top" src="https://placehold.co/50" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Wind</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md-4">
                <div class="col-md-4">
                    <div class="card survey-card" >
                        <img class="card-img-top" src="https://placehold.co/50" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Hydrogen</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4">
                    <div class="card survey-card" >
                        <img class="card-img-top" src="https://placehold.co/50" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Oil & Gas</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4">
                    <div class="card survey-card" >
                        <img class="card-img-top" src="https://placehold.co/50" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Power & Utilty</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

































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
</body>

</html>