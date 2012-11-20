<?php get_header(); ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'emotional' ); ?>

			<?php endwhile; // end of the loop. ?>
			
			
			<?php // The Query
				$args = array( 
					'posts_per_page' => -1,
					'post_type'=>'course' ,
					'post_status'=>'private'
					);
					
				query_posts( $args );
				
				// The Loop
				while ( have_posts() ) : the_post();
					
					get_template_part( 'content', 'corso' );
					
				endwhile;	
				
				// Reset Query
				wp_reset_query();?>
		</div><!-- #primary -->

<?php get_footer(); ?>