<?php
/*
	Template name:Gallery
 */

get_header('gallery');?>
<div id="gallery-info">
	<?php while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1><h2><?php _e('Photo Credits', MAGGIORANA_TD);?>: <?php the_field('crediti');?></h2>
	<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer('gallery'); ?>