<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<?php $imgleft = wp_get_attachment_image_src(get_field('immagine_sinistra_header'), 'emotional-left'); ?>
<?php $imgright = wp_get_attachment_image_src(get_field('immagine_destra_header'), 'emotional-right'); ?>
<header class="emotional">
	<div id="img-sx-header" style="background-image: url('<?php echo $imgleft[0]; ?>')"></div>
	<div id="img-dx-header" style="background-image: url('<?php echo $imgright[0]; ?>')"></div>
<!--		<h1 class="entry-title"><?php the_title(); ?></h1>-->
</header><!-- .entry-header -->
<div id="info"><?php if( get_field('info')) the_field('info'); ?></div>
