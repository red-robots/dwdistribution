<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php $post = get_post(21);
			setup_postdata( $post );?>
			<?php $background_image = get_field("background_image");?>
			<section class="error-404 not-found" <?php if($background_image):
				echo 'style="background-image: url('.$background_image['url'].')"';
			endif;?>>
				<header class="row-1">
					<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'acstarter' ); ?></h1>
				</header><!-- .page-header -->

				<div class="row-2 outer-wrapper">
					<div class="inner-wrapper copy">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'acstarter' ); ?></p>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</div><!-- .inner-wrapper -->
				</div><!-- .outer-wrapper -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
