<?php
/* Template Name: contact */
?>
<?php get_header(); ?>



<section class="px-5 padding-bottom pt-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="contact-card">
                    <h3 class="text-white mb-4">Leave your message</h3>
                    <?php echo do_shortcode('[contact-form-7 id="1270" title="contact"]'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <h4 class="h3 text-white">Let’s Connect and Build What’s Next!</h4>
                <p class="paragraph text-white opacity-50">
                    Whether you’re ready to transform your hiring process, explore assessment solutions, or just
                    want to learn more about how KABi can support your goals—our team is here for you.
                </p>
                <div class="pt-5 d-flex flex-column">
<!--                     <div class="d-flex gap-3 w-100 mb-4 mb-lg-0">
                        <div>
                            <img src="https://staging.kabi.ai/wp-content/uploads/2025/07/phone.svg" alt="">
                        </div>
                        <div class="d-flex flex-column">
                            <div class="text-white small opacity-50">Phone numbers</div>
                            <div class="text-white fs-6">+966 55 555 5555</div>
                        </div>
                    </div> -->
                    <div class="d-flex gap-3 w-100 mb-4">
                        <div>
                            <img src="https://staging.kabi.ai/wp-content/uploads/2025/07/email.png" alt="">
                        </div>
                        <div class="d-flex flex-column">
                            <div class="text-white small opacity-50">Email address</div>
                            <div class="text-white fs-6">hello@kabi.ai</div>
                        </div>
                    </div>
					<div class="d-flex gap-3 w-100 mb-4">
                        <div>
                            <img src="https://staging.kabi.ai/wp-content/uploads/2025/07/working-hr.svg" alt="">
                        </div>
                        <div class="d-flex flex-column">
                            <div class="text-white small opacity-50">Working Hours</div>
                            <div class="text-white fs-6">Sunday to Thursday,
                                9:00 AM – 5:00 PM (KSA Time)</div>
                        </div>
                    </div>
					<div class="d-flex gap-3 w-100 mb-4 mb-lg-0">
                        <div>
                            <img src="https://staging.kabi.ai/wp-content/uploads/2025/07/office.svg" alt="">
                        </div>
                        <div class="d-flex flex-column">
                            <div class="text-white small opacity-50">Office</div>
                            <div class="text-white fs-6">Riyadh, Saudi Arabia
                                Lumere Center – Prince Turki Al-Awwal Rd.
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="pt-5">
                    <div class="social-card">
                        <h4 class="text-white">Social Media</h4>
                        <div class="d-flex justify-content-between">
                            <p class="text-white opacity-50">Follow us on Social media and stay updated with our
                                latest features, success stories, and insights.</p>
                            <div class="mt-4 d-flex gap-2 social-media">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="text-white opacity-50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4l11.733 16h4.267l-11.733 -16z" /><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" /></svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="text-white opacity-50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M16.5 7.5v.01" /></svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="text-white opacity-50" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-brand-linkedin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 2a5 5 0 0 1 5 5v10a5 5 0 0 1 -5 5h-10a5 5 0 0 1 -5 -5v-10a5 5 0 0 1 5 -5zm-9 8a1 1 0 0 0 -1 1v5a1 1 0 0 0 2 0v-5a1 1 0 0 0 -1 -1m6 0a3 3 0 0 0 -1.168 .236l-.125 .057a1 1 0 0 0 -1.707 .707v5a1 1 0 0 0 2 0v-3a1 1 0 0 1 2 0v3a1 1 0 0 0 2 0v-3a3 3 0 0 0 -3 -3m-6 -3a1 1 0 0 0 -.993 .883l-.007 .127a1 1 0 0 0 1.993 .117l.007 -.127a1 1 0 0 0 -1 -1" /></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>