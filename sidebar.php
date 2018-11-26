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
	<?php the_custom_logo(); ?>
	
	<?php $tv_options = get_option( 'tv_options' ); ?>
	<?php if ( ! empty( $tv_options ) ) : ?>
		<ul class="social-network">
			<?php if ( ! empty( $tv_options['facebook'] ) ) : ?>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			<?php endif; ?>
			<?php if ( ! empty( $tv_options['twitter'] ) ) : ?>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			<?php endif; ?>
			<?php if ( ! empty( $tv_options['twitch'] ) ) : ?>
				<li><a href="#"><i class="fab fa-twitch"></i></a></li>
			<?php endif; ?>
			<?php if ( ! empty( $tv_options['youtube'] ) ) : ?>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
	
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
	
	<?php $tv_options = get_option( 'tv_options' ); 
	
	if ( ! empty( $tv_options['copyright'] ) ) : 
	?>
		<footer id="colophon" class="site-footer">
			<div class="site-info">
				
				<?php echo $tv_options['copyright']; ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	<?php 
	endif; 
	?>

</aside><!-- #secondary -->
