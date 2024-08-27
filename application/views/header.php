<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecosystem</title>
    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
</head>

<body>

    <nav class="navbar navbar-expand-md bg-white py-4">
        <div class="container-fluid">
            <a class="navbar-brand " href="<?= base_url('') ?>">


                <img src="<?= base_url('assets/images/final-logo-ecosystem.png') ?>" class="w-100 h-80" alt="home-page-banner">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="icofont-navigation-menu fs-30"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center" style="gap: 1.5rem; ">
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-normal" href="<?= base_url('reports') ?>"> Reports</a>
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
                    <li class="nav-item">
                        <h1 class="icofont-navigation-menu fs-22" id="off-menu-toggler" style="margin-right: 5px; cursor: pointer;"></h1>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ham menu -->
        <div class="off-menu-nav " id="off-menu-nav">
            <div class="d-flex flex-row center-align company-info">
                <div class="wrapper">
                    <h3 class="getin">Get in touch</h3>
                    <p class="address">Eninrac Consulting Private Limited<br>2nd Floor, B-130, B-Block<br>Sector 65, Noida - 201301</p>
                    <div class="fs-sm">
                        <p class="mb-0">+91 9319048963</p>
                        <p>connect@eninrac.com</p>
                    </div>
                    <!-- social media icons -->
                    <div class="d-flex gap-4 my-4 ">
                        <a href="https://www.linkedin.com/in/eninrac-consulting-88641719b/" target="_blank" rel="noreferrer" class="p-0">
                            <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-linkedin.5fd894.svg" alt="LinkedIn">
                        </a>
                        <a href="https://x.com/i/flow/login?redirect_after_login=%2Feninrac" target="_blank" rel="noreferrer" class="p-0">
                            <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-x.290b8c.svg" alt="Twitter">
                        </a>
                    </div>
                    <!-- subscribe to news letter -->
                    <div class="d-flex flex-column my-4 py-4">
                        <label for="" class="subscribe-heading">Subscribe to our newsletter</label>
                        <div class="my-1 subscribe-form ">
                            <input type="email" name="" id="" placeholder="Your work Email">
                            <button type="button" class="my-4">Subscribe</button>
                            <p class="my-1">By submitting this form, you agree to Rho Motion’s <u>privacy policy.</u></p>
                        </div>
                    </div>
                </div>
                <div class="services">

                    <div class="nav-links d-flex flex-column ">
                        <span class="off-menu-close" id="off-menu-close"><i class="icofont-close "></i></span>
                        <a href="<?= base_url('reports') ?>" class="" id="reports">Reports</a>
                        <a href="<?= base_url('custom_page') ?>" class="" id="custom_page">Custom Requirements</a>
                        <a href="<?= base_url('event') ?>" class="" id="event">Surveys & VoC</a>
                        <a href="<?= base_url('contact_us') ?>" class="">About us</a>
                        <button type="button" class="login-btn">login</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>