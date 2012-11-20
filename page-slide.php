<?php
/*
Template name: Slideshow
*/
 get_header(); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'emotional' ); ?>
			<?php endwhile; // end of the loop. 
the_content();			
get_footer('inside'); ?>