<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<?php 
	 $attachment_id = get_post_thumbnail_id();
	 $thumb = wp_get_attachment_image_src( $attachment_id, 'featured-page'); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo $thumb[0]; ?>');">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<footer>
			<?php the_content();?>
		</footer>
</article><!-- #post-<?php the_ID(); ?> -->
