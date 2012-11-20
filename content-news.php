<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="news-<?php the_ID(); ?>">
		<header>
			<h2 class="news-title"><?php the_title(); ?></h2>
		</header>
		<footer>
			<?php the_content();?>
		</footer>
</article>
