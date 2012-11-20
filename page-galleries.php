<?php get_header(); ?>

			<?php // The Query
				$args = array( 
					'posts_per_page' => 5,
					'post_type'=>'gallery' ,
					'post_status'=>'publish',
					'paged' => $paged
					);
					
				query_posts( $args );
			
				$counter=1;?>
				<div class="galleries">
				<?php // The Loop
				while ( have_posts() ) : the_post();
					get_template_part( 'content', 'galleries' );
				endwhile;	?>
				</div>
				<?php maggiorana_content_nav( 'nav-below' ); 
				
				 // Reset Query
				wp_reset_query();?>

<?php get_footer(); ?>