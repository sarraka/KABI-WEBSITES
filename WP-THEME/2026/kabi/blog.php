<?php
/* Template Name: blog */
?>
<?php get_header(); ?>

<section class="padding-top padding-bottom">
    <div class="container">
        <div class="row align-items-center text-center justify-content-center text-center">
            <div class="col-lg-12" data-aos="fade-in">
                <h1 class="text-white h1 gradient-text">Our Blog, Our Way of Thinking About
                        Things
                </h1>
                <p class="paragraph text-white mt-4 w-100 w-lg-70 m-auto">We share with our audience articles & insights about human capital best practices, technology & AI to keep everyone up to date</p>
            </div>
        </div>
    </div>
</section>

<section class="padding-bottom">
    <div class="container">
        <div class="row">
            <?php
            query_posts('category_name=blogs');
            while (have_posts()):
                the_post();
                ?>
                <div class="col-lg-4 mb-4" data-aos="fade-in">
                    <div class="blog-box">
						<div>	
							<div class="blog-image">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full', array()); ?>
								</a>
							</div>
							<div class="my-4">
								<h3 class="text-white line-1">
									<a href="<?php the_permalink(); ?>" class="text-white fs-18">
									<?php echo wp_trim_words(get_the_title(), 15); ?>
									</a>
								</h3>
							</div>
						</div>
                        <div class="d-flex gap-3 align-items-center mt-5">
                            <div class="d-flex gap-2 align-items-center">
                                <i class="ti ti-calendar-event text-white"></i>
                                <span
                                    class="text-white"><?php echo get_the_date('F j, Y'); // Example: August 10, 2025 ?></span>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <i class="ti ti-clock-hour-3 text-white"></i>
                                <span class="text-white">

                                    <?php
                                    $content = get_post_field('post_content', get_the_ID());
                                    $word_count = str_word_count(strip_tags($content));
                                    $reading_time = ceil($word_count / 200); // average 200 wpm
                                
                                    echo $reading_time . ' min read';
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>