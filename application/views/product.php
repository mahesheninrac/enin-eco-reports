<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />



</head>

<body>
    <!-- navbar   -->
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
                        <i class="icofont-navigation-menu fs-22" style=" margin-right: 5px"></i>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- banner -->


    <div class="overflow-hidden product-hero container-fluid  " style="padding:0 0 6.5rem 0;">
        <div class="hero-section  d-flex flex-column flex-md-row align-items-center justify-content-center">
            <div class="text-container flex-grow-1 flex-basis-100 flex-md-basis-45">
                <div class=" " style="max-width: 80%;">
                    <p class="w-100 h1" style="font-size: 3.125rem; line-height: 4.25rem;        font-weight: 400;">Battery Demand <br> Outlook Services</p>
                    <p class="mt-4 text-start" style="font-size: 1rem; font-weight:400;letter-spacing:-0.01rem">Our Battery Demand Outlook Service provides you with a complete overview of global battery demand across all end use markets, with in depth analysis across EV (BEV, PHEV, HEV, FCEV), stationary storage (grid & BTM), two & three wheeler, micromobility, portables, and Non-road Mobile Machinery markets so that you can make more informed decisions.</p>
                    <div class="pt-1">
                        <a href="#demo-section">
                            <button type="button" class=" fw-bold btn btn-primary px-4 py-2 rounded-md mx-auto ">Request Demo</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="video-container flex-grow-1 flex-basis-100 flex-md-basis-55 ">
                <img src="https://rhomotion.com/app/uploads/2023/12/Vector-3.svg" alt="Battery Demand Outlook" class="img-fluid">
            </div>
        </div>
    </div>


    <!--services  -->

    <div class="container-fluid service-ribbon ">
        <div class="row row-cols-1 row-cols-md-4 gy-4">
            <div class="col d-flex align-items-center justify-content-md-center px-4 py-2 text-center">
                <div class="min-w-2">
                    <img src="https://placehold.co/50" alt="">
                    <p class="text-base leading-5 mt-0 mt-md-3 ml-4 ml-md-0 text-white">PDF &amp; Excel</p>
                </div>

            </div>
            <div class="col d-flex align-items-center justify-content-md-center px-4 py-2 text-center">
                <div class="min-w-3">
                    <img src="https://placehold.co/50" alt="">
                    <p class="text-base leading-5 mt-0 mt-md-3 ml-4 ml-md-0 text-white">Released quarterly</p>
                </div>

            </div>
            <div class="col d-flex align-items-center justify-content-md-center px-4 py-2 text-center">
                <div class="min-w-3">
                    <img src="https://placehold.co/50" alt="">
                    <p class="text-base leading-5 mt-0 mt-md-3 ml-4 ml-md-0 text-white"> Customisable</p>
                </div>

            </div>
            <div class="col d-flex align-items-center justify-content-md-center px-4 py-2 text-center">
                <div class="min-w-3">
                    <img src="https://placehold.co/50" alt="">
                    <p class="text-base leading-5 mt-0 mt-md-3 ml-4 ml-md-0 text-white">Analyst access</p>
                </div>

            </div>

        </div>
    </div>
    <!-- Interested in a sample report -->

    <div class="container-xxl w-100 mx-0 bg-primary-800 py-4 ">


        <div class="d-flex justify-content-around align-item-center">
            <img src="https://placehold.co/200" class="py-4" alt="">
            <div class="py-4 text-white">
                <H1>Interested in a sample report?</H1>
                <p class="w-60">Register your interest and we’ll contact you shortly to provide sample materials and arrange a demo.</p>
                <a href="<?= base_url("/reports") ?>">
                    <button type="button" class="btn btn-primary px-4 py-2 rounded-md mx-auto ">Get Reports</button>
                </a>

            </div>
        </div>
    </div>



    <!-- included -->
     <!-- pt-3 pb-2 pt-md-4 pb-md-5 -->
    <section class="overflow-hidden what_included fw-bold">
        <div class="container-fluid text-center px-3 px-md-0">
            <div class="min-h-4">
                <h3 class="" style="font-size: 2.25rem; line-height:1.125;font-weight:600">What&#39;s included?</h3>
                <div class="text-center" style="font-size: 1rem; font-weight:500; line-height:1.6rem;text-align: left;">
                    <p>Battery Demand Outlook Service combines all our battery outlooks in one place,<br> providing a comprehensive view of total battery demand. Reports include:</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-3 g-md-4 mx-1">
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <img class="me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <h4 class="h6 mb-0 h2 fw-bold fs-20">EV & Battery Quarterly Outlook</h4>
                            </div>
                            <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="mt-1">Learn more</a>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="https://res.cloudinary.com/dkklqdsqc/images/w_2020,h_1556,c_scale/f_auto,q_auto/v1705414241/wp_production/EV-and-battery/EV-and-battery.png?_i=AA" alt="EV and Battery">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <img class="me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <h4 class="h6 mb-0 h2 fw-bold fs-20">EV & Battery Quarterly Outlook</h4>
                            </div>
                            <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="mt-1">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="https://res.cloudinary.com/dkklqdsqc/images/w_2020,h_1556,c_scale/f_auto,q_auto/v1705414241/wp_production/EV-and-battery/EV-and-battery.png?_i=AA" alt="EV and Battery">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <img class="me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <h4 class="h6 mb-0 h2 fw-bold fs-20">EV & Battery Quarterly Outlook</h4>
                            </div>
                            <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="mt-1">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="https://res.cloudinary.com/dkklqdsqc/images/w_2020,h_1556,c_scale/f_auto,q_auto/v1705414241/wp_production/EV-and-battery/EV-and-battery.png?_i=AA" alt="EV and Battery">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <img class="me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <h4 class="h6 mb-0 h2 fw-bold fs-20">EV & Battery Quarterly Outlook</h4>
                            </div>
                            <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="mt-1">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="https://res.cloudinary.com/dkklqdsqc/images/w_2020,h_1556,c_scale/f_auto,q_auto/v1705414241/wp_production/EV-and-battery/EV-and-battery.png?_i=AA" alt="EV and Battery">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <img class="me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <h4 class="h6 mb-0 h2 fw-bold fs-20">EV & Battery Quarterly Outlook</h4>
                            </div>
                            <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="mt-1">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <section class="">
            <div class="container-fluid mt-5">
                <div class="faq-section">
                    <div class="faq-item border-top border-dark">
                        <h3 class="faq-question">How is the report delivered? <span><i class="icofont-arrow-right"></i></span></h3>
                        <div class="faq-answer">
                            <p>The service is provided via our reports and data files, with a consolidated total battery demand file.</p>
                        </div>
                    </div>
                    <div class="faq-item   border-top border-bottom border-dark">
                        <h3 class="faq-question ">What does the product cost? <span><i class="icofont-arrow-right"></i></span></h3>
                        <div class="faq-answer ">
                            <p>The product cost varies depending on the specifications and requirements of the client. Please contact us for detailed pricing.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>


    </section>



    <!-- demooo -->

    <section class="position-relative  demo-section" id="demo-section">
        <div class="container-xxl  demo-section-left
        ">
            <div class="row no-gutters ">
                <div class="col-md-6 d-flex flex-column  text-white justify-content-center align-items-center ">
                    <h2 class="text-sky-blue-5 mb-3 text-center  fw-bold ">
                        Request demo
                    </h2>
                    <p class="text-sky-blue-5 mb-4 text-center" style="max-width:400px;">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab necessitatibus sint facere quia, ducimus similique
                    </p>

                </div>

                <!-- section for form -->
                <div class="col-md-6 p-0 w-50 overflow-hidden   demo-section-right">
                    <div class="demo-form-section ">
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
                                    <span class="input-group-text">+91</span>
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="XXXXXXXXXX" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary px-2 py-2">Request Demo</button>
                            <p class="py-4 fs-14">By submitting this form, you agree to Eninrac’s <u>privacy policy</u>.</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- related products -->

    <section class="bg-primary-300 px-1 py-4">
        <h1 class=" py-4 mx-1 h2">Related Products</h1>

        <div class="container-xxl d-flex flex-wrap gap-2  py-2 justify-content-around">
            <div class="" style="width: 15rem;">
                <img class="card-img-top rounded-lg" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ipad_frame_2.373b58.png" alt="Card image cap">
                <div class="border-0 py-4 text-start">
                    <p class="card-text fw-bold ">Some quick example text</p>
                </div>
            </div>
            <div class="" style="width: 15rem;">
                <img class="card-img-top rounded-lg" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ipad_frame_2.373b58.png" alt="Card image cap">
                <div class="border-0 py-4 text-start">
                    <p class="card-text fw-bold ">Some quick example text</p>
                </div>
            </div>
            <div class="" style="width: 15rem;">
                <img class="card-img-top rounded-lg" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ipad_frame_2.373b58.png" alt="Card image cap">
                <div class="border-0 py-4 text-start">
                    <p class="card-text fw-bold ">Some quick example text</p>
                </div>
            </div>
            <div class="" style="width: 15rem;">
                <img class="card-img-top rounded-lg" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ipad_frame_2.373b58.png" alt="Card image cap">
                <div class="border-0 py-4 text-start">
                    <p class="card-text fw-bold ">Some quick example text</p>
                </div>
            </div>
            <!-- Add New Products  -->


            <!-- <div class="" style="width: 15rem;">
                <img class="card-img-top rounded-lg" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ipad_frame_2.373b58.png" alt="Card image cap">
                <div class="border-0 py-4 text-start">
                    <p class="card-text fw-bold ">Some quick example text</p>
                </div>
            </div> -->

        </div>





    </section>


    <!-- footer -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const faqItems = document.querySelectorAll(".faq-item");

            faqItems.forEach(item => {
                const question = item.querySelector(".faq-question");
                question.addEventListener("click", () => {
                    item.classList.toggle("active");
                    const arrow = question.querySelector("span");
                    if (item.classList.contains("active")) {
                        arrow.innerHTML = `<i class="icofont-arrow-down arrow" ></i>`;
                    } else {
                        arrow.innerHTML = item.querySelector(".faq-answer").style.display === 'none' ? "" : `<i class="icofont-arrow-right "></i>`;
                    }
                });
            });
        });
    </script>
    <script src="<?= base_url('assets/js/footer.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


</body>

</html>