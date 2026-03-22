<?php
/* Template Name: blogs */
?>
<?php get_header(); ?>

<section class="kabi-banner d-flex flex-column align-items-center inner-banner"></section>
<section class="padding-top padding-bottom">
    <div class="container-xl">
		<h1 class="fs-heading text-center" data-aos="fade-up">Our Blog, Our Way of&nbsp;<span class="text-gradient">Thinking About Things</span></h1>
        <h3 class="fs-sub-heading text-center mt-4" data-aos="fade-up">We share with our audience articles &amp; insights about human capital best practices, technology &amp; AI to keep everyone up to date</h3>
    </div>
</section>

<section class="padding-bottom">
    <div class="container-xl">
        <div class="row">

            <?php
            query_posts('category_name=blogs');
            while (have_posts()) : the_post();
            ?>

                <div class="col-lg-4 mb-5" data-aos="fade-up">
                    <div class="blog-image border-radius-10 overflow-hidden">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('full', array("class" => "img_fit")); ?>
                        </a>
                    </div>
                    <span class="text-gradient-small fs-16 mt-4 d-block tags"><?php echo get_post_meta($post->ID,'label',true);?></span>
                    <h4 class="fs-blog-titile mt-3">
                        <a href="<?php the_permalink(); ?>" class="text-dark">
                            <?php echo wp_trim_words(get_the_title(), 15); ?>
                        </a>
                    </h4>
                    <div class="fs-16 mt-3 blog-desc">
                        <?php echo wp_trim_words(get_the_content(), 20); ?>
                        <a href="<?php the_permalink(); ?>">more</a>
                        </p>
                    </div>
						<span class="text-dark fs-16 opacity-75 mt-3 d-block date-en"><?php the_time('j F, Y') ?></span>
						<span class="text-dark fs-16 opacity-75 mt-3 d-block date-ar"><?php the_time('j F، Y') ?></span>
                </div>

            <?php
            endwhile;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>