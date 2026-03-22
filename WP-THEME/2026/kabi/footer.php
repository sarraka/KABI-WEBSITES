<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</div>

<footer class="p-4 p-lg-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="ft-container">
                <div class="d-flex flex-column flex-lg-row gap-3 gap-lg-5">
                    <div class="col-address d-flex flex-column">
                        <a href="/" class="mb-4">
                            <img src="/wp-content/uploads/2025/07/logo-main.svg" alt="">
                        </a>
                        <strong class="text-white  d-flex">Kingdom of Saudi Arabia</strong>
						<span class="text-white d-flex opacity-50 small mb-3">(Headquarters)</span>
                        <span class="d-flex">KABi Technologies, Lumiere Center, 1st Floor, Prince Turki Bin Abdulaziz Al Awwal Rd, Hiteen District, Riyadh, Saudi Arabia.</span>
						<span class="flex mb-4 mt-2">hello@kabi.ai</span>
                        <strong class="text-white mb-3 d-flex">Other Locations</strong>
                        <span class="d-flex mb-4">KSA | UAE | JOR</span>
                    </div>
                    <div class="w-100">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="ft-menu-box d-flex flex-column gap-3">
                                    <strong class="text-white">About Us</strong>
                                    <a href="/about-us/">About KABi</a>
                                    <a href="/team">Team</a>
                                    <a href="/clients">Clients</a>
                                    <a href="/why-kabi">Why KABi</a>
                                    <a href="/contact">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ft-menu-box d-flex flex-column gap-3">
                                    <strong class="text-white">Solutions</strong>
                                    <a href="/hyrdd">HYRDD</a>
                                    <a href="/inviews">INVIEWS</a>
                                    <a href="/jobbit-jobseeker/">JOBBIT</a>
                                </div>
                            </div>
<!--                             <div class="col-lg-3">
                                <div class="ft-menu-box d-flex flex-column gap-3">
                                    <strong class="text-white">Success Stories</strong>
                                    <a href="/success-stories/#samsung">Samsung</a>
                                    <a href="/success-stories/#neom">NEOM</a>
                                    <a href="/success-stories/#moh">Ministry of Haj</a>
                                    <a href="/success-stories/#hh">Health Holding</a>
                                    <a href="/success-stories/#takamol">Takamol</a>
                                </div>
                            </div> -->
                            <div class="col-lg-4">
                                <div class="ft-menu-box d-flex flex-column gap-3">
                                    <strong class="text-white">Resources</strong>
                                    <a href="/blog">Blog</a>
                                    <a href="/events">Events</a>
                                    <a href="/success-stories">Success Stories</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="news-letter-container">
                    <strong class="text-white mb-3 d-flex">Newsletter</strong>
                    <div class="d-flex gap-2">
                        <!-- <input type="text" class="form-control small" placeholder="Email Address"> -->
                        <!-- <button class="button btn-small">SUBSCRIBE</button> -->
                         <?php mailchimpSF_signup_form(); ?>
                    </div>
                 
                    <div class="mt-4 d-flex gap-3 social-media">
                        <a href="https://x.com/kabi_ai?s=21&t=rQwxOX-_brNKsonnfQQIFA" traget="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4l11.733 16h4.267l-11.733 -16z" /><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" /></svg></a>
                        <a href="https://www.instagram.com/kabi_ai/?hl=en" traget="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M16.5 7.5v.01" /></svg></a>
                        <a href="https://www.linkedin.com/company/kabi/" traget="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 11v5" /><path d="M8 8v.01" /><path d="M12 16v-5" /><path d="M16 16v-3a2 2 0 1 0 -4 0" /><path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" /></svg></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="text-center p-3 d-flex flex-column justify-content-center gap-2 text-white align-items-center">
        
		<div class="d-flex gap-2 mt-3">
			        <a href="/terms-and-condition/" class="text-white f-w-300 fs-14">Terms and Conditions</a>
        <span class="d-none d-lg-block">|</span>
        <a href="/privacy-policy/" class="text-white f-w-300 fs-14">Privacy Policy</a>
		</div>
		<span class="f-w-300 fs-14">Copyright © 2018-2026, KABi Technologies. 'KABi' & logo are registered trademarks of KABI TECHNOLOGIES FOR INFORMATION TECHNOLOGY</span>

    </div>
</footer>

<?php wp_footer(); ?>
<!-- script -->

<!-- script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>

</html>