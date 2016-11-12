<?php
 $dt_countdown_date = esc_attr( get_theme_mod( 'dt_countdown_setting' ) );
 $date = date( 'F d, Y', strtotime( $dt_countdown_date ));
?>

 <div class="header-wrapper clear">
 	<div class="site-branding">
 		<?php if ( is_front_page() && is_home() ) : ?>
 			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
 		<?php else : ?>
 			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
 		<?php endif; ?>
 	</div><!-- .site-branding -->

 	<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>
 </div><!-- .header-wrapper -->

<?php if ( '' != get_header_image() && ( is_home() || is_front_page() || is_archive() || is_search() ) ) { ?>
	<div class="site-description-wrapper">
		<?php affinity_the_site_logo(); ?>
		<?php $name = get_bloginfo( 'name', 'display');
			if ( $name || is_customize_preview() ) : ?>
				<p class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $name; /* WPCS: xss ok. */ ?></a></p>
			<?php endif; ?>
		<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
		<?php endif; ?>
    <div class="dt-wedding-date">
      <p class="wedding-date">
        <?php echo date( 'l, F d, Y', strtotime( $dt_countdown_date )); ?>
      </p>
    </div>
    <div>
      <div class="countdown-container">
        <div id="clockdiv">
          <div>
            <span class="days"></span>
            <div class="smalltext">Days</div>
          </div>
          <div>
            <span class="hours"></span>
            <div class="smalltext">Hours</div>
          </div>
          <div>
            <span class="minutes"></span>
            <div class="smalltext">Minutes</div>
          </div>
          <div>
            <span class="seconds"></span>
            <div class="smalltext">Seconds</div>
          </div>
        </div>
      </div>
    </div>

	</div><!-- .site-description-wrapper -->
<?php } ?>

<?php if ( is_singular() && ! is_front_page() && ( '' != get_header_image() || has_post_thumbnail() ) ) {
	the_title( '<h1 class="entry-title">', '</h1>' );
} ?>
