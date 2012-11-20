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
<html id="ie6" <?php language_attributes(); ?> lang="it">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?> lang="it">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?> lang="it">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]>
<html <?php language_attributes(); ?> lang="it">
<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta description="La scuola di cucina La Maggiorana è un'esperienza che coinvolge tutti i sensi: la cura per i dettagli e la raffinata sensibilità per l'ospitalità, descrivono un'atmosfera in perfetto equilibrio tra sapienza e passione, in cui gli studenti sono guidati con precisione ed affettuosa semplicità alla comprensione e sperimentazione delle tecniche culinarie più sofisticate. Lontano dai frastuoni e dal caos della città, l'arte e il gusto passano da maestra ad allievi di tutte le età chiacchierando con pentole, tegami, mestoli e fruste, all'affiorare di sapori autentici e di rapporti e di amicizie." />
<title><?php
	global $page, $paged;

	echo bloginfo( 'name' );
	wp_title( '|', true, 'left' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/favicon.ico" type="image/x-icon" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	wp_head();
?>
</head>

<body <?php body_class('bp'); ?>>
	<header id="branding" role="banner">
			<hgroup id="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php the_field('logo_white_background','options'); ?>" alt="<?php _e('La Maggiorana dal 1973', MAGGIORANA_TD) ?>" />			
				</a>
				<a class="back" href="javascript:history.back()">&larr; <?php _e('Back to previous page',MAGGIORANA_TD); ?></a>
			</hgroup>
	</header><!-- #branding -->


	<div id="main">