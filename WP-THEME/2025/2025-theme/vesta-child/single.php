<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage creotopi
 * @since creotopi
 */
?>
<?php get_header(); ?>

<section class="kabi-banner d-flex flex-column align-items-center inner-banner"></section>
<section class="pt-4 pt-lg-5 padding-bottom">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <span class="text-gradient-small fs-16 mt-4 d-block font-weight-600"><?php echo get_post_meta($post->ID,'label',true);?></span>
                <h4 class="fs-2 font-weight-600 mt-2 text-dark"><?php echo get_the_title(); ?></h4>
                <span class="text-dark fs-16 opacity-75 d-block"><?php the_time('j F, Y') ?></span>
            </div>
            <div class="row mx-0 px-0">
                <div class="col-lg-8 mb-5">
                    <div class="blog-image border-radius-10 overflow-hidden">
                        <?php the_post_thumbnail('full', array("class" => "img_fit")); ?>
                    </div>
                    <div class="fs-16 mt-3 blog-desc">
                        <?php echo get_the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3 class="fs-24 font-weight-600 mb-4">Latest Articles</h3>

                    <?php
                    query_posts('category_name=blogs');
                    while (have_posts()) : the_post();
                    ?>
                        <div class="d-lg-flex mb-3">
                            <div class="blog-small-thumb mb-3 mb-lg-0">
                                <a href="<?php the_permalink(); ?>" class="text-dark">
                                    <?php the_post_thumbnail('full', array("class" => "img_fit")); ?>
                                </a>
                            </div>
                            <div class="px-lg-3">
                                <span class="text-dark fs-16 opacity-75 d-block"><?php the_time('j F, Y') ?></span>
                                <h4 class="fs-16 font-weight-600 mt-2">
                                    <a href="<?php the_permalink(); ?>" class="text-dark">
                                        <?php echo wp_trim_words(get_the_title(), 10); ?>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>