<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
// The Query
global $arCalendar_current, $arCalendar_next , $current_year, $next_year;
$current_month = date_i18n('F' ,strtotime('now'));
?>
<div id="months">
<?php if ( $arCalendar_current["gennaio"] ) : ?>
	
	<h2 id="gennaio" <?php if( 'gennaio' == $current_month ) echo 'class="selected"'; ?>><a>Gennaio <?php echo $current_year; ?></a></h2>
	<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
	<?php  
	$gennaio = array( 
		'posts_per_page' => -1,
		'post_type'=>'lesson' ,
		'meta_key'=>'data',
		'orderby'=>'meta_value',
		'post_status'=>'private',
		'force_no_custom_order'   =>  TRUE,
		'post__in' =>  $arCalendar_current["gennaio"],
		'order'=>'ASC'
	);
	
	query_posts( $gennaio );
	
	// The Loop
	while ( have_posts() ) : the_post();
		get_template_part( 'single', 'calendar' );			
	endwhile;
		
			// Reset Query
			wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;


if ( $arCalendar_current["febbraio"] ) : ?>

	<h2 id="febbraio" <?php if( 'febbraio' == $current_month ) echo 'class="selected"'; ?>><a>Febbraio <?php echo $current_year; ?></a></h2>
	<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
	<?php
	$febbraio = array( 
		'posts_per_page' => -1,
		'post_type'=>'lesson' ,
		'meta_key'=>'data',
		'orderby'=>'meta_value',
		'post_status'=>'private',
		'force_no_custom_order'   =>  TRUE,
		'post__in' => $arCalendar_current["febbraio"],
		'order'=>'ASC'
		);
		
	query_posts( $febbraio );

	// The Loop
	while ( have_posts() ) : the_post();
		get_template_part( 'single', 'calendar' );			
	endwhile;
		
			// Reset Query
			wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendar_current["marzo"] ) : ?>
	
		<h2 id="marzo" <?php if( 'marzo' == $current_month ) echo 'class="selected"'; ?>><a>Marzo <?php echo $current_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		
		$marzo = array( 
			'posts_per_page' => -1,
			'post_type'=>'lesson' ,
			'meta_key'=>'data',
			'orderby'=>'meta_value',
			'post_status'=>'private',
			'force_no_custom_order'   =>  TRUE,
			'post__in' => $arCalendar_current["marzo"],
			'order' => 'ASC'
		);
				
		query_posts( $marzo );
		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendar_current["aprile"] ) : ?>
	
		<h2 id="aprile" <?php if( 'aprile' == $current_month ) echo 'class="selected"'; ?>><a>Aprile <?php echo $current_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$aprile = array( 
			'posts_per_page' => -1,
			'post_type'=>'lesson',
			'meta_key'=>'data',
			'orderby'=>'meta_value',
			'post_status'=>'private',
			'force_no_custom_order'   =>  TRUE,
			'post__in' => $arCalendar_current["aprile"],
			'order'=>'ASC'
		);
					
		query_posts( $aprile );
			
		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendar_current["maggio"] ) : ?>
	
		<h2 id="maggio" <?php if( 'maggio' == $current_month ) echo 'class="selected"'; ?>><a>Maggio <?php echo $current_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$maggio = array( 
				'posts_per_page' => -1,
				'post_type'=>'lesson',
				'meta_key'=>'data',
				'orderby'=>'meta_value',
				'post_status'=>'private',
				'force_no_custom_order'   =>  TRUE,
				'post__in' => $arCalendar_current["maggio"],
				'order'=>'ASC'
				);
				
		query_posts( $maggio );
	
		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
	
if ( $arCalendar_current["giugno"] ) : ?>
	
		<h2 id="giugno" <?php if( 'giugno' == $current_month ) echo 'class="selected"'; ?>><a>Giugno <?php echo $current_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$giugno = array( 
			'posts_per_page' => -1,
			'post_type'=>'lesson',
			'meta_key'=>'data',
			'orderby'=>'meta_value',
			'post_status'=>'private',
			'force_no_custom_order'   =>  TRUE,
			'post__in' => $arCalendar_current["giugno"],
			'order'=>'ASC'
		);
			
		query_posts( $giugno );
	
		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
		
if ( $arCalendar_current["luglio"] ) : ?>
	
		<h2 id="luglio" <?php if( 'luglio' == $current_month ) echo 'class="selected"'; ?>><a>Luglio <?php echo $current_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$luglio = array( 
				'posts_per_page' => -1,
				'post_type'=>'lesson',
				'meta_key'=>'data',
				'orderby'=>'meta_value',
				'post_status'=>'private',
				'force_no_custom_order'   =>  TRUE,
				'post__in' => $arCalendar_current["luglio"],
				'order'=>'ASC'
				);
				
		query_posts( $luglio );
	
		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
			
if ( $arCalendar_current["agosto"] ) : ?>
	
		<h2 id="agosto" <?php if( 'agosto' == $current_month ) echo 'class="selected"'; ?>><a>Agosto <?php echo $current_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$agosto = array( 
				'posts_per_page' => -1,
				'post_type'=>'lesson',
				'meta_key'=>'data',
				'orderby'=>'meta_value',
				'post_status'=>'private',
				'force_no_custom_order'   =>  TRUE,
				'post__in' => $arCalendar_current["agosto"],
				'order'=>'ASC'
				);
				
		query_posts( $agosto );
		
		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
				
if ( $arCalendar_current["settembre"] ) : ?>
	
		<h2 id="settembre" <?php if( 'settembre' == $current_month ) echo 'class="selected"'; ?>><a>Settembre <?php echo $current_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$settembre = array( 
				'posts_per_page' => -1,
				'post_type'=>'lesson',
				'meta_key'=>'data',
				'orderby'=>'meta_value',
				'post_status'=>'private',
				'force_no_custom_order'   =>  TRUE,
				'post__in' => $arCalendar_current["settembre"],
				'order'=>'ASC'
				);
				
		query_posts( $settembre );
	
		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
					
if ( $arCalendar_current["ottobre"] ) : ?>
	
		<h2 id="ottobre" <?php if( 'ottobre' == $current_month ) echo 'class="selected"'; ?>><a>Ottobre <?php echo $current_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$ottobre = array( 
		'posts_per_page' => -1,
		'post_type'=>'lesson',
		'meta_key'=>'data',
		'orderby'=>'meta_value',
		'post_status'=>'private',
		'force_no_custom_order'   =>  TRUE,
		'post__in' => $arCalendar_current["ottobre"],
		'order'=>'ASC'
		);
				
		query_posts( $ottobre );
	
		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
						
if ( $arCalendar_current["novembre"] ) : ?>
	
		<h2 id="novembre" <?php if( 'novembre' == $current_month ) echo 'class="selected"'; ?>><a>Novembre <?php echo $current_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$novembre = array( 
			'posts_per_page' => -1,
			'post_type'=>'lesson',
			'meta_key'=>'data',
			'orderby'=>'meta_value',
			'post_status'=>'private',
			'force_no_custom_order'   =>  TRUE,
			'post__in' => $arCalendar_current["novembre"],
			'order'=>'ASC'
		);
				
		query_posts( $novembre );
		
		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;
	
		// Reset Query
		wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
							
if ( $arCalendar_current["dicembre"] ) : ?>
	
		<h2 id="dicembre" <?php if( 'dicembre' == $current_month ) echo 'class="selected"'; ?>><a>Dicembre <?php echo $current_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$dicembre = array( 
			'posts_per_page' => -1,
			'post_type'=>'lesson',
			'meta_key'=>'data',
			'orderby'=>'meta_value',
			'post_status'=>'private',
			'force_no_custom_order'   =>  TRUE,
			'post__in' => $arCalendar_current["dicembre"],
			'order'=>'ASC'
		);
				
		query_posts( $dicembre );
		
		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );						
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif; ?>

<!-- //NEXT YEAR -->
<?php if ( $arCalendar_next["gennaio"] ) : ?>

	<h2 id="gennaio" <?php if( 'gennaio' == $current_month ) echo 'class="selected"'; ?>><a>Gennaio <?php echo $next_year; ?></a></h2>
	<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
	<?php  
	$gennaio = array( 
		'posts_per_page' => -1,
		'post_type'=>'lesson' ,
		'meta_key'=>'data',
		'orderby'=>'meta_value',
		'post_status'=>'private',
		'force_no_custom_order'   =>  TRUE,
		'post__in' =>  $arCalendar_next["gennaio"],
		'order'=>'ASC'
	);

	query_posts( $gennaio );

	// The Loop
	while ( have_posts() ) : the_post();
		get_template_part( 'single', 'calendar' );			
	endwhile;

			// Reset Query
			wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;


if ( $arCalendar_next["febbraio"] ) : ?>

	<h2 id="febbraio" <?php if( 'febbraio' == $current_month ) echo 'class="selected"'; ?>><a>Febbraio <?php echo $next_year; ?></a></h2>
	<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
	<?php
	$febbraio = array( 
		'posts_per_page' => -1,
		'post_type'=>'lesson' ,
		'meta_key'=>'data',
		'orderby'=>'meta_value',
		'post_status'=>'private',
		'force_no_custom_order'   =>  TRUE,
		'post__in' => $arCalendar_next["febbraio"],
		'order'=>'ASC'
		);

	query_posts( $febbraio );

	// The Loop
	while ( have_posts() ) : the_post();
		get_template_part( 'single', 'calendar' );			
	endwhile;

			// Reset Query
			wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendar_next["marzo"] ) : ?>

		<h2 id="marzo" <?php if( 'marzo' == $current_month ) echo 'class="selected"'; ?>><a>Marzo <?php echo $next_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 

		$marzo = array( 
			'posts_per_page' => -1,
			'post_type'=>'lesson' ,
			'meta_key'=>'data',
			'orderby'=>'meta_value',
			'post_status'=>'private',
			'force_no_custom_order'   =>  TRUE,
			'post__in' => $arCalendar_next["marzo"],
			'order' => 'ASC'
		);

		query_posts( $marzo );
		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;

				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendar_next["aprile"] ) : ?>

		<h2 id="aprile" <?php if( 'aprile' == $current_month ) echo 'class="selected"'; ?>><a>Aprile <?php echo $next_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$aprile = array( 
			'posts_per_page' => -1,
			'post_type'=>'lesson',
			'meta_key'=>'data',
			'orderby'=>'meta_value',
			'post_status'=>'private',
			'force_no_custom_order'   =>  TRUE,
			'post__in' => $arCalendar_next["aprile"],
			'order'=>'ASC'
		);

		query_posts( $aprile );

		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;

				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendar_next["maggio"] ) : ?>

		<h2 id="maggio" <?php if( 'maggio' == $current_month ) echo 'class="selected"'; ?>><a>Maggio <?php echo $next_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$maggio = array( 
				'posts_per_page' => -1,
				'post_type'=>'lesson',
				'meta_key'=>'data',
				'orderby'=>'meta_value',
				'post_status'=>'private',
				'force_no_custom_order'   =>  TRUE,
				'post__in' => $arCalendar_next["maggio"],
				'order'=>'ASC'
				);

		query_posts( $maggio );

		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;

				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendar_next["giugno"] ) : ?>

		<h2 id="giugno" <?php if( 'giugno' == $current_month ) echo 'class="selected"'; ?>><a>Giugno <?php echo $next_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$giugno = array( 
			'posts_per_page' => -1,
			'post_type'=>'lesson',
			'meta_key'=>'data',
			'orderby'=>'meta_value',
			'post_status'=>'private',
			'force_no_custom_order'   =>  TRUE,
			'post__in' => $arCalendar_next["giugno"],
			'order'=>'ASC'
		);

		query_posts( $giugno );

		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;

				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendar_next["luglio"] ) : ?>

		<h2 id="luglio" <?php if( 'luglio' == $current_month ) echo 'class="selected"'; ?>><a>Luglio <?php echo $next_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$luglio = array( 
				'posts_per_page' => -1,
				'post_type'=>'lesson',
				'meta_key'=>'data',
				'orderby'=>'meta_value',
				'post_status'=>'private',
				'force_no_custom_order'   =>  TRUE,
				'post__in' => $arCalendar_next["luglio"],
				'order'=>'ASC'
				);

		query_posts( $luglio );

		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;

				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendar_next["agosto"] ) : ?>

		<h2 id="agosto" <?php if( 'agosto' == $current_month ) echo 'class="selected"'; ?>><a>Agosto <?php echo $next_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$agosto = array( 
				'posts_per_page' => -1,
				'post_type'=>'lesson',
				'meta_key'=>'data',
				'orderby'=>'meta_value',
				'post_status'=>'private',
				'force_no_custom_order'   =>  TRUE,
				'post__in' => $arCalendar_next["agosto"],
				'order'=>'ASC'
				);

		query_posts( $agosto );

		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;

				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendar_next["settembre"] ) : ?>

		<h2 id="settembre" <?php if( 'settembre' == $current_month ) echo 'class="selected"'; ?>><a>Settembre <?php echo $next_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$settembre = array( 
				'posts_per_page' => -1,
				'post_type'=>'lesson',
				'meta_key'=>'data',
				'orderby'=>'meta_value',
				'post_status'=>'private',
				'force_no_custom_order'   =>  TRUE,
				'post__in' => $arCalendar_next["settembre"],
				'order'=>'ASC'
				);

		query_posts( $settembre );

		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;

				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendar_next["ottobre"] ) : ?>

		<h2 id="ottobre" <?php if( 'ottobre' == $current_month ) echo 'class="selected"'; ?>><a>Ottobre <?php echo $next_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$ottobre = array( 
		'posts_per_page' => -1,
		'post_type'=>'lesson',
		'meta_key'=>'data',
		'orderby'=>'meta_value',
		'post_status'=>'private',
		'force_no_custom_order'   =>  TRUE,
		'post__in' => $arCalendar_next["ottobre"],
		'order'=>'ASC'
		);

		query_posts( $ottobre );

		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendar_next["novembre"] ) : ?>

		<h2 id="novembre" <?php if( 'novembre' == $current_month ) echo 'class="selected"'; ?>><a>Novembre <?php echo $next_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$novembre = array( 
			'posts_per_page' => -1,
			'post_type'=>'lesson',
			'meta_key'=>'data',
			'orderby'=>'meta_value',
			'post_status'=>'private',
			'force_no_custom_order'   =>  TRUE,
			'post__in' => $arCalendar_next["novembre"],
			'order'=>'ASC'
		);

		query_posts( $novembre );

		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );			
		endwhile;

		// Reset Query
		wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendar_next["dicembre"] ) : ?>

		<h2 id="dicembre" <?php if( 'dicembre' == $current_month ) echo 'class="selected"'; ?>><a>Dicembre <?php echo $next_year; ?></a></h2>
		<section style="background: url('<?php the_field('background-gradient','options');?>') repeat-y left top;">
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$dicembre = array( 
			'posts_per_page' => -1,
			'post_type'=>'lesson',
			'meta_key'=>'data',
			'orderby'=>'meta_value',
			'post_status'=>'private',
			'force_no_custom_order'   =>  TRUE,
			'post__in' => $arCalendar_next["dicembre"],
			'order'=>'ASC'
		);

		query_posts( $dicembre );

		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'single', 'calendar' );						
		endwhile;

				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif; ?>
</div>
