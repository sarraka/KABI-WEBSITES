<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<!-- footer -->
<footer class="pt-5">
    <div class="container-fluid pb-4 px-4 px-lg-5">
        <div class="row">
            <div class="col-lg-4 mb-2">
                <img src="<?php echo get_template_directory_uri(); ?>-child/img/logo.svg" class="mb-3" />
                <div class="text-white mb-2">Kingdom of Saudi Arabia (HQ)</div>
                <div class="d-flex flex-column gap-1 text-white opacity-50 mb-4">
                    <span>KABi Technologies,</span>
                    <span>Lumiere Center, 1st Floor,</span>
                    <span>Prince Turki Bin Abdulaziz Al Awwal Rd,</span>
                    <span>Hiteen District,</span>
                    <span>Riyadh, Saudi Arabia.</span>
                    <span>hello@kabi.ai</span>
                </div>
                <div class="text-white mb-2">United Arab Emirates</div>
                <div class="d-flex flex-column gap-1 text-white opacity-50 mb-4">
                    <span>Dubai Internet City, Building 1,</span>
                    <span>Third Floor, Office 307,</span>
                    <span>Dubai, UAE.</span>
                    <span>hello@kabi.ai</span>
                </div>
                <div class="text-white mb-2">Other Locations</div>
                <div class="d-flex flex-column gap-1 text-white opacity-50">
                    <div class="d-flex flex-row gap-1 text-white flex-wrap">
                        <span>KWT</span>
                        <span>|</span>
                        <span>OMN</span>
                        <span>|</span>
                        <span>EGY</span>
                        <span>|</span>
                        <span>JOR</span>
                        <span>|</span>
                        <span>BHR</span>
                        <span>|</span>
                        <span>USA</span>
                        <span>|</span>
                        <span>UK</span>
                    </div>
                    <span>hello@kabi.ai</span>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-3 mb-2 mb-lg-4 mt-4 mt-lg-0">
                        <div class="text-white">About Us</div>
                        <ul class="d-flex flex-column gap-1 mt-3 opacity-50">
                            <li>
                                <a href="/kabi">KABi</a>
                            </li>

                            <li>
                                <a href="/team">Team</a>
                            </li>
                            <li>
                                <a href="/culture">Culture</a>
                            </li>
                            <li>
                                <a href="/clients">Clients</a>
                            </li>
                            <li>
                                <a href="/whykabi">Why KABi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 mb-2 mb-lg-4 mt-4 mt-lg-0">
                        <div class="text-white">Products</div>
                        <ul class="d-flex flex-column gap-1 mt-3 opacity-50">
                            <li><a href="/hyrdd">HYRDD</a> </li>
                            <li><a href="/inviews">INVIEWS</a> </li>
                            <li><a href="/hc-consulting">HC Consulting</a> </li>
                            <!-- <li><a href="#">BKATHON</a> </li> -->
                            <!-- <li><a href="#">ALGORTHMUS</a> </li> -->
                            <!--<li><a href="#">BLOOVO</a> </li> -->
                            <!--<li><a href="#">WARDIA</a> </li> -->
                            <!-- <li><a href="#">OHR</a> </li> -->
                            <!-- <li><a href="#">KABi ACADEMY</a> </li> -->
                        </ul>
                    </div>
                    <div class="col-lg-3 mb-2 mb-lg-4 mt-4 mt-lg-0">
                        <div class="text-white">Other</div>
                        <ul class="d-flex flex-column gap-1 mt-3 opacity-50">
							<li><a href="/contact-us">Contact Us</a></li>
                            <li><a href="/blogs">Blogs</a></li>
                            <li><a href="/resources">Resources</a> </li>
                            <li><a href="https://careers.kabi.ai/">Careers</a> </li>
                            <li><a href="/terms/">Terms and Conditions</a> </li>
                            <li><a href="/policy/">Privacy Policy</a> </li>
                            <li><a href="/kabi-trust/">Trust KABi</a></li>
                            <!-- <li><a href="https://kabiai.bkathon.com/">Hackathons</a> </li> -->
                        </ul>
                    </div>
                    <div class="col-lg-3 mt-4 mt-lg-0 position-relative">
                        <div class="text-white mb-3">Newsletter</div>
                        <div class="newsletter-box d-lg-flex align-items-center mb-2 mb-lg-3">
                            <?php mailchimpSF_signup_form(); ?>
                        </div>
                        <div class="d-flex social gap-3">
                            <a href="https://www.linkedin.com/company/kabi/mycompany/" target="_blank"><i
                                    class="ri-linkedin-fill"></i></a>
                            <a href="https://twitter.com/kabi_ai?s=21&t=rQwxOX-_brNKsonnfQQIFA" target="_blank"><i class="ri-twitter-x-line"></i></a>
                            <a href="https://www.instagram.com/kabi_ai/?hl=en" target="_blank"><i
                                    class="ri-instagram-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="mob-b-pading">
<section class="py-4 bg-black">
    <div class="container-fluid px-5">
        <div class="row">
            <div class="col-lg-12 text-white text-center opacity-50 copyright">Copyright © 2018-2025, KABi Technologies.
                'KABi' & logo are registered trademarks of KABI TECHNOLOGIES FOR INFORMATION TECHNOLOGY</div>
        </div>
    </div>
</section>
	</div>

<div class="p-4 request-demo-container bg-black d-lg-none">
    <a href="/request-a-demo" class="btn-gradient border-radius-6 text-white fs-5 btn-req-demo w-100">
        Request a Demo
    </a>
</div>

<?php if (is_active_sidebar('cs-1')) : ?>
<?php //dynamic_sidebar( 'cs-1' ); 
    ?>
<?php endif; ?>


<!-- <div id="back-to-top" style="display: none;"><a href="#"><i class="fa fa-chevron-up"></i></a></div> -->
<?php wp_footer(); ?>

<link defer href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
<!-- icon fonts -->
<link async href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

<!-- font style -->
<!--<link async href="//db.onlinewebfonts.com/c/61db15be9b551cb288a436298dd2051b?family=FS+Albert+Arabic+Web" rel="stylesheet"
	  type="text/css" />-->

<!-- animation scroll -->
<link async href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/TweenMax.min.js'></script>
<!-- animation scroll -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    document.addEventListener('wpcf7mailsent', function (event) {
        location = '<?php echo site_url(); ?>/thank-you/';
    }, false);
</script>

<script>
    var forEach = function (array, callback, scope) {
        for (var i = 0; i < array.length; i++) {
            callback.call(scope, i, array[i]); // passes back stuff we need
        }
    };

    var randomIntFromInterval = function (min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    var $mapPins = document.querySelectorAll('#Map-shape g');

    // Setup timelines attached to each map pin
    forEach($mapPins, function (index, value) {
        // Group opacity timeline
        value.groupTimeline = new TimelineMax({
            paused: true
        });

        value.groupTimeline
            .to(value, 0.25, {
                opacity: 0
            });

        // Pulse animation
        var pinTimeline = new TimelineMax({
            repeat: -1,
            delay: randomIntFromInterval(1, 3),
            repeatDelay: randomIntFromInterval(0, 1)
        });

        pinTimeline.
            to(value.querySelector('.Pin-back'), 3, {
                scale: 50,
                transformOrigin: 'center center',
                opacity: 0
            });
    });

    forEach(document.querySelectorAll('.js-Location-nav [data-location]'), function (index, value) {

        value.addEventListener('mouseenter', function (e) {
            var location = e.target.getAttribute('data-location');

            // Hide other map pins
            forEach($mapPins, function (index, value) {
                if (value.getAttribute('data-location') !== location) {
                    value.groupTimeline.play();
                }
            });
        }, false);

        value.addEventListener('mouseleave', function (e) {
            // Reverse all hidden map pins
            forEach($mapPins, function (index, value) {
                value.groupTimeline.reverse();
            });

        }, false);
    });
</script>

<script>
    $(".about_menu").mouseover(function () {
        $(".menu-about-condainer").show();
    });

    $(".about_menu").mouseleave(function () {
        $(".menu-about-condainer").hide();
    });

    $(".product_menu").mouseover(function () {
        $(".menu-product-condainer").show();
    });

    $(".product_menu").mouseleave(function () {
        $(".menu-product-condainer").hide();
    });
</script>

<script>
    $("[lang='ar']").find("*").andSelf().contents().each(function () {
        if (this.nodeType === 3) {
            this.nodeValue = this.nodeValue.replace(/\d/g, function (v) {
                return String.fromCharCode(v.charCodeAt(0) + 0x0630);
            });
        }
    });
</script>

<script>
    if (localStorage.getItem("ChangeLanguageFirstTime") === null) {
        doGTranslate('en|ar');
        localStorage.setItem("ChangeLanguageFirstTime", true);
    }
</script>
</body>

</html>