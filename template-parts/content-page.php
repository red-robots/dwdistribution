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
<article id="post-<?php the_ID(); ?>" <?php post_class("template-page"); ?> <?php if($background_image):
		echo 'style="background-image: url('.$background_image['url'].')"';
	endif;?>>
	<div class="row-1">
		<h1><?php the_title();?></h1>
		<?php $secondary_title = get_field("secondary_title");
		if($secondary_title):?>
			<h2><?php echo $secondary_title;?></h2>
		<?php endif;?>
	</div><!--.row-1-->
	<div class="row-2 outer-wrapper">
		<div class="inner-wrapper copy ">
			<?php the_content();?>
		</div><!--.inner-wrapper-->
	</div><!--.row-4-->
</article><!-- #post-## -->
