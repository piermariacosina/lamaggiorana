<?php $day = date_i18n('j' ,strtotime(get_field('data')));
$daylong = date_i18n('l' ,strtotime(get_field('data')));?>
			<div class="course">
				<div class="date">
					<div class="day"><span><?php echo $day ?></span></div>
					<div class="daylong"><span><?php echo $daylong; ?></span></div>
					<div class="time"><span>ore <?php the_field("orario_da"); ?>&#8202;&ndash;&#8202;<?php the_field("orario_a"); ?></span></div>
					<div class="tilde"><span>&#126;</span></div>
					<div class="cost"><span>costo: <?php the_field("costo"); ?> euro</span></div>
				</div>
			
			
			<div class="details">
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
			</div>
		</div>