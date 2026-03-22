<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary">
		<main id="main" role="main">
		<section class="kabi-banner d-flex flex-column align-items-center inner-banner"></section>
			<section class="error-404 not-found padding-top padding-bottom d-flex align-items-center" style="height:70vh;">
				<div class="container-xl" style="text-align:center">
					<div class="error-common-outer">
						<div class="py-4">
						<h1 class="fs-1 font-weight-600 text-danger">404</h1>
						</div>
						<h2 class="h1 pb-4">Page not found</h2>
						<div class="d-flex justify-content-center align-items-center">
							<a href="<?php echo site_url(); ?>" class="btn btn-black px-5">Back to Home</a>
						</div>
					</div>
				</div>
			</section><!-- .error-404 -->
		</main><!-- .site-main -->
		<?php //get_sidebar( 'content-bottom' ); ?>
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
