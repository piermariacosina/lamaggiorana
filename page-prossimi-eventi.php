<?php get_header();
				
while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'emotional' ); ?>
	<h1 class="page-title"><?php the_title(); ?></h1>
<?php endwhile;

$arCalendarEvent = array(
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

// The Query
$args = array( 
	'posts_per_page' => -1,
	'post_type'=>'event' ,
	'post_status'=>'private'
);
	
query_posts( $args );

// The Loop
while ( have_posts() ) : the_post();
	$date = date_i18n('m' ,strtotime(get_field('data')));
	
	switch($date)
	{
		case "01":
			$arCalendarEvent["gennaio"][]= get_the_ID();
		break;
		case "02":
			$arCalendarEvent["febbraio"][]= get_the_ID();
		break;
		case "03":
			$arCalendarEvent["marzo"][]= get_the_ID();
		break;
		case "04":
			$arCalendarEvent["aprile"][]= get_the_ID();
		break;
		case "05":
			$arCalendarEvent["maggio"][]= get_the_ID();
		break;
		case "06":
			$arCalendarEvent["giugno"][]= get_the_ID();
		break;
		case "07":
			$arCalendarEvent["luglio"][]= get_the_ID();
		break;
		case "08":
			$arCalendarEvent["agosto"][]= get_the_ID();
		break;
		case "09":
			$arCalendarEvent["settembre"][]= get_the_ID();
		break;
		case "10":
			$arCalendarEvent["ottobre"][]= get_the_ID();
		break;
		case "11":
			$arCalendarEvent["novembre"][]= get_the_ID();
		break;
		case "12":
			$arCalendarEvent["dicembre"][]= get_the_ID();
		break;
	}
endwhile;?>

<?php get_template_part( 'content', 'prossimi-eventi' );?>

<?php get_footer(); ?>