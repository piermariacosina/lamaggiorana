<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
$strGiorni='';
while(the_repeater_field('giorni')):
	$strGiorni .= get_sub_field('giorno').', ';
endwhile;
 $giorni = substr($strGiorni, 0, -2);?>
<?php 
	 $attachment_id = get_post_thumbnail_id();
	 $thumb = wp_get_attachment_image_src( $attachment_id, 'featured-page'); ?>
	<?php if (get_the_title() != ' Primo livello'): ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo $thumb[0]; ?>');">
	<?php elseif (get_the_title() == ' Primo livello'): ?>
				<article id="post-<?php the_ID(); ?>"?>
				<iframe src="http://player.vimeo.com/video/53578330?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=91d16b" width="300" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<?php endif; ?>
		
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php the_content();?>		
		</header>
		<footer>
			<ul>
				<li><p><span><?php _e('Frequency',MAGGIORANA_TD); ?>:</span> <?php the_field('frequenza'); ?></p></li>
				<li><p><span><?php _e('Duration',MAGGIORANA_TD); ?>:</span> <?php the_field('durata'); ?></p></li>
				<li><p><span><?php _e('Time',MAGGIORANA_TD); ?>:</span> <?php the_field('orario_da'); ?>&#8202;&ndash;&#8202;<?php the_field('orario_a'); ?></p></li>
				<li><p><span><?php _e('Days',MAGGIORANA_TD); ?>:</span> <?php echo $giorni ?></p></li>
				<li><p><span><?php _e('Cost',MAGGIORANA_TD); ?>:</span> <?php the_field('costo'); ?></p></li>
			</ul>
		</footer>
</article><!-- #post-<?php the_ID(); ?> -->
