<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webtv
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<aside id="sidebar-right" class="widget-area">
	<?php
	if ( is_active_sidebar( 'sidebar-right' ) ) {
		dynamic_sidebar( 'sidebar-right' );
	}
	?>
</aside><!-- #secondary -->
