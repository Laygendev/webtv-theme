<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webtv
 */
?>
<aside id="secondary" class="widget-area">
	<nav id="site-navigation" class="main-navigation">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav><!-- #site-navigation -->
	<?php
	if ( is_active_sidebar( 'sidebar-1' ) ) {
		dynamic_sidebar( 'sidebar-1' );
	}
	?>

</aside><!-- #secondary -->
