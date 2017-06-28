<?php
/**
 * Template part for displaying page content in index.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>
<?php $background_image = get_field("background_image");?>
<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?> <?php if($background_image):
	echo 'style="background-image: url('.$background_image['url'].')"';
endif;?>>
	<header id="masthead" class="site-header row-1" role="banner">
		<h1 class="logo">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png";?>" alt="<?php bloginfo('name'); ?>"></a>
		</h1>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'acstarter' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="row-2" <?php post_class("template-index"); ?> <?php if($background_image):
		echo 'style="background-image: url('.$background_image['url'].')"';
	endif;?>>
		<header class="row-1">
			<h2><?php the_title();?></h2>
		</header><!--.row-1-->
		<?php $args = array(
			'post_type'=>'page',
			'post_per_page'=>'4',
			'post__in'=>array(15,13,10,8),
			'orderby'=>'menu_order',
			'order'=>'ASC'
		);
		$query = new WP_Query( $args );
		if($query->have_posts()):?>
			<div class="row-2 clear-bottom">
				<?php while($query->have_posts()): $query->the_post();
					$image = get_field("home_image");?>
					<div class="outer-wrapper js-blocks">
						<a href="<?php echo get_the_permalink();?>">
							<div class="inner-wrapper" <?php if($image):
								echo 'style="background-image: url('.$image['sizes']['large'].')"';
							endif;?>>
								<h2><?php the_title();?></h2>
							</div><!--inner-wrapper-->
						</a>
					</div><!--.outer-wrapper-->
				<?php endwhile;?>
			</div><!--.row-3-->
			<?php wp_reset_postdata();
		endif;?>
	</div><!--.row-2-->
</article><!-- #post-## -->
