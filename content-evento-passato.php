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
	 <?php $date = date_i18n('j M y' ,strtotime(get_field('data'))); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo $thumb[0]; ?>');">
		<header>
			<h1 class="entry-title"><?php if(get_field("gallery_associata")): ?><a href="<?php the_field("gallery_associata"); ?>"><?php the_title(); ?></a><?php else: ?><?php the_title(); ?><?php endif; ?></h1>
		</header>
		<footer>
			<h2><?php the_field('sottotitolo'); ?></h2>
			<?php the_content();?>
			<ul>
				<li><p><span>Data :</span> <?php echo $date ?></p></li>
				<?php if(get_field("gallery_associata")): ?>
					<li><p><span><a href="<?php the_field("gallery_associata"); ?>"><?php _e('Go to Gallery', MAGGIORANA_TD); ?></a></span></p></li>
				<?php endif; ?>
			</ul>
			
		</footer>
</article><!-- #post-<?php the_ID(); ?> -->
