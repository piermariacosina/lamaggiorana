<?php $data = strtotime(get_field('data'));
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
						<!--<div class="tilde">&#126;</div>
						<div class="cost">costo: <?php the_field("costo"); ?></div>-->
					</div>
				
				
				<div class="events">
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