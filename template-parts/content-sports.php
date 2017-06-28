<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>
<?php $background_image = get_field("background_image");?>
<article id="post-<?php the_ID(); ?>" <?php post_class("template-sports"); ?> <?php if($background_image):
		echo 'style="background-image: url('.$background_image['url'].')"';
	endif;?>>
	<header class="row-1">
		<h1><?php the_title();?></h1>
	</header><!--.row-1-->
	<?php 
	$args = array(
		'post_type'=>'page',
		'post_per_page'=>'3',
		'post_parent'=>get_the_ID(),
		'orderby'=>'menu_order',
		'order'=>'ASC'
	);
	$learn_more_text = get_field("learn_more_text");
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
							<div class="hidden">
								<?php $secondary_title = get_field("secondary_title");?>
								<h2><?php the_title();?></h2>
								<?php if($secondary_title):?>
									<div class="dates">
										<?php echo $secondary_title;?>
									</div><!--.dates-->
								<?php endif;?>
								<?php if($learn_more_text):?>
									<div class="learn-more">
										<?php echo $learn_more_text;?>
									</div><!--.dates-->
								<?php endif;?>
							</div><!--.hidden-->
						</div><!--inner-wrapper-->
					</a>
				</div><!--.outer-wrapper-->
			<?php endwhile;?>
		</div><!--.row-3-->
		<?php wp_reset_postdata();
	endif;?>
	<div class="row-3 copy">
		<?php the_content();?>
	</div><!--.row-4-->
</article><!-- #post-## -->
