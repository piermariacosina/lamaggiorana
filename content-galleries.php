<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
 global $counter;

 ?>
		<?php switch($counter):
			 	case "1":?>
			 		<section id="first">
				 		<a href="<?php the_permalink() ?>">
				 			<?php the_post_thumbnail('gallery-1'); ?>
				 		</a>
				 		<div class="details">
					 		<h1><?php the_title(); ?></h1>
					 		<?php the_content(); ?>
				 		</div>
			 		</section>
			 	<?php break;
			 	case "2":?>
			 		<section id="second">
			 			<a href="<?php the_permalink() ?>">
			 				<?php the_post_thumbnail('gallery-2'); ?>
			 			</a>
			 			<div class="details">
			 				<h1><?php the_title(); ?></h1>
			 				<?php the_content(); ?>
			 			</div>
			 		</section>
			 	<?php break;
			 	case "3":?>
			 		<section id="third">
			 			<a href="<?php the_permalink() ?>">
			 				<?php the_post_thumbnail('gallery-3'); ?>
			 			</a>
			 			<div class="details">
			 				<h1><?php the_title(); ?></h1>
			 				<?php the_content(); ?>
			 			</div>
			 		</section>
			 	<?php break;
			 case "4":?>
			 	<section  id="fourth">
			 		<a href="<?php the_permalink() ?>">
			 			 <?php the_post_thumbnail('gallery-4'); ?>
			 		</a>
			 		<div class="details">
			 			<h1><?php the_title(); ?></h1>
			 			<?php the_content(); ?>
			 		</div>
			 	</section>
			 <?php break;
			 case "5":?>
			 	<section  id="fifth">
			 		<a href="<?php the_permalink() ?>">
			 			<?php the_post_thumbnail('gallery-5'); ?>
			 		</a>
			 		<div class="details">
			 			<h1><?php the_title(); ?></h1>
			 			<?php the_content(); ?>
			 		</div>
			 	</section>
			 <?php break;
			  endswitch;?>
<?php $counter++; ?>
<?php if($counter == 6) $counter=1;?>