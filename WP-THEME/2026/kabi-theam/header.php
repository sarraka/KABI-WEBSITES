<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


</head>

<body <?php body_class(); ?>>
	<div class="bg-all">
		<div class="patern-light"></div>
		<!-- header -->
		<header class="py-5 d-none d-lg-block" id="site-header">
			<div class="container d-flex justify-content-between align-items-center pt-4">
				<a href="/" class="d-flex align-items-center">
					<img src="/wp-content/uploads/2025/07/logo-main.svg" class="logo-main" alt="">
				</a>
				<div class="menu-container gap-5">
					<a href="#" class="m-menu drawer-trigger">About Us</a>
					<div class="drawer">
						<div class="row p-4">
							<div class="col-lg-6 mb-4">
								<a class="d-flex gap-3 aligb-items-center menu-box" href="/about-us/">
									<div class="icon-div"><i class="ti ti-layout-grid"></i></div>
									<div>
										<h3>KABi</h3>
										<p>Our story, vision, and values</p>
									</div>
								</a>
							</div>
							<div class="col-lg-6 mb-4">
								<a class="d-flex gap-3 aligb-items-center menu-box" href="/clients">
									<div class="icon-div"><svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M9 8l1 0" /><path d="M9 12l1 0" /><path d="M9 16l1 0" /><path d="M14 8l1 0" /><path d="M14 12l1 0" /><path d="M14 16l1 0" /><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" /></svg></div>
									<div>
										<h3>Clients</h3>
										<p>Helping clients grow</p>
									</div>
								</a>
							</div>
							<div class="col-lg-6 mb-4">
								<a class="d-flex gap-3 aligb-items-center menu-box" href="/team">
									<div class="icon-div">
										<svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users-group"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" /><path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M17 10h2a2 2 0 0 1 2 2v1" /><path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M3 13v-1a2 2 0 0 1 2 -2h2" /></svg>
									</div>
									<div>
										<h3>Team</h3>
										<p>Our creative minds </p>
									</div>
								</a>
							</div>
							<div class="col-lg-6 mb-4">
								<a class="d-flex gap-3 aligb-items-center menu-box" href="/why-kabi">
									<div class="icon-div"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-settings-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg></div>
									<div>
										<h3>Why KABi</h3>
										<p>What makes KABi unique</p>
									</div>
								</a>
							</div>
							<div class="col-lg-12 border-t-light">
								<div class="d-flex gap-3 pt-4">
									<a href="/contact/" class="text-white">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-headset"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 14v-3a8 8 0 1 1 16 0v3" /><path d="M18 19c0 1.657 -2.686 3 -6 3" /><path d="M4 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z" /><path d="M15 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z" /></svg>&nbsp;Contact
										Us</a>
									<a href="/faq/" class="text-white">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-alert-hexagon"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.875 6.27c.7 .398 1.13 1.143 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>	
									&nbsp;FAQs</a>
								</div>
							</div>
						</div>
					</div>
					<a href="#" class="drawer-trigger2 m-menu">Solutions </a>
					<div class="drawer2">
						<div class="row p-4">
							<div class="col-lg-4">
								<a class="d-flex gap-3 aligb-items-center menu-box flex-column solution-menu"
									href="/hyrdd/">
									<div class="icon-div">
										<img src="/wp-content/uploads/2025/07/icon-hyrdd.svg" alt="">
									</div>
									<div>
										<h3>HYRDD</h3>
										<p>AI-Powered Recruitment Platform</p>
									</div>
								</a>
							</div>

							<div class="col-lg-4">
								<a class="d-flex gap-3 aligb-items-center menu-box flex-column solution-menu"
									href="/inviews/">
									<div class="icon-div">
										<img src="/wp-content/uploads/2025/07/icon-inviews.svg" alt="">
									</div>
									<div>
										<h3>INVIEWS</h3>
										<p>AI-Powered Assessment Platform </p>
									</div>
								</a>
							</div>

							<div class="col-lg-4">
								<a class="d-flex gap-3 aligb-items-center menu-box flex-column solution-menu"
									href="/jobbit-jobseeker/">
									<div class="icon-div">
										<img src="/wp-content/uploads/2025/07/icon-jobbit.svg" alt="">
									</div>
									<div>
										<h3>JOBBIT</h3>
										<p>AI-Powered Career Development Platform</p>
									</div>
								</a>
							</div>

							<!-- <div class="col-lg-12 border-t-light">
								<div class="d-flex gap-3 pt-4 align-items-center">
									<a href="#" class="text-white d-flex align-items-center">Explore our
										Soutions&nbsp;<i class="ti ti-arrow-narrow-right"></i></a>
								</div>
							</div> -->
						</div>
					</div>
					<a href="#" class="drawer-trigger3 m-menu">Resources</a>
					<div class="drawer3">
						<div class="row p-4">
							<div class="col-lg-6 mb-4">
								<a class="d-flex gap-3 aligb-items-center menu-box" href="/blog/">
									<div class="icon-div"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-book"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6l0 13" /><path d="M12 6l0 13" /><path d="M21 6l0 13" /></svg></div>
									<div>
										<h3>Blog</h3>
										<p>Insights, tips, and fresh ideas</p>
									</div>
								</a>
							</div>
							<div class="col-lg-6 mb-4">
								<a class="d-flex gap-3 aligb-items-center menu-box" href="/events/">
									<div class="icon-div"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="text-white" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-calendar-event"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 2a1 1 0 0 1 .993 .883l.007 .117v1h1a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-12a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h1v-1a1 1 0 0 1 1.993 -.117l.007 .117v1h6v-1a1 1 0 0 1 1 -1m3 7h-14v9.625c0 .705 .386 1.286 .883 1.366l.117 .009h12c.513 0 .936 -.53 .993 -1.215l.007 -.16z" /><path d="M8 14h2v2h-2z" /></svg></div>
									<div>
										<h3>Events</h3>
										<p>Connect, learn and grow</p>
									</div>
								</a>
							</div>
							<div class="col-lg-6 mb-4">
								<a class="d-flex gap-3 aligb-items-center menu-box" href="/success-stories/">
									<div class="icon-div"><svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shield-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.143 20.743a12 12 0 0 1 -7.643 -14.743a12 12 0 0 0 8.5 -3a12 12 0 0 0 8.5 3c.504 1.716 .614 3.505 .343 5.237" /><path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138" /></svg></div>
									<div>
										<h3>Success Stories</h3>
										<p>success powered by insight</p>
									</div>
								</a>
							</div>
							<!-- <div class="col-lg-6 mb-4">
								<a class="d-flex gap-3 aligb-items-center menu-box">
									<div class="icon-div"><i class="ti ti-device-laptop"></i></div>
									<div>
										<h3>Live Webinars</h3>
										<p>Live Expert Insights</p>
									</div>
								</a>
							</div> -->
							<div class="col-lg-12 border-t-light">
								<div class="d-flex gap-3 pt-4">
									<a href="/contact/" class="text-white"><i class="ti ti-headset"></i>&nbsp;Contact
										Us</a>
									<a href="/faq/" class="text-white"><i class="ti ti-help-hexagon"></i>&nbsp;FAQs</a>
								</div>
							</div>
						</div>
					</div>
					<a href="/career/" class="m-menu">Careers</a>
				</div>
				<div class="d-flex gap-4 align-items-center">
					<div class="lange-switch-bt">
						<?php if (has_nav_menu('primary')): ?>
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
					<a href="/request-a-demo/" class="button">Request Demo</a>
				</div>
			</div>
		</header>

		<header class="d-flex justify-content-between p-4 d-lg-none" id="site-mob-header">
			<a href="/" class="d-flex align-items-center">
				<img src="/wp-content/uploads/2025/07/logo-main.svg" class="logo-main" alt="">
			</a>
			<a href="" class="mobile-menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
				aria-controls="offcanvasWithBothOptions"><i class="ti ti-menu-4"></i></a>
			<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
				aria-labelledby="offcanvasWithBothOptionsLabel">
				<div class="offcanvas-body d-flex flex-column gap-3">
					<div class="p-3 menu-group">
						<a href="" class="head-menu">About Us</a>
						<a href="/about-us/" class="px-3">KABi</a>
						<a href="/clients/" class="px-3">Clients</a>
						<a href="/team/" class="px-3">Team</a>
						<a href="/why-kabi/" class="px-3">Why KABi</a>
					</div>
					<div class="p-3 menu-group">
						<a href="" class="head-menu">Solutions</a>
						<a href="/hyrdd/" class="px-4">HYRDD</a>
						<a href="/inviews/" class="px-4">INVIEWS</a>
						<a href="/jobbit-jobseeker/" class="px-4">JOBBIT</a>
						<a href="/why-kabi/" class="px-4">Why KABi</a>
					</div>
					<div class="p-3 menu-group">
						<a href="" class="head-menu">Resources</a>
						<a href="/blog/" class="px-4">Blog</a>
						<a href="/events/" class="px-4">Our Events</a>
						<a href="/success-stories/" class="px-4">Success Stories</a>
						<a href="" class="px-4">Live Webinars</a>
					</div>
					<a href="/career/" class="head-menu mt-4">Careers</a>
					<a href="/request-a-demo/" class="button mt-4">Request Demo</a>
				</div>
			</div>
		</header>