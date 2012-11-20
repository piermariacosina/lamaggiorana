<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
// The Query
global $arCalendarEvent;
$current_month = date_i18n('F' ,strtotime('now'));
$today = date_i18n('d/m/y' ,strtotime('now'));
$split_today = split("/", $today);?>	

<div id="months">
<?php if ( $arCalendarEvent["gennaio"] ) : ?>
	
	<h2 <?php if( 'gennaio' == $current_month ) echo 'class="selected"'; ?>><a>Gennaio</a></h2>
	<section>
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
	<?php  
	$gennaio = array( 
		'posts_per_page' => -1,
		'post_type'=>'event' ,
		'post_status'=>'private',
		'post__in' =>  $arCalendarEvent["gennaio"]
	);
	
	query_posts( $gennaio );
	$counter = 0;
	// The Loop
	while ( have_posts() ) : the_post();
		$data = strtotime(get_field('data'));
		$day = date_i18n('j' ,$data);
		$daylong = date_i18n('l' ,$data);
		$date = date_i18n('d/m/y' ,$data);
		$split_date = split("/", $date);
		
		if ($split_date[2] >= $split_today[2]):
			if ($split_date[1] >= $split_today[1]):
				if ( $split_date[0] >= $split_today[0]) :?>
					<div class="course">
						<div class="date">
							<div class="day"><?php echo $day ?></div>
							<div class="daylong"><?php echo $daylong; ?></div>
							<div class="time">ore <?php the_field("orario_da"); ?>&#8202;&ndash;&#8202;<?php the_field("orario_a"); ?></div>
							<div class="tilde">&#126;</div>
							<div class="cost">costo: <?php the_field("costo"); ?></div>
						</div>
					
					
					<div class="details">
						<h3><?php the_title(); ?></h3>
						<h4><?php the_field("sottotitolo"); ?></h4>
						<?php the_content(); ?>
					</div>
				</div>
				<?php $counter++;
				endif;
			endif;
		endif;
			
		$counter++;
		if($counter<=1): ?>
			<p class="exception"><?php _e('This is the current month, but there is no other events.',MAGGIORANA_TD); ?></p>
		<?php endif;
	endwhile;
		
	// Reset Query
	wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;


if ( $arCalendarEvent["febbraio"] ) : ?>

	<h2 <?php if( 'febbraio' == $current_month ) echo 'class="selected"'; ?>><a>Febbraio</a></h2>
	<section>
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
	<?php
	$febbraio = array( 
		'posts_per_page' => -1,
		'post_type'=>'event' ,
		'post_status'=>'private',
		'post__in' => $arCalendarEvent["febbraio"]
		);
		
	query_posts( $febbraio );
	
	$counter = 0;
	// The Loop
	while ( have_posts() ) : the_post();
		$data = strtotime(get_field('data'));
		$day = date_i18n('j' ,$data);
		$daylong = date_i18n('l' ,$data);
		$date = date_i18n('d/m/y' ,$data);
		$split_date = split("/", $date);
		
		if ($split_date[2] >= $split_today[2]):
			if ($split_date[1] >= $split_today[1]):
				if ( $split_date[0] >= $split_today[0]) :?>
					<div class="course">
						<div class="date">
							<div class="day"><?php echo $day ?></div>
							<div class="daylong"><?php echo $daylong; ?></div>
							<div class="time">ore <?php the_field("orario_da"); ?>&#8202;&ndash;&#8202;<?php the_field("orario_a"); ?></div>
						</div>
					
					
					<div class="details">
						<h3><?php the_title(); ?></h3>
						<h4><?php the_field("sottotitolo"); ?></h4>
						<?php the_content(); ?>
					</div>
				</div>
				<?php $counter++;
				 endif;
			endif;
		endif;
		$counter++;
		if($counter<=1): ?>
			<p class="exception"><?php _e('This is the current month, but there is no other events.',MAGGIORANA_TD); ?></p>
		<?php endif;
		
	
	endwhile;
		
			// Reset Query
			wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendarEvent["marzo"] ) : ?>
	
		<h2 <?php if( 'marzo' == $current_month ) echo 'class="selected"'; ?>><a>Marzo</a></h2>
		<section>
		<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
			<?php 
			$aprile = array( 
				'posts_per_page' => -1,
				'post_type'=>'event' ,
				'post_status'=>'private',
				'post__in' => $arCalendarEvent["marzo"]
			);
						
			query_posts( $aprile );
			$counter = 0;
			// The Loop
			while ( have_posts() ) : the_post();
				
			$data = strtotime(get_field('data'));
			$day = date_i18n('j' ,$data);
			$daylong = date_i18n('l' ,$data);
			$date = date_i18n('d/m/y' ,$data);
			$split_date = split("/", $date);
				
				if ($split_date[2] >= $split_today[2]):
					if ($split_date[1] >= $split_today[1]):
						if ( $split_date[0] >= $split_today[0]) :?>
							<div class="course">
								<div class="date">
									<div class="day"><?php echo $day ?></div>
									<div class="daylong"><?php echo $daylong; ?></div>
									<div class="time">ore <?php the_field("orario_da"); ?>&#8202;&ndash;&#8202;<?php the_field("orario_a"); ?></div>
									<div class="tilde">&#126;</div>
									<div class="cost">costo: <?php the_field("costo"); ?></div>
								</div>
							
							
							<div class="details">
								<h3><?php the_title(); ?></h3>
								<h4><?php the_field("sottotitolo"); ?></h4>
								<?php the_content(); ?>
							</div>
						</div>
						<?php $counter++;
						endif;
					endif;
				endif;
				
				$counter++;
				if($counter<=1): ?>
					<p class="exception"><?php _e('This is the current month, but there is no other events.',MAGGIORANA_TD); ?></p>
				<?php endif;
				
			endwhile;
				
					// Reset Query
					wp_reset_query();?>
		<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
		</section>
<?php endif;

if ( $arCalendarEvent["aprile"] ) : ?>
	
		<h2 <?php if( 'aprile' == $current_month ) echo 'class="selected"'; ?>><a>Aprile</a></h2>
		<section>
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$aprile = array( 
			'posts_per_page' => -1,
			'post_type'=>'event' ,
			'post_status'=>'private',
			'post__in' => $arCalendarEvent["aprile"]
		);
					
		query_posts( $aprile );
		$counter = 0;
		// The Loop
		while ( have_posts() ) : the_post();
			
		$data = strtotime(get_field('data'));
		$day = date_i18n('j' ,$data);
		$daylong = date_i18n('l' ,$data);
		$date = date_i18n('d/m/y' ,$data);
		$split_date = split("/", $date);
			
			if ($split_date[2] >= $split_today[2]):
				if ($split_date[1] >= $split_today[1]):
					if ( $split_date[0] >= $split_today[0]) :?>
						<div class="course">
							<div class="date">
								<div class="day"><?php echo $day ?></div>
								<div class="daylong"><?php echo $daylong; ?></div>
								<div class="time">ore <?php the_field("orario_da"); ?>&#8202;&ndash;&#8202;<?php the_field("orario_a"); ?></div>
								<div class="tilde">&#126;</div>
								<div class="cost">costo: <?php the_field("costo"); ?></div>
							</div>
						
						
						<div class="details">
							<h3><?php the_title(); ?></h3>
							<h4><?php the_field("sottotitolo"); ?></h4>
							<?php the_content(); ?>
						</div>
					</div>
					<?php $counter++;
					endif;
				endif;
			endif;
			
			$counter++;
			if($counter<=1): ?>
				<p class="exception"><?php _e('This is the current month, but there is no other events.',MAGGIORANA_TD); ?></p>
			<?php endif;
			
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;

if ( $arCalendarEvent["maggio"] ) : ?>
	
		<h2 <?php if( 'maggio' == $current_month ) echo 'class="selected"'; ?>><a>Maggio</a></h2>
		<section>
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$maggio = array( 
				'posts_per_page' => -1,
				'post_type'=>'event' ,
				'post_status'=>'private',
				'post__in' => $arCalendarEvent["maggio"]
				);
				
		query_posts( $maggio );
		$counter = 0;
		// The Loop
		while ( have_posts() ) : the_post();
			
		$data = strtotime(get_field('data'));
		$day = date_i18n('j' ,$data);
		$daylong = date_i18n('l' ,$data);
		$date = date_i18n('d/m/y' ,$data);
		$split_date = split("/", $date);
			
			if ($split_date[2] >= $split_today[2]):
				if ($split_date[1] >= $split_today[1]):
					if ( $split_date[0] >= $split_today[0]) :?>
						<div class="course">
							<div class="date">
								<div class="day"><?php echo $day ?></div>
								<div class="daylong"><?php echo $daylong; ?></div>
								<div class="time">ore <?php the_field("orario_da"); ?>&#8202;&ndash;&#8202;<?php the_field("orario_a"); ?></div>
								<div class="tilde">&#126;</div>
								<div class="cost">costo: <?php the_field("costo"); ?></div>
							</div>
						
						
						<div class="details">
							<h3><?php the_title(); ?></h3>
							<h4><?php the_field("sottotitolo"); ?></h4>
							<?php the_content(); ?>
						</div>
					</div>
					<?php $counter++;
					endif;
				endif;
			endif;	
			
			$counter++;
			if($counter<=1): ?>
				<p class="exception"><?php _e('This is the current month, but there is no other events.',MAGGIORANA_TD); ?></p>
			<?php endif;
				
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
	
if ( $arCalendarEvent["giugno"] ) : ?>
	
		<h2 <?php if( 'giugno' == $current_month ) echo 'class="selected"'; ?>><a>Giugno</a></h2>
		<section>
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$giugno = array( 
			'posts_per_page' => -1,
			'post_type'=>'event' ,
			'post_status'=>'private',
			'post__in' => $arCalendarEvent["giugno"]
		);
			
		query_posts( $giugno );
		$counter = 0;
		// The Loop
		while ( have_posts() ) : the_post();
			
		$data = strtotime(get_field('data'));
		$day = date_i18n('j' ,$data);
		$daylong = date_i18n('l' ,$data);
		$date = date_i18n('d/m/y' ,$data);
		$split_date = split("/", $date);
			
			if ($split_date[2] >= $split_today[2]):
				if ($split_date[1] >= $split_today[1]):
					if ( $split_date[0] >= $split_today[0]) :?>
						<div class="course">
							<div class="date">
								<div class="day"><?php echo $day ?></div>
								<div class="daylong"><?php echo $daylong; ?></div>
								<div class="time">ore <?php the_field("orario_da"); ?>&#8202;&ndash;&#8202;<?php the_field("orario_a"); ?></div>
								<div class="tilde">&#126;</div>
								<div class="cost">costo: <?php the_field("costo"); ?></div>
							</div>
						
						
						<div class="details">
							<h3><?php the_title(); ?></h3>
							<h4><?php the_field("sottotitolo"); ?></h4>
							<?php the_content(); ?>
						</div>
					</div>
					<?php $counter++;
					endif;
				endif;
			endif;
			
			$counter++;
			if($counter<=1): ?>
				<p class="exception"><?php _e('This is the current month, but there is no other events.',MAGGIORANA_TD); ?></p>
			<?php endif;
				
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
		
if ( $arCalendarEvent["luglio"] ) : ?>
	
		<h2 <?php if( 'luglio' == $current_month ) echo 'class="selected"'; ?>><a>Luglio</a></h2>
		<section>
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$luglio = array( 
				'posts_per_page' => -1,
				'post_type'=>'event' ,
				'post_status'=>'private',
				'post__in' => $arCalendarEvent["luglio"]
				);
				
		query_posts( $luglio );
		$counter = 0;
		// The Loop
		while ( have_posts() ) : the_post();
			
		$data = strtotime(get_field('data'));
		$day = date_i18n('j' ,$data);
		$daylong = date_i18n('l' ,$data);
		$date = date_i18n('d/m/y' ,$data);
		$split_date = split("/", $date);
			
			if ($split_date[2] >= $split_today[2]):
				if ($split_date[1] >= $split_today[1]):
					if ( $split_date[0] >= $split_today[0]) :?>
						<div class="course">
							<div class="date">
								<div class="day"><?php echo $day ?></div>
								<div class="daylong"><?php echo $daylong; ?></div>
								<div class="time">ore <?php the_field("orario_da"); ?>&#8202;&ndash;&#8202;<?php the_field("orario_a"); ?></div>
								<div class="tilde">&#126;</div>
								<div class="cost">costo: <?php the_field("costo"); ?></div>
							</div>
						
						
						<div class="details">
							<h3><?php the_title(); ?></h3>
							<h4><?php the_field("sottotitolo"); ?></h4>
							<?php the_content(); ?>
						</div>
					</div>
					<?php $counter++;
					endif;
				endif;
			endif;
			
			$counter++;
			if($counter<=1): ?>
				<p class="exception"><?php _e('This is the current month, but there is no other events.',MAGGIORANA_TD); ?></p>
			<?php endif;
			
			endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
			
if ( $arCalendarEvent["agosto"] ) : ?>
	
		<h2 <?php if( 'agosto' == $current_month ) echo 'class="selected"'; ?>><a>Agosto</a></h2>
		<section>
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$agosto = array( 
				'posts_per_page' => -1,
				'post_type'=>'event' ,
				'post_status'=>'private',
				'post__in' => $arCalendarEvent["agosto"]
				);
				
		query_posts( $agosto );
		$counter = 0;
		// The Loop
		while ( have_posts() ) : the_post();
			
		$data = strtotime(get_field('data'));
		$day = date_i18n('j' ,$data);
		$daylong = date_i18n('l' ,$data);
		$date = date_i18n('d/m/y' ,$data);
		$split_date = split("/", $date);
			
			if ($split_date[2] >= $split_today[2]):
				if ($split_date[1] >= $split_today[1]):
					if ( $split_date[0] >= $split_today[0]) :?>
						<div class="course">
							<div class="date">
								<div class="day"><?php echo $day ?></div>
								<div class="daylong"><?php echo $daylong; ?></div>
								<div class="time">ore <?php the_field("orario_da"); ?>&#8202;&ndash;&#8202;<?php the_field("orario_a"); ?></div>
								<div class="tilde">&#126;</div>
								<div class="cost">costo: <?php the_field("costo"); ?></div>
							</div>
						
						
						<div class="details">
							<h3><?php the_title(); ?></h3>
							<h4><?php the_field("sottotitolo"); ?></h4>
							<?php the_content(); ?>
						</div>
					</div>
					<?php $counter++;
					endif;
				endif;
			endif;
			
			$counter++;
			if($counter<=1): ?>
				<p class="exception"><?php _e('This is the current month, but there is no other events.',MAGGIORANA_TD); ?></p>
			<?php endif;
				
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
				
if ( $arCalendarEvent["settembre"] ) : ?>
	
		<h2 <?php if( 'settembre' == $current_month ) echo 'class="selected"'; ?>><a>Settembre</a></h2>
		<section>
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$settembre = array( 
				'posts_per_page' => -1,
				'post_type'=>'event' ,
				'post_status'=>'private',
				'post__in' => $arCalendarEvent["settembre"]
				);
				
		query_posts( $settembre );
		$counter = 0;
		// The Loop
		while ( have_posts() ) : the_post();
			
		$data = strtotime(get_field('data'));
		$day = date_i18n('j' ,$data);
		$daylong = date_i18n('l' ,$data);
		$date = date_i18n('d/m/y' ,$data);
		$split_date = split("/", $date);
			
			if ($split_date[2] >= $split_today[2]):
				if ($split_date[1] >= $split_today[1]):
					if ( $split_date[0] >= $split_today[0]) :?>
						<div class="course">
							<div class="date">
								<div class="day"><?php echo $day ?></div>
								<div class="daylong"><?php echo $daylong; ?></div>
								<div class="time">ore <?php the_field("orario_da"); ?>&#8202;&ndash;&#8202;<?php the_field("orario_a"); ?></div>
								<div class="tilde">&#126;</div>
								<div class="cost">costo: <?php the_field("costo"); ?></div>
							</div>
						
						
							<div class="details">
								<h3><?php the_title(); ?></h3>
								<h4><?php the_field("sottotitolo"); ?></h4>
								<?php the_content(); ?>
							</div>
						</div>
					<?php $counter++;
					endif;
				endif;
			endif;
			
			$counter++;
			if($counter<=1): ?>
				<p class="exception"><?php _e('This is the current month, but there is no other events.',MAGGIORANA_TD); ?></p>
			<?php endif;
		
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
					
if ( $arCalendarEvent["ottobre"] ) : ?>
	
		<h2 <?php if( 'ottobre' == $current_month ) echo 'class="selected"'; ?>><a>Ottobre</a></h2>
		<section>
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$ottobre = array( 
		'posts_per_page' => -1,
		'post_type'=>'event' ,
		'post_status'=>'private',
		'post__in' => $arCalendarEvent["ottobre"]
		);
				
		query_posts( $ottobre );
		$counter = 0;
		// The Loop
		while ( have_posts() ) : the_post();
			
		$data = strtotime(get_field('data'));
		$day = date_i18n('j' ,$data);
		$daylong = date_i18n('l' ,$data);
		$date = date_i18n('d/m/y' ,$data);
		$split_date = split("/", $date);
			
			if ($split_date[2] >= $split_today[2]):
				if ($split_date[1] >= $split_today[1]):
					if ( $split_date[0] >= $split_today[0]) :?>
						<div class="course">
							<div class="date">
								<div class="day"><?php echo $day ?></div>
								<div class="daylong"><?php echo $daylong; ?></div>
								<div class="time">ore <?php the_field("orario_da"); ?>&#8202;&ndash;&#8202;<?php the_field("orario_a"); ?></div>
								<div class="tilde">&#126;</div>
								<div class="cost">costo: <?php the_field("costo"); ?></div>
							</div>
						
						
							<div class="details">
								<h3><?php the_title(); ?></h3>
								<h4><?php the_field("sottotitolo"); ?></h4>
								<?php the_content(); ?>
							</div>
						</div>
					<?php $counter++;
					endif;
				endif;
			endif;
			
			$counter++;
			if($counter<=1): ?>
				<p class="exception"><?php _e('This is the current month, but there is no other events.',MAGGIORANA_TD); ?></p>
			<?php endif;
			
		endwhile;
			
				// Reset Query
				wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
						
if ( $arCalendarEvent["novembre"] ) : ?>
	
		<h2 <?php if( 'novembre' == $current_month ) echo 'class="selected"'; ?>><a>Novembre</a></h2>
		<section>
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$novembre = array( 
			'posts_per_page' => -1,
			'post_type'=>'event' ,
			'post_status'=>'private',
			'post__in' => $arCalendarEvent["novembre"]
		);
				
		query_posts( $novembre );
		$counter = 0;
		// The Loop
		while ( have_posts() ) : the_post();
			
		$data = strtotime(get_field('data'));
		$day = date_i18n('j' ,$data);
		$daylong = date_i18n('l' ,$data);
		$date = date_i18n('d/m/y' ,$data);
		$split_date = split("/", $date);
			
			if ($split_date[2] >= $split_today[2]):
				if ($split_date[1] >= $split_today[1]):
					if ( $split_date[0] >= $split_today[0]) :?>
				<div class="course">
					<div class="date">
						<div class="day"><?php echo $day ?></div>
						<div class="daylong"><?php echo $daylong; ?></div>
						<div class="time">ore <?php the_field("orario_da"); ?>&#8202;&ndash;&#8202;<?php the_field("orario_a"); ?></div>
						<div class="tilde">&#126;</div>
						<div class="cost">costo: <?php the_field("costo"); ?></div>
					</div>
				
				
				<div class="details">
					<h3><?php the_title(); ?></h3>
					<h4><?php the_field("sottotitolo"); ?></h4>
					<?php the_content(); ?>
				</div>
			</div>
				<?php $counter++;
				endif;
			endif;
		endif;
	
		$counter++;
		if($counter<=1): ?>
			<p class="exception"><?php _e('This is the current month, but there is no other events.',MAGGIORANA_TD); ?></p>
		<?php endif;
	
	endwhile;
	
		// Reset Query
		wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif;
							
if ( $arCalendarEvent["dicembre"] ) : ?>
	
		<h2 <?php if( 'dicembre' == $current_month ) echo 'class="selected"'; ?>><a>Dicembre</a></h2>
		<section>
	<div class="shade" style="background: url('<?php the_field('background-shade','options');?>') no-repeat left top;"></div>
		<?php 
		$dicembre = array( 
			'posts_per_page' => -1,
			'post_type'=>'event' ,
			'post_status'=>'private',
			'post__in' => $arCalendarEvent["dicembre"]
		);
				
		query_posts( $dicembre );
		$counter = 0;
		// The Loop
		while ( have_posts() ) : the_post();
			
		$data = strtotime(get_field('data'));
		$day = date_i18n('j' ,$data);
		$daylong = date_i18n('l' ,$data);
		$date = date_i18n('d/m/y' ,$data);
		$split_date = split("/", $date);
			
			if ($split_date[2] >= $split_today[2]):
				if ($split_date[1] >= $split_today[1]):
					if ( $split_date[0] >= $split_today[0]) :?>
						<div class="course">
							<div class="date">
								<div class="day"><?php echo $day ?></div>
								<div class="daylong"><?php echo $daylong; ?></div>
								<div class="time">ore <?php the_field("orario_da"); ?>&#8202;&ndash;&#8202;<?php the_field("orario_a"); ?></div>
								<div class="tilde">&#126;</div>
								<div class="cost">costo: <?php the_field("costo"); ?></div>
							</div>
						
						
						<div class="details">
							<h3><?php the_title(); ?></h3>
							<h4><?php the_field("sottotitolo"); ?></h4>
							<?php the_content(); ?>
						</div>
					</div>
					<?php $counter++;
					endif;
				endif;
			endif;
			
			$counter++;
			if($counter<=1): ?>
				<p class="exception"><?php _e('This is the current month, but there is no other events.',MAGGIORANA_TD); ?></p>
			<?php endif;
				
		endwhile;
		
					
		// Reset Query
		wp_reset_query();?>
	<div class="shade" style="background: url('<?php the_field('background-shade-bottom','options');?>') no-repeat left bottom;"></div>
	</section>
<?php endif; ?>
</div>
