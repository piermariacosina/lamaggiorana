<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<footer id="colophon" role="contentinfo" <?php if(!is_front_page()){ echo 'style="background: url('.get_field('background-shade-bottom','options').') no-repeat left top";';}?>>
	
		<?php if(!is_front_page()):
		
			$args = array( 
				'posts_per_page' => 5,
				'post_type'=>'news' ,
				'post_status'=>'private',
				'force_no_custom_order'   =>  TRUE
				);
				
			query_posts( $args );

			echo '<ul id="news">';
			
			while ( have_posts() ) : the_post();
				echo '<li class="new">';
				get_template_part( 'content', 'news' );
				echo "</li>";
			endwhile;
			
			echo "</ul>";?>
			
			<?php // Reset Query
			wp_reset_query();
		
		$imgleft = wp_get_attachment_image_src(get_field('immagine_sinistra_footer','options'), 'colophon-left');
		$imgright = wp_get_attachment_image_src(get_field('immagine_destra_footer','options'), 'colophon-right');?>
			
		<header class="colophon">
			<div id="img-sx-header" style="background-image: url('<?php echo $imgleft[0]; ?>')"></div>
			<div id="img-dx-header" style="background-image: url('<?php echo $imgright[0]; ?>')"></div>
		</header>
		
		<?php wp_nav_menu();?>
			 
		<hgroup id="footer-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php the_field('logo','options'); ?>" alt="<?php _e('La Maggiorana dal 1973', MAGGIORANA_TD) ?>" />			
			</a>
		</hgroup>
		<?php endif;?>
			<div class="arrow">
				<p><a href="/come-raggiungerci">Come raggiungerci</a></p>
				<p><a href="<?php if( get_field('calendario','options') ):?><?php the_field('calendario','options');?><?php endif; ?>" target="_blank">Scarica il calendario</a></p>
			</div>
			<div class="details">
			<?php if( get_field('location','options') ):?>
				<p><?php the_field('location','options');?></p>
			<?php endif; ?>
			<?php if( get_field('telefono','options') ):?>
				<p><?php the_field('telefono','options');?></p>
			<?php endif; ?>
			<?php if( get_field('fax','options') ):?>
				<p><?php the_field('fax','options');?></p>
			<?php endif; ?>
			</div>
			
			<div class="share">
				<div id="twitter"><a href="https://twitter.com/LaMaggiorana" class="twitter-follow-button" data-show-count="false" data-lang="it">Segui @LaMaggiorana</a></div>
				<div class="fb">
					<div class="fb-like" data-href="http://lamaggiorana.it" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true" data-font="lucida grande"></div>
					
				</div>
				<a id="doers" href="http://thedoersproject.com">Proudly designed by <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_thedoers.png" width="73px" height="21px"/></a>
				
			</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>