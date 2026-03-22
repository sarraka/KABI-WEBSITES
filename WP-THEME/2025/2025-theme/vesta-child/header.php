<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_site_url(); ?>/favicon.png" sizes="32x32" />
    <link rel="icon" href="<?php echo get_site_url(); ?>/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_site_url(); ?>/favicon.png" />
    <meta name="msapplication-TileImage" content="<?php echo get_site_url(); ?>/favicon.png" />
    <meta property="og:image" content="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/KABI-Logo.jpeg" />


    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
    <?php endif; ?>



    <?php wp_head(); ?>

    <!-- Bootstrap CSS -->
    <link defer href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- main style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>-child/css/main.css">
    <!-- google fonts -->

	<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NVZG85JV');</script>
	<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVZG85JV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
    <section class="w-100">
        <header class="position-absolute w-100 d-none d-lg-block">
            <div class="container-fluid px-5">
                <div class="d-flex justify-content-between align-items-center kabi-header position-relative">
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>-child/img/logo.svg" /></a>
                    <div class="w-100">
                        <ul class="d-flex justify-content-center align-items-center m-0 p-0">
                            <li class="position-relative about_menu">
                                <a href="#" class="d-flex">About Us<i class="ri-arrow-drop-down-line"></i></a>
                                <div class="menu-about-condainer">
                                    <div class="menu-about">
                                        <span class="opacity-75 mb-2 d-block">About Us</span>
                                        <ul>
                                            <li>
                                                <a href="/kabi/" class="text-black">KABi</a>
                                            </li>
                                            <li>
                                                <a href="/team" class="text-black">Team</a>
                                            </li>
                                            <li>
                                                <a href="/culture" class="text-black">Culture</a>
                                            </li>
                                            <li>
                                                <a href="/clients" class="text-black">Clients</a>
                                            </li>
                                            <li>
                                                <a href="/whykabi" class="text-black">Why
                                                    KABi</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="position-relative product_menu">
                                <a href="#" class="d-flex">Products<i class="ri-arrow-drop-down-line"></i></a>
                                <div class="menu-product-condainer">
                                    <div class="menu-product">
                                        <span class="opacity-75 mb-2 d-block">Product of KABi</span>
                                        <div class="row">
                                            <div class="col-6 mb-3 d-flex">
                                                <div
                                                    class="bg-hyrdd p-box p-3 d-flex align-items-center justify-content-between">
                                                    <a href="/hyrdd" class="text-black" style="font-weight: 100;">
                                                    <div class="w-100">
                                                        <h3 class="fs-product-heading mb-2">HYRDD</h3>
                                                        <h4 class="fs-product-desc">AI-Powered Applicant Tracking System
                                                        </h4>
                                                    </div>
                                                    <div>
                                                        <a href="/hyrdd">
                                                            <i
                                                                class="ri-arrow-right-line d-flex align-items-center justify-content-center"></i>
                                                        </a>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3 d-flex">
                                                <div
                                                    class="bg-inviews p-box p-3 d-flex align-items-center justify-content-between">
                                                    <a href="/inviews" class="text-black" style="font-weight: 100;">
                                                    <div>
                                                        <h3 class="fs-product-heading mb-2">INVIEWS</h3>
                                                        <h4 class="fs-product-desc">AI-powered Psychometric Video
                                                            Assessments</h4>
                                                    </div>
                                                    <div>
                                                        <a href="/inviews">
                                                            <i class="ri-arrow-right-line d-flex align-items-center justify-content-center"></i>
                                                        </a>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3 d-flex">
                                                <div
                                                    class="bg-bkathon p-box p-3 d-flex align-items-center justify-content-between">
                                                    <a href="/hc-consulting" class="text-black" style="font-weight: 100;">
                                                    <div>
                                                        <h3 class="fs-product-heading mb-2">HC CONSULTING</h3>
                                                        <h4 class="fs-product-desc">Human Capital Consulting-as-a-Service
                                                        </h4>
                                                    </div>
                                                    <div>
                                                        <a href="/hc-consulting">
                                                            <i class="ri-arrow-right-line d-flex align-items-center justify-content-center"></i>
                                                        </a>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- <div class="col-6 mb-3 d-flex">
                                                <div
                                                    class="bg-bkathon p-box p-3 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h3 class="fs-product-heading mb-2">BKATHON</h3>
                                                        <h4 class="fs-product-desc">Virtual Hackathon Platform</h4>
                                                    </div>
                                                    <div>
                                                        <a href="#">
                                                            <i
                                                                class="ri-arrow-right-line d-flex align-items-center justify-content-center"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-6 mb-3 d-flex">
                                                <div
                                                    class="bg-algorithums p-box p-3 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h3 class="fs-product-heading mb-2">ALGORTHMUS</h3>
                                                        <h4 class="fs-product-desc">AI-as-a-Service Recommender Engine
                                                        </h4>
                                                    </div>
                                                    <div>
                                                        <a href="#">
                                                            <i
                                                                class="ri-arrow-right-line d-flex align-items-center justify-content-center"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!--<div class="col-6 mb-3 d-flex">
                                                <div
                                                    class="bg-bloovo p-box p-3 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h3 class="fs-product-heading mb-2">BLOOVO</h3>
                                                        <h4 class="fs-product-desc">AI-Powered Job Board</h4>
                                                    </div>
                                                    <div>
                                                        <a href="#">
                                                            <i
                                                                class="ri-arrow-right-line d-flex align-items-center justify-content-center"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!--<div class="col-6 mb-3 d-flex">
                                                <div
                                                    class="bg-wardia p-box p-3 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h3 class="fs-product-heading mb-2">WARDIA</h3>
                                                        <h4 class="fs-product-desc">AI-powered Part-Timers Jobs App</h4>
                                                    </div>
                                                    <div>
                                                        <a href="#">
                                                            <i
                                                                class="ri-arrow-right-line d-flex align-items-center justify-content-center"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-6 mb-3 d-flex">
                                                <div
                                                    class="bg-ohr p-box p-3 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h3 class="fs-product-heading mb-2">OHR</h3>
                                                        <h4 class="fs-product-desc">Business Process Management</h4>
                                                    </div>
                                                    <div>
                                                        <a href="#">
                                                            <i
                                                                class="ri-arrow-right-line d-flex align-items-center justify-content-center"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-6 mb-3 d-flex">
                                                <div
                                                    class="bg-ohr-acadamy p-box p-3 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h3 class="fs-product-heading mb-2">KABI ACADEMY</h3>
                                                        <h4 class="fs-product-desc">Professional Training Services
                                                            Platform</h4>
                                                    </div>
                                                    <div>
                                                        <a href="#">
                                                            <i
                                                                class="ri-arrow-right-line d-flex align-items-center justify-content-center"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!--<div class="w-100 mb-3">
												 <a href="/request-a-demo" class="btn-gradient border-radius-6 text-white fs-5 btn-req-demo w-100" style="width:100%!important">Request a Demo</a>
											</div> -->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="/resources">Resources</a>
                            </li>
                            <li>
                                <a href="/blogs">Blog</a>
                            </li>
                            <li>
                                <a href="https://careers.kabi.ai/" target="_blank" rel="noreferrer">Careers</a>
                            </li>
                            <!-- <li>
                                <a href="https://kabiai.bkathon.com/" target="_blank" rel="noreferrer">Hackathons</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="d-flex align-items-center position-relative">

                        <ul class="d-flex gap-2">
                            <li>
                                <a href="/request-a-demo" class="btn-gradient btn-request">Request a Demo</a>
                            </li>
                            <li>
                                <a href="/brand-ambassador-program/" class="btn-gradient">Brand Ambassador Program</a>
                            </li>
                            <li>
                                <div class="lange-switch-bt">


                                    <?php if (has_nav_menu('primary')) : ?>
                                    <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'menu_id' => 'nav-top',
                                    //'container' =>false,
                                )
                            );

                            ?>
                                    <?php endif; ?>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="d-block d-lg-none head-fixed">
            <div class="d-flex p-3 align-items-center justify-content-between bg-dark">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>-child/img/logo.svg" class="kabi-logo"
                        alt="" /></a>
                <div class="d-flex align-items-center">
                    <div class="text-white lange-switch-bt mx-2">
                        <?php if (has_nav_menu('primary')) : ?>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'menu_class' => 'px-3',
                                    'menu_id' => 'nav-top',
                                    //'container' =>false,
                                )
                            );

                            ?>
                        <?php endif; ?>
                    </div>
                    <a class="mobile-menu" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample"><i class="ri-menu-line text-white"></i></a>
                </div>
            </div>

            <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header d-flex align-items-center">
                    <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel">
                        <img src="<?php echo get_template_directory_uri(); ?>-child/img/logo.svg" class="kabi-logo"
                            alt="" />
                    </h5>
                    <a class="mobile-menu" data-bs-dismiss="offcanvas" aria-label="Close"><i
                            class="ri-close-fill text-white"></i></a>
                </div>
                <div class="offcanvas-body">
                    <ul class="navigation__links">
                        <li>
                            <a href="#" class="font-weight-600">About Us</a>
                        </li>
                        <li>
                            <a href="/kabi" class="opacity-50">KABi</a>
                        </li>

                        <li>
                            <a href="/team" class="opacity-50">Team</a>
                        </li>
                        <li>
                            <a href="/culture" class="opacity-50">Culture</a>
                        </li>
                        <li>
                            <a href="/clients" class="opacity-50">Clients</a>
                        </li>
                        <li>
                            <a href="/whykabi" class="opacity-50">Why KABi</a>
                        </li>
                        <li>
                            <a href="#" class="font-weight-600">Products</a>
                        </li>
                        <li>
                            <a href="/hyrdd" class="opacity-50">HYRDD</a>
                        </li>
                        <li>
                            <a href="/inviews" class="opacity-50">INVIEWS</a>
                        </li>
                        <li>
                            <a href="/hc-consulting" class="opacity-50">HC CONSULTING</a>
                        </li>
                        <!-- <li>
                            <a href="#" class="opacity-50">BKATHON</a>
                        </li> -->
                        <!-- <li>
                            <a href="#" class="opacity-50">ALGORITHUMS</a>
                        </li> -->
                        <!--                         <li>
                            <a href="#" class="opacity-50">BLOOVO</a>
                        </li> -->
                        <!--                         <li>
                            <a href="#" class="opacity-50">WARDIA</a>
                        </li> -->
                        <!-- <li>
                            <a href="#" class="opacity-50">OHR</a>
                        </li> -->
                        <!-- <li>
                            <a href="#" class="opacity-50">KABI ACADEMY</a>
                        </li> -->
                        <li>
                            <a href="/resources">Resources</a>
                        </li>
                        <li>
                            <a href="/blogs" class="font-weight-600">Blog</a>
                        </li>
                        <li>
                            <a class="font-weight-600" href="https://careers.kabi.ai/">Careers</a>
                        </li>
                        <li class="p-3">
                            <a href="/brand-ambassador-program/" class="btn-gradient w-100">Brand Ambassador Program</a>
                        </li>
                        <!-- <li>
                            <a class="font-weight-600" href="https://kabiai.bkathon.com/">Hackathons</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php
   