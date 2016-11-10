<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Affinity-Child
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'affinity' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php
    //header image
    get_template_part( 'components/header/header', 'image' ); ?>

    <?php
    //custom logo or Bree and Lance
    if ( function_exists( 'get_custom_logo' ) && has_custom_logo() ) :
      the_custom_logo();
    else : ?>
      <h1 class="headername"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr( bloginfo( 'name' ) ); ?></a></h1>
    <?php endif;
    //site 'tagline' (in this case - We're getting married)
		get_template_part( 'components/header/site', 'branding' ); ?>

    //TODO add date and countdown
    <div class="dt-wedding-date">
      <?php $dt_countdown_date = esc_attr( get_theme_mod( 'dt_countdown_setting' ) ); echo date( 'l, F d, Y', strtotime( $dt_countdown_date )); ?>
    </div>
	</header>

	<div id="content" class="site-content">
