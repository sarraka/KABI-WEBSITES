<?php
/**
 * Template for displaying a single "project" post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
?>


<section class="padding-top pb-4">
            <div class="container">
                <div class="row align-items-center text-center justify-content-center text-center">
                    <div class="col-lg-12" data-aos="fade-in">
                        <div class="d-flex justify-content-center gap-4 mb-4">
                            <p class="paragraph text-white"><i class="ti ti-calendar-event"></i>&nbsp;<?php echo get_the_date('F j, Y'); // Example: August 10, 2025 ?></p>
                            <p class="paragraph text-white"><i class="ti ti-clock-hour-4"></i>&nbsp;
							 <?php
                                    $content = get_post_field('post_content', get_the_ID());
                                    $word_count = str_word_count(strip_tags($content));
                                    $reading_time = ceil($word_count / 200); // average 200 wpm
                                
                                    echo $reading_time . ' min read';
                                    ?>
							</p>
                        </div>
                        <h1 class="text-white h1"><?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </section>

		    <section class="padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-4" data-aos="fade-in">
                        <div class="blog-d-image rounded-4">
							<?php the_post_thumbnail('full', array("class" => "w-100")); ?>
                        </div>
                    </div>
                  <div class="text-white paragraph">
<?php the_content(); ?>
                    </div>
                   

                </div>
            </div>
        </section>

<?php get_footer(); ?>