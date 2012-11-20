<?php get_header();
				
while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'emotional' ); ?>
	<h1 class="page-title"><?php the_title(); ?></h1>
<?php endwhile;

$arCalendar_current = array(
	"gennaio" => array(),
	"febbraio" => array(),
	"marzo" => array(),
	"aprile" => array(),
	"maggio" => array(),
	"giugno" => array(),
	"luglio" => array(),
	"agosto" => array(),
	"settembre" => array(),
	"ottobre" => array(),
	"novembre" => array(),
	"dicembre" => array()
);

$arCalendar_next = array(
	"gennaio" => array(),
	"febbraio" => array(),
	"marzo" => array(),
	"aprile" => array(),
	"maggio" => array(),
	"giugno" => array(),
	"luglio" => array(),
	"agosto" => array(),
	"settembre" => array(),
	"ottobre" => array(),
	"novembre" => array(),
	"dicembre" => array()
);

$current_year = date_i18n('Y' ,strtotime('now'));
$next_year = date_i18n('Y' ,strtotime('now')) +1;

// The Query
$args = array( 
	'posts_per_page' => -1,
	'post_type'=>'lesson' ,
	'post_status'=>'private'
);

query_posts( $args );

// The Loop
while ( have_posts() ) : the_post();
	$date = date_i18n('m' ,strtotime(get_field('data')));
	$year = date_i18n('Y' ,strtotime(get_field('data')));
	switch($date)
	{
		case "01":
			if ($year == $current_year){
				$arCalendar_current["gennaio"][]= get_the_ID();
			}elseif($year == $next_year){
				$arCalendar_next["gennaio"][]= get_the_ID();
			}
		break;
		case "02":
			if ($year == $current_year){
				$arCalendar_current["febbraio"][]= get_the_ID();
			}elseif($year == $next_year){
				$arCalendar_next["febbraio"][]= get_the_ID();
			}
		break;
		case "03":
			if ($year == $current_year){
				$arCalendar_current["marzo"][]= get_the_ID();
			}elseif($year == $next_year){
				$arCalendar_next["marzo"][]= get_the_ID();
			}
		break;
		case "04":
			if ($year == $current_year){
				$arCalendar_current["aprile"][]= get_the_ID();
			}elseif($year == $next_year){
				$arCalendar_next["aprile"][]= get_the_ID();
			}
		break;
		case "05":
			if ($year == $current_year){
				$arCalendar_current["maggio"][]= get_the_ID();
			}elseif($year == $next_year){
				$arCalendar_next["maggio"][]= get_the_ID();
			}
		break;
		case "06":
			if ($year == $current_year){
				$arCalendar_current["giugno"][]= get_the_ID();
			}elseif($year == $next_year){
				$arCalendar_next["giugno"][]= get_the_ID();
			}
		break;
		case "07":
			if ($year == $current_year){
				$arCalendar_current["luglio"][]= get_the_ID();
			}elseif($year == $next_year){
				$arCalendar_next["luglio"][]= get_the_ID();
			}
		break;
		case "08":
			if ($year == $current_year){
				$arCalendar_current["agosto"][]= get_the_ID();
			}elseif($year == $next_year){
				$arCalendar_next["agosto"][]= get_the_ID();
			}
		break;
		case "09":
			if ($year == $current_year){
				$arCalendar_current["settembre"][]= get_the_ID();
			}elseif($year == $next_year){
				$arCalendar_next["settembre"][]= get_the_ID();
			}
		break;
		case "10":
			if ($year == $current_year){
				$arCalendar_current["ottobre"][]= get_the_ID();
			}elseif($year == $next_year){
				$arCalendar_next["ottobre"][]= get_the_ID();
			}
		break;
		case "11":
			if ($year == $current_year){
				$arCalendar_current["novembre"][]= get_the_ID();
			}elseif($year == $next_year){
				$arCalendar_next["novembre"][]= get_the_ID();
			}
		break;
		case "12":
			if ($year == $current_year){
				$arCalendar_current["dicembre"][]= get_the_ID();
			}elseif($year == $next_year){
				$arCalendar_next["dicembre"][]= get_the_ID();
			}
		break;
	}
endwhile;
wp_reset_query();?>

<?php get_template_part( 'content', 'calendario' );?>

<?php get_footer(); ?>