<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?> v>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?> lang="it">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?> lang="it">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]>
<html <?php language_attributes();  ?> lang="it">
<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta description="La scuola di cucina La Maggiorana è un'esperienza che coinvolge tutti i sensi: la cura per i dettagli e la raffinata sensibilità per l'ospitalità, descrivono un'atmosfera in perfetto equilibrio tra sapienza e passione, in cui gli studenti sono guidati con precisione ed affettuosa semplicità alla comprensione e sperimentazione delle tecniche culinarie più sofisticate. Lontano dai frastuoni e dal caos della città, l'arte e il gusto passano da maestra ad allievi di tutte le età chiacchierando con pentole, tegami, mestoli e fruste, all'affiorare di sapori autentici e di rapporti e di amicizie." />
<title><?php
	global $page, $paged;



	echo bloginfo( 'name' );
	wp_title( '|', true, 'left' );
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/favicon.ico" type="image/x-icon" />
<!--[if lt IE 8]>
    <link href="<?php echo get_template_directory_uri(); ?>/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
</head>

<body <?php body_class('bp'); ?>>
<div id="fb-root"></div>
	<header id="branding" role="banner" <?php if(!is_front_page()){ echo 'style="background: url('.get_field('background-shade','options').') no-repeat left bottom";';}?>>
			<hgroup id="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php the_field('logo','options'); ?>" alt="<?php _e('La Maggiorana dal 1973', MAGGIORANA_TD) ?>" />			
				</a>
			</hgroup>	

			<nav id="access" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<a class="eng_flag" href="/home/english"><div id="eng_flag"></div></a>
			</nav><!-- #access -->
	</header><!-- #branding -->


	<div id="main" >