<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function fnHomeBanner(){
	$args = array(
		'post_type'   => 'home_banner',
		'post_status' => 'publish',
		'order' => 'ASC',
		'orderby' => 'ID'
	);

	$banner = new WP_Query( $args );
	if( $banner->have_posts()){
		$counter = 1;
		$output = '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
	            <div class="carousel-indicators">
	                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"
	                    aria-current="true" aria-label="Slide 1"></button>
	                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1"
	                    aria-label="Slide 2"></button>
	            </div>
	            <div class="carousel-inner">';
	    while( $banner->have_posts() ) :
			
			$banner->the_post();  

			$url = wp_get_attachment_url( get_post_thumbnail_id($banner->ID), 'full' ); 

	        $output .= '<div class="carousel-item ' . ($counter == 1 ? 'active' : '') . '">
	                    <img src="' . $url . '" class="d-block w-100" alt="' . get_the_title() . '">
	                </div>';
	        $counter++;
	    endwhile;
		wp_reset_postdata();
		
		$output .= '</div>
	            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
	                data-bs-slide="prev">
	                <span class="carousel-control-prev-icon" aria-hidden="true">
	                    <i class="ri-arrow-left-line"></i>
	                </span>

	            </button>
	            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
	                data-bs-slide="next">
	                <span class="carousel-control-next-icon" aria-hidden="true">
	                    <i class="ri-arrow-right-line"></i>
	                </span>
	            </button>
	        </div>';
    	return   $output;
	}
}

add_shortcode('homebanner', 'fnHomeBanner');

function testimonials() {
	$args = array(
		'post_type'   => 'testimonial',
		'post_status' => 'publish',
		'order' => 'ASC',
		'orderby' => 'ID'
	);

	$testimonials = new WP_Query( $args );
	if( $testimonials->have_posts()){
		$counter = 1;
		$output = '<div class="owl-carousel owl-theme mt-5">';
		$close = true;
		while( $testimonials->have_posts() ) :
			
			$testimonials->the_post();  

			$url = wp_get_attachment_url( get_post_thumbnail_id($testimonials->ID), 'full' ); 

			$output .= '<div class="item p-5" data-aos="fade-up">
                        <p class="h6 font-weight-light text-gray line-h-28 mb-0">' . get_the_content() . '</p>
                        <div class="d-flex align-items-center mt-5">
                            <img src="' . $url . '" alt="' . get_the_title() . '" class="w-auto"> <h5 class="ms-4 mb-0">' . get_the_title() . '</h5>
                        </div>
                    </div>';
			$counter++;		   
		endwhile;
		wp_reset_postdata();
		
		$output .= "</div>";
		
		return   $output;
	}
}

add_shortcode('testimonialsshortcode', 'testimonials');

update_option( 'siteurl', 'https://kabi.ai' );
update_option( 'home', 'https://kabi.ai' );

add_action('wp_enqueue_scripts', 'remove_wpbakery_css', 100);
function remove_wpbakery_css() {
    wp_dequeue_style('js_composer_front');
    wp_deregister_style('js_composer_front');
}

 // Security fixes from penetration test report

// Block unauthenticated access to user endpoints
add_filter('rest_endpoints', function($endpoints) {
    if (!is_user_logged_in()) {
        if (isset($endpoints['/wp/v2/users'])) {
            unset($endpoints['/wp/v2/users']);
        }
        if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
            unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
        }
    }
    return $endpoints;
});

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_empty_string');

// Disable XML-RPC (backup to .htaccess)
add_filter('xmlrpc_enabled', '__return_false');

?>
