<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />

    <style>
        .nav-tabs .nav-link.active {
            border-color: #563d7c #563d7c #fff;
            color: #563d7c;
        }

        .event-card {
            background-color: #f8f9fa;
            border: none;
            margin-bottom: 1.5rem;
        }

        .event-card img {
            height: 100%;
            object-fit: cover;
        }

        .event-card .card-body {
            padding: 1.25rem;
        }

        .event-date {
            font-weight: bold;
            font-size: 1.2rem;
        }

        .event-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .event-description {
            font-size: 1rem;
            color: #6c757d;
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





    <!--banner section  -->

    <header class="event-banner-relative bg-primary-400 px-3  py-5 px-md-5 overflow-hidden">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <picture>
                        <source media="(min-width: 768px)" srcset="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701983968/assets/event-archive/hkskl3wi4ebtqhy36ntx.svg">
                        <img class="event-banner-absolute top-0 end-0 h-100 w-50 object-fit-cover" src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701983968/assets/event-archive/uoadj24f0mnn0dtx3g6r.svg" aria-hidden="true">
                    </picture>
                </div>
                <div class="col-md-6 order-md-1 d-flex flex-column justify-content-center">
                    <div class="text-start text-md-start">
                        <h1 class="event-banner-text-h4 mb-3 text-primary fw-bold py-2">RHO MOTION EVENTS</h1>
                        <p class="mb-3 lead display-5">Connecting you with key players across the energy transition</p>
                        <p class="mb-4 py-2 fs-20">Rho Motion events are a forum for learning, discussion and collaboration. They offer outstanding opportunities for networking and market insights into the challenges and opportunities facing the sector.</p>
                        <a class="btn btn-primary py-2" href="#events">See full event list</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- events -->

    <section class="tabs-section  bg-primary-300 py-4 px-5">

        <div class="container-xxl  ">
            <h1 class="p-4 fw-bold">Events</h1>
            <!-- Tab Navigation -->
            <ul class="nav nav-tabs nav-fill py-5 " id="eventTabs" role="tablist">
                <li class="nav-item " role="presentation">
                    <div class="nav-link  active px-2 py-4 text-dark" id="all-events-tab" data-bs-toggle="tab" data-bs-target="#all-events" type="button" role="tab" aria-controls="all-events" aria-selected="true">All Events</div>

                </li>
                <li class="nav-item" role="presentation">
                    <!-- <button class="nav-link" id="live-events-tab" data-bs-toggle="tab" data-bs-target="#live-events" type="button" role="tab" aria-controls="live-events" aria-selected="false">Live Events</button> -->
                    <div class="nav-link  px-2 py-4 text-dark" id="all-events-tab" data-bs-toggle="tab" data-bs-target="#live-events" type="button" role="tab" aria-controls="all-events" aria-selected="true">Live Events</div>
                </li>
                <li class="nav-item" role="presentation">
                    <!-- <button class="nav-link" id="webinars-tab" data-bs-toggle="tab" data-bs-target="#webinars" type="button" role="tab" aria-controls="webinars" aria-selected="false">Webinars</button> -->
                    <div class="nav-link  px-2 py-4 text-dark" id="all-events-tab" data-bs-toggle="tab" data-bs-target="#webinars" type="button" role="tab" aria-controls="all-events" aria-selected="true"> Webinars</div>
                </li>
                <li class="nav-item" role="presentation">
                    <!-- <button class="nav-link" id="past-events-tab" data-bs-toggle="tab" data-bs-target="#past-events" type="button" role="tab" aria-controls="past-events" aria-selected="false">Past Events</button> -->
                    <div class="nav-link  px-2 py-4 text-dark" id="all-events-tab" data-bs-toggle="tab" data-bs-target="#past-events" type="button" role="tab" aria-controls="all-events" aria-selected="true">Past Events</div>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="eventTabsContent">
                <!-- All  -->
                <div class="tab-pane fade show active" id="all-events" role="tabpanel" aria-labelledby="all-events-tab">
                    <div class="row">
                        <div class="col-12 col-md-12 mb-3">


                            <div class="card flex-row mb-4">
                                <div class="d-flex flex-column align-items-center p-3">
                                    <span class="badge bg-bright-purple mb-2">Online Event</span>
                                    <p class="text-center mb-0">25 Jun 2024</p>
                                </div>
                                <div class="d-flex align-items-center mx-3">
                                    <hr class="w-7 my-0">
                                </div>
                                <div class="card-body">
                                    <p class="mb-1 text-h5 text-bright-purple"></p>
                                    <h3 class="card-title mb-3">Ebbs &amp; Flows: The Evolution of the EV Charging Market</h3>
                                    <p class="card-text">Register now for our latest webinar on the energy transition in the EV charging industry. Join our Charging Analyst team as they explore the evolving EV charging.</p>
                                </div>
                                <div class="col-md-4">
                                    <img class="img-fluid rounded-start" src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1705420729/wp_production/Webinar-3294px-x-1632px-for-Website/Webinar-3294px-x-1632px-for-Website.png?_i=AA" alt="Webinar Image">
                                </div>
                            </div>


                        </div>
                    </div>


                    <!-- Add more events similarly -->
                </div>
            </div>
            <!-- Live Events -->
            <div class="tab-pane fade" id="live-events" role="tabpanel" aria-labelledby="live-events-tab">
                <!-- Live Events content -->


            </div>
            <div class="tab-pane fade show active" id="all-events" role="tabpanel" aria-labelledby="all-events-tab">
                <div class="row">
                    <div class="col-12 col-md-12 mb-3">


                        <div class="card flex-row mb-4">
                            <div class="d-flex flex-column align-items-center p-3">
                                <span class="badge bg-bright-purple mb-2">Online Event</span>
                                <p class="text-center mb-0">25 Jun 2024</p>
                            </div>
                            <div class="d-flex align-items-center mx-3">
                                <hr class="w-7 my-0">
                            </div>
                            <div class="card-body">
                                <p class="mb-1 text-h5 text-bright-purple"></p>
                                <h3 class="card-title mb-3">Ebbs &amp; Flows: The Evolution of the EV Charging Market</h3>
                                <p class="card-text">Register now for our latest webinar on the energy transition in the EV charging industry. Join our Charging Analyst team as they explore the evolving EV charging.</p>
                            </div>
                            <div class="col-md-4">
                                <img class="img-fluid rounded-start" src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1705420729/wp_production/Webinar-3294px-x-1632px-for-Website/Webinar-3294px-x-1632px-for-Website.png?_i=AA" alt="Webinar Image">
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Webinars -->
                <div class="tab-pane fade" id="webinars" role="tabpanel" aria-labelledby="webinars-tab">
                    <!-- Webinars content -->
                    <div class="tab-pane fade show active" id="all-events" role="tabpanel" aria-labelledby="all-events-tab">
                        <div class="tab-pane fade show active" id="all-events" role="tabpanel" aria-labelledby="all-events-tab">
                            <div class="row">
                                <div class="col-12 col-md-12 mb-3">


                                    <div class="card flex-row mb-4">
                                        <div class="d-flex flex-column align-items-center p-3">
                                            <span class="badge bg-bright-purple mb-2">Online Event</span>
                                            <p class="text-center mb-0">25 Jun 2024</p>
                                        </div>
                                        <div class="d-flex align-items-center mx-3">
                                            <hr class="w-7 my-0">
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-1 text-h5 text-bright-purple"></p>
                                            <h3 class="card-title mb-3">Ebbs &amp; Flows: The Evolution of the EV Charging Market</h3>
                                            <p class="card-text">Register now for our latest webinar on the energy transition in the EV charging industry. Join our Charging Analyst team as they explore the evolving EV charging.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img class="img-fluid rounded-start" src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1705420729/wp_production/Webinar-3294px-x-1632px-for-Website/Webinar-3294px-x-1632px-for-Website.png?_i=AA" alt="Webinar Image">
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Past Events -->
                    <div class="tab-pane fade" id="past-events" role="tabpanel" aria-labelledby="past-events-tab">
                        <!-- Past Events content -->

                        <div class="tab-pane fade show active" id="all-events" role="tabpanel" aria-labelledby="all-events-tab">
                            <div class="row">
                                <div class="col-12 col-md-12 mb-3">


                                    <div class="card flex-row mb-4">
                                        <div class="d-flex flex-column align-items-center p-3">
                                            <span class="badge bg-bright-purple mb-2">Online Event</span>
                                            <p class="text-center mb-0">25 Jun 2024</p>
                                        </div>
                                        <div class="d-flex align-items-center mx-3">
                                            <hr class="w-7 my-0">
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-1 text-h5 text-bright-purple"></p>
                                            <h3 class="card-title mb-3">Ebbs &amp; Flows: The Evolution of the EV Charging Market</h3>
                                            <p class="card-text">Register now for our latest webinar on the energy transition in the EV charging industry. Join our Charging Analyst team as they explore the evolving EV charging.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img class="img-fluid rounded-start" src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1705420729/wp_production/Webinar-3294px-x-1632px-for-Website/Webinar-3294px-x-1632px-for-Website.png?_i=AA" alt="Webinar Image">
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>


    </section>





    <!-- recent speakers -->

    <section class="px-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4 py-4 fw-bold ">Recent speakers</h2>
            <div class="row">
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701903964/wp_production/HelloIMG1700081394169/HelloIMG1700081394169.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701903966/wp_production/HelloIMG1700081393902/HelloIMG1700081393902.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904079/wp_production/HelloIMG1700081393654/HelloIMG1700081393654.png?_i=AA" alt="Livent Logo" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904077/wp_production/HelloIMG1700081393409/HelloIMG1700081393409.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701903968/wp_production/HelloIMG1700081393169/HelloIMG1700081393169.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904076/wp_production/HelloIMG1700081392926/HelloIMG1700081392926.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701903970/wp_production/HelloIMG1700081392687/HelloIMG1700081392687.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904074/wp_production/HelloIMG1700081392432/HelloIMG1700081392432.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904072/wp_production/HelloIMG1700081392164/HelloIMG1700081392164.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904070/wp_production/HelloIMG1700081391756/HelloIMG1700081391756.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701903972/wp_production/HelloIMG1700081391519/HelloIMG1700081391519.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904068/wp_production/HelloIMG1700081391268/HelloIMG1700081391268.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>

            </div>


            <div class="row py-3">
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701903964/wp_production/HelloIMG1700081394169/HelloIMG1700081394169.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701903966/wp_production/HelloIMG1700081393902/HelloIMG1700081393902.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904079/wp_production/HelloIMG1700081393654/HelloIMG1700081393654.png?_i=AA" alt="Livent Logo" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904077/wp_production/HelloIMG1700081393409/HelloIMG1700081393409.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701903968/wp_production/HelloIMG1700081393169/HelloIMG1700081393169.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904076/wp_production/HelloIMG1700081392926/HelloIMG1700081392926.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701903970/wp_production/HelloIMG1700081392687/HelloIMG1700081392687.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904074/wp_production/HelloIMG1700081392432/HelloIMG1700081392432.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904072/wp_production/HelloIMG1700081392164/HelloIMG1700081392164.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904070/wp_production/HelloIMG1700081391756/HelloIMG1700081391756.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701903972/wp_production/HelloIMG1700081391519/HelloIMG1700081391519.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-1">
                    <div class="speaker-img-container">
                        <img src="https://res.cloudinary.com/dkklqdsqc/images/f_auto,q_auto/v1701904068/wp_production/HelloIMG1700081391268/HelloIMG1700081391268.png?_i=AA" alt="" class="speaker-img">
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Speak at our events -->
    <section class="relative px-5 bg-lilac">
        <div class="container mx-auto max-w-content-container d-md-flex align-items-lg-center pb-5 pb-md-5 pt-5 pt-md-5 ">

            <div class="col-md-6 d-flex justify-content-center mt-5 mt-md-0">
                <picture>
                    <source media="(min-width: 640px)" srcset="
                https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701813186/assets/home/home-events_cfh9zf.webp
              " />
                    <img class="img-fluid object-cover mx-auto mx-md-0 w-100 max-w-md h-auto" src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701812086/assets/home/home-events-mobile__qffpzj.webp" alt="" />
                </picture>
            </div>
            <div class="col-md-6 pe-md-5 px-3">
                <div class="position-relative ms-sm-5 w-sm-50">
                    <h2 class="h3 h2-md mb-3 mt-4 sm:mb-3 sm:mt-n3">Speak at our events</h2>
                    <ul class="mb-3 d-flex flex-column gap-2">
                        <li class="d-flex align-items-start gap-2">
                            <img class="w-10" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check-blue-circle.0320f9.svg" aria-hidden="true" />
                            Build your public profile
                        </li>
                        <li class="d-flex align-items-start gap-2">
                            <img class="w-10" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check-blue-circle.0320f9.svg" aria-hidden="true" />
                            Connect and collaborate with other sector specialists
                        </li>
                        <li class="d-flex align-items-start gap-2">
                            <img class="w-10" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check-blue-circle.0320f9.svg" aria-hidden="true" />
                            Inclusion in pre and post-event promotion
                        </li>
                    </ul>
                    <a class="btn btn-primary d-inline-block text-nowrap px-4 py-2 text-md fw-medium" href="/get-in-touch">Get in touch</a>
                </div>

            </div>

        </div>
    </section>


    <!-- feedback  -->
    <section class="position-relative px-5 event-bg-light-gray">
        <picture>
            <source media="(min-width: 768px)" srcset="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701787407/assets/event-archive/event-archive-feedback_yvlb0w_jotake.webp">
            <img class="position-absolute start-0 top-0 w-100 h-100 object-cover object-start" src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701787406/assets/event-archive/event-archive-feedback-mobile_aol204_eja3lr.webp" alt="">
        </picture>
        <div class="position-absolute start-0 top-0 w-100 h-100 event-bg-black-60"></div>
        <div class="position-relative mx-auto event-max-w-container d-flex justify-content-end">
            <div class="event-pt-custom event-pt-md-custom event-pb-custom event-pb-md-custom text-light">
                <div class="event-max-w-custom">
                    <p class="event-text-h4 text-uppercase event-mb-custom event-text-lilac-medium"> EVENT FEEDBACK </p>
                    <p class="event-text-body-text event-text-pre-title"> "I thought that the program was put together excellently – the topics were interesting and all of the topics in each session were very complementary. The presentations were very engaging and I enjoyed the conversations during the sessions. The allocated time and spaces for networking ensured that interactions with other participants were very fruitful" </p>
                    <p class="event-mt-custom event-text-h5 event-text-h4"> Sharon Booyens, PhD </p>
                    <p class="event-text-body-text event-text-big-copy"> Manager, Market Intelligence: Carbon. Sasol Chemicals </p>
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
</body>

</html>