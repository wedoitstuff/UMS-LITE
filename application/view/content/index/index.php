<!DOCTYPE html>
<html lang="en">

<head>
    <base href = "<?= Config::get("URL"); ?>">
    <meta charset="utf-8" />
    <title>Welcome - <?= Request::siteDetails('siteTitle'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="UMS Framework Local is an off the shelf, ready to use platform with endless possibilities. Focus on the core of your projects, not building the framework!" />
    <meta name="keywords" content="UMS Framework, PHP, Framework, Open Source" />
    <meta content="We Do IT Stuff (Jack Wright)" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="landing/images/favicon.ico" />
    <!-- css -->
    <link href="landing/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- icon -->
    <link href="landing/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />

    <link href="landing/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- STRAT NAVBAR -->
    <div id="navbar">
        <nav class="navbar navbar-expand-lg navbar-white fixed-top navbar-custom sticky sticky-dark" id="main-menu">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo text-uppercase" href="index">
                    <?= Request::siteLogo('filePathDark'); ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-center mx-auto" id="navbar-navlist">
                        <li class="nav-item">
                            <a data-scroll href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll href="#services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll href="#features" class="nav-link">Features</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll href="#pricing" class="nav-link">Pricing</a>
                        </li>
                    </ul>
                    <div class="nav-button">
                        <ul class="list-inline nav-item d-none d-lg-inline-block  mb-0">
                          <li class="nav-item">
                              <a data-scroll href="<?= Session::userIsLoggedIn() == true ? 'dashboard' : 'login'; ?>" class="nav-link">
                                <?= Session::userIsLoggedIn() == true ? 'My Dashboard' : 'Login'; ?>
                              </a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- END NAVBAR -->

    <!--START HOME-->
    <section class="bg-home-3 bg-light" id="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">

                    <h1 class="home-title mb-0 mt-3"> Ready to kickstart your <br>
                        <span href="" class="typewrite text-primary" data-period="2000"
                            data-type='[ "customer relations","storefront","project manager", "invoice managemer", "cloud platform", "future ideas" ]'>
                            <span class="wrap"></span>
                        </span>
                    </h1>


                    <p class="home-desc text-muted mt-4">
                      <?= Request::siteDetails('siteTitle'); ?> is an off the shelf, ready to use platform with endless possibilities.
                      Focus on the core of your projects, not building the framework!
                    </p>

                    <div class = 'row mt-5 text-center'>
                        <div class = 'col mx-auto'>
                            <a href = 'dashboard/' class = 'btn btn-outline-primary'>Access Dashboard</a>
                        </div>
                    </div>


                    <div class="home-img-3">
                        <img src="landing/images/features/img-3.png" class="img-responsive" width = "1000" alt="">
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!--END HOME-->


     <!-- START SERVICES -->
     <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-box text-center">
                        <h6 class="title-sub-title mb-0 mt-5 text-primary">Key Features</h6>
                        <h3 class="title-heading mt-3">The bits we think stand out</h3>
                    </div>
                </div>
            </div>


            <div class="row mt-5 pt-4">
                <div class="col-lg-4">
                    <div class="service-box text-center uim-icon-primary mt-4">
                        <div class="service-icon icon-xxl mx-auto">
                            <i class="uim uim-cube"></i>
                        </div>
                        <h5 class="f-18 mt-4">Self Installer</h5>

                        <div class="service-border mt-4 mx-auto"></div>

                        <p class="text-muted mt-3 mb-0">Download, upload, fill a few text boxes, deploy... It really is that simple!</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box text-center active uim-icon-primary mt-4">
                        <div class="service-icon icon-xxl mx-auto">
                            <i class="uim uim-layer-group"></i>
                        </div>
                        <h5 class="f-18 mt-4">Google Login</h5>

                        <div class="service-border mt-4 mx-auto"></div>

                        <p class="text-muted mt-3 mb-0">Google's Oauth 2 API is baked into the core, making accounts easy to manage.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box text-center uim-icon-primary mt-4">
                        <div class="service-icon icon-xxl mx-auto">
                            <i class="uim uim-briefcase"></i>
                        </div>
                        <h5 class="f-18 mt-4">Payment Ready</h5>

                        <div class="service-border mt-4 mx-auto"></div>

                        <p class="text-muted mt-3 mb-0">Stripe & PayPal support with user groups & subscription management.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END SERVICES -->


    <!-- START FEATURES -->

    <section class="section bg-light overflow-hidden" id="features">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                  <div class="features-1 mt-4">
                      <img src="landing/images/features/img-1.png" alt="" width="1100px;">
                  </div>
                </div>

                <div class="col-lg-6">

                    <div class="features-box mt-4">
                        <h3>Realtime update checking with one-click deployment available</h3>

                        <p class="text-muted mt-3"><?= Request::siteDetails("siteTitle"); ?> will always know when a new update has dropped and safely update itself,
                        with no intervention required. Don't want updates? You can easily disable them!</p>

                        <div class="row mt-4">
                            <div class="col-lg-6">



                                <div class="mt-4">

                                    <div class="uim-icon-primary mt-4">
                                        <div class="features-icon icon-xl">
                                            <i class="uim uim-window-section"></i>
                                        </div>

                                    </div>


                                    <h5 class="f-18 mt-4">Tailor made </h5>
                                    <p class="text-muted mt-2">Choose which updates to receive (experimental or stable)</p>
                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="mt-3">

                                    <div class="uim-icon-primary mt-4">
                                        <div class="features-icon icon-xl">
                                            <i class="uim uim-chart-pie"></i>
                                        </div>

                                    </div>

                                    <h5 class="f-18 mt-4">24/7 Support </h5>
                                    <p class="text-muted">If at any point you get into some bother, slide into our DMs</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>



            </div>

            <div class="row mt-5 pt-5 align-items-center">
                <div class="col-lg-6">
                    <div class="mt-4">
                        <h3 class="w-75">We are building <span class="text-primary">loads</span> of plugins to help your project thrive</h3>

                        <p class="text-muted mt-4">We are always expanding <?= Request::siteDetails('siteTitle'); ?> to try and make life as free as possible to focus on what matters most.
                        We've done the tricky stuff so you can fly like an eagle!</p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-4">
                                    <h2>8</h2>
                                    <h5 class="text-primary mb-0 f-16">Current Plugins</h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mt-4">
                                    <h2>530+</h2>
                                    <h5 class="text-primary mb-0 f-16">Projects Running</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="features-2 mt-4">
                        <img src="landing/images/features/img-2.png" alt="" width = "1000px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FEATURES -->


    <!-- START PRICING -->

    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4">

                    <div class="heading-box">



                        <div class="title-box">
                            <h6 class="title-sub-title mb-0 text-primary">Pricing</h6>
                            <h3 class="title-heading mt-3 ms-0">See what packages we offer!</h3>
                        </div>




                        <p class="title-desc text-muted mt-3">We offer a managed monthly subscription which includes more automation features, or choose to host yourself.</p>

                        <p class="title-desc text-muted mt-3"><a href = "javascript:void()">Themeforest edition*</a>
                        <br><span calss = 'small' style = "font-size:0.6em !important;">*Requires manual installation, doesn't support automatic updates or include plugins.</span></p>





                    </div>




                </div>

                <div class="col-lg-7 g-0 offset-lg-1">

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="Month" role="tabpanel" aria-labelledby="Monthly">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="pricing-box active bg-white rounded mt-4">
                                        <div class="pricing-badge">
                                            <span class="badge">Best Option</span>
                                        </div>

                                        <h5 class="fw-normal">Managed </h5>
                                        <h1 class="pricing-title mt-3 mb-0">£7<span class="f-20">.99/month</span></h1>
                                        <p class="text-muted f-15 mt-3">Whitelabelled, hosted for you and link your own domain alias easily!</p>

                                        <hr class="mt-4">

                                        <div class="mt-4 pt-1">
                                            <p class="mb-3 f-16"><i
                                                    class="mdi mdi-check-circle text-primary f-18 me-2"></i><span
                                                    class="fw-normal">Comprehensive</span> admin tools</p>
                                            <p class="mb-3 f-16"><i
                                                    class="mdi mdi-check-circle text-primary f-18 me-2"></i><span
                                                    class="fw-normal">Access to</span> plugins library</p>
                                            <p class="mb-3 f-16"><i
                                                    class="mdi mdi-check-circle text-primary f-18 me-2"></i><span
                                                    class="fw-normal">Automated</span> updates
                                            </p>
                                            <p class="mb-3 f-16"><i
                                                    class="mdi mdi-check-circle text-primary f-18 me-2"></i><span
                                                    class="fw-normal">FTP access</span> with shell</p>


                                            <p class="mb-3 f-16"><i
                                                    class="mdi mdi-check-circle text-primary f-18 me-2"></i><span
                                                    class="fw-normal">Monitor deployments</span> remotely</p>

                                        </div>
                                        <div class="mt-4 pt-2 text-center">
                                            <a href="" class="btn btn-primary w-100">Get setup</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="pricing-box bg-white rounded mt-4">



                                        <h5 class="fw-normal">Self hosted</h5>
                                        <h1 class="pricing-title mt-3 mb-0">£49<span class="f-20">.99/one time</span></h1>
                                        <p class="text-muted f-15 mt-3">For larger businesses or those with onal
                                            administration needs</p>
                                        <div class="mt-4 pt-1">
                                            <p class="mb-3 f-16"><i
                                                    class="mdi mdi-check-circle text-primary f-18 me-2"></i><span
                                                    class="fw-normal">Comprehensive </span> admin tools</p>
                                                    <p class="mb-3 f-16"><i
                                                            class="mdi mdi-check-circle text-primary f-18 me-2"></i><span
                                                            class="fw-normal">Access to</span> plugins library</p>
                                                    <p class="mb-3 f-16"><i
                                                            class="mdi mdi-check-circle text-primary f-18 me-2"></i><span
                                                            class="fw-normal">Automated</span> updates
                                                    </p>
                                            <p class="mb-3 f-16"><i
                                                    class="mdi mdi-close-circle text-danger f-18 me-2"></i><span
                                                    class="fw-normal">Automated</span> updates</p>


                                            <p class="mb-3 f-16"><i
                                                    class="mdi mdi-close-circle text-danger f-18 me-2"></i><span
                                                    class="fw-normal">FTP account</span> with shell</p>

                                        </div>
                                        <div class="mt-4 pt-2 text-center">
                                            <a href="" class="btn btn-primary w-100">Buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>

            </div>
        </div>
    </section>
    <!-- END PRICING -->

    <!-- START FOOTER -->
    <section class="bg-footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center text-muted mb-0">
                        © 2022 <?= Request::siteDetails('siteTitle'); ?>  - Powered by <a href = "//umsframework.io" target = "_blank">UMS Framework</a> v <?= Config::get('VERSION_LONG_TITLE'); ?>
                    </p>

                </div>

            </div>

        </div>
    </section>
    <!-- END FOOTER -->

    <!-- javascript -->
    <script src="landing/js/bootstrap.bundle.min.js"></script>
    <script src="landing/js/smooth-scroll.polyfills.min.js"></script>
    <script src="landing/js/gumshoe.polyfills.min.js"></script>
    <!-- unicons icon -->
    <script src="landing/js/unicons.js"></script>
    <!-- Contact Form  -->
    <script src="landing/js/app.js"></script>
</body>

</html>
