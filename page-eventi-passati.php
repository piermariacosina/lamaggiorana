<?php get_header(); ?>
<?php global $post; ?>
	<?php while ( have_posts() ) : the_post(); ?>
	
				<?php get_template_part( 'content', 'emotional' ); ?>
	
				<?php endwhile; // end of the loop. ?>
			
			
			<?php // The Query
				$args = array( 
					'posts_per_page' => -1,
					'post_type'=>'event',
					'post_status'=>'private',
					'nopaging' => 'true',
					
					);
									
				query_posts($args);
				
				$today = date_i18n('d/m/y' ,strtotime('now'));
				$split_today = split("/", $today);
				$ar_events= array();
				// The Loop
				while ( have_posts() ) : the_post();
					if ( get_field('mostra_in_eventi_passati')):
						$date = date_i18n('d/m/y' ,strtotime(get_field('data')));
						$split_date = split("/", $date);
						$post->data=strtotime(get_field('data'));
						if ($split_date[2] < $split_today[2]):
							$ar_events[]=$post;
						
						elseif ($split_date[1] == $split_today[1]):
								if ( $split_date[0] < $split_today[0]) :
									$ar_events[]=$post;
									
								endif;
						endif;
					
					endif;
				endwhile;
				
				
				function cmp($a, $b)
				{
				    return strcmp($a->data, $b->data);
				}
				
				usort($ar_events, "cmp");
				$ar_reverse_events = array_reverse($ar_events);
				
				
				// Reset Query
				wp_reset_query();
				
				foreach( $ar_reverse_events as $post ) : setup_postdata($post); 
			
					get_template_part( 'content', 'evento-passato' );	
				endforeach;
				?>

<?php get_footer(); ?>