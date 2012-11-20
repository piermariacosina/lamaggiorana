<?php 
/*
Template name: Empty page

*/
get_header();
				
while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'emotional' ); ?>
	<h1 class="page-title"><?php the_title(); ?></h1>
<?php endwhile;
 the_content();
 get_footer(); ?>