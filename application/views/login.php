<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
</head>

<body>
    <!-- navbar section -->
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



    <section>
        <div class="container-fluid">
            <div class="row min-vh-100">
                <div class="col-md-6 bg-light-gray d-flex flex-column justify-content-center pb-3 bg-primary-300">
                    <div class="mx-auto w-100" style="max-width: 26.62rem;">
                        <div class="d-md-none mb-3" style="background-image: url('https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702262167/assets/login/fn7ivzeowadop4aega5o.svg'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 8.75rem;">
                            <div class="w-100 mx-auto px-3">
                                <h3 class="text-sm text-bright-purple">RHO MOTION</h3>
                                <h1 class="display-5 text-purple">Membership</h1>
                            </div>
                        </div>
                        <div class="pt-3 px-3">
                            <div class="d-none d-md-block">
                                <h3 class="h4 text-bright-purple">RHO MOTION</h3>
                                <h2 class="display-1 text-purple">Membership</h2>
                            </div>
                            <p class="text-sm text-purple mb-4">Welcome back, please log in to your account</p>
                            <form action="" method="POST">
                                <input type="hidden" name="_token">
                                <div class="mb-2">
                                    <label for="username" class="sr-only ">Username</label>
                                    <input data-testid="username-input" id="username" name="log" type="text" autocomplete="username" placeholder="Username" required class="form-control bg-white py-3">
                                </div>
                                <div class="mb-2">
                                    <label for="password" class="sr-only">Password</label>
                                    <input data-testid="password-input" id="password" name="pwd" type="password" autocomplete="current-password" placeholder="Password" required class="form-control py-3">
                                </div>
                                <div class="d-flex justify-content-between mt-3 mb-4">
                                    <div class="form-check">
                                        <input id="remember_me" name="remember_me" type="checkbox" class="form-check-input">
                                        <label for="remember_me" class="form-check-label">Remember me</label>
                                    </div>
                                    <div class="text-sm">
                                        <a href="/recover-password" class="text-grey font-medium">Forgot password?</a>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" data-testid="login-button" class="btn btn-primary text-white py-2 px-4 rounded-md">Login</button>
                                </div>
                            </form>
                            <div class="mt-4 min-width-max-content ">
                                <h4 class="fw-bold">Having trouble logging in </h4>
                                <p class="text-purple text-sm">Contact us at +44 (0) 203 988 7648 or info@rhomotion.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 bg-lighter-lavender d-none d-md-block bg-primary-200" style="background-image: url('https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702333631/assets/login/xswlst3ycfqof9l7qwwh.svg'); background-repeat: no-repeat; background-position: center; background-size: 50vw 51.75rem;"></div> -->
                <div class="col-md-6 bg-lighter-lavender d-none d-md-block bg-primary-200" style="background-image: url('https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702333631/assets/login/xswlst3ycfqof9l7qwwh.svg'); background-repeat: no-repeat; background-position: center; background-size: 50vw 51.75rem;"></div>
            </div>
        </div>

    </section>



    <!-- footer -->
    <footer class="footer text-center text-md-start ">
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
                    <a href="/privacy-policy" class="me-3">Privacy Policy</a>
                    <a href="/terms-conditions">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>