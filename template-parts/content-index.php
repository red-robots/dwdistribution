<?php
/**
 * Template part for displaying page content in index.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?>>
	<header id="masthead" class="site-header row-1" role="banner">
		<h1 class="logo">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png";?>" alt="<?php bloginfo('name'); ?>"></a>
		</h1>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'acstarter' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="row-2">
		<?php the_title();?>
	</div><!--.row-2-->
	<?php $args = array(
		'post_type'=>'page',
		'post_per_page'=>'4',
		'post__in'=>array(15,13,10,8),
		'orderby'=>'menu_order',
		'order'=>'ASC'
	);
	$query = new WP_Query( $args );
	if($query->have_posts()):?>
		<div class="row-3">
			<?php while($query->have_posts()): $query->the_post();?>
				<div class="outer-wrapper">
					<div class="inner-wrapper">
					</div><!--inner-wrapper-->
				</div><!--.outer-wrapper-->
			<?php endwhile;?>
		</div><!--.row-3-->
	<?php endif;?>
</article><!-- #post-## -->
