<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dsgreve
 */

?>

	</div><!-- #content -->
	<div class="push"></div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<h4><?php echo date ("Y
			"); ?> Dale S. Greve</h4>

			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'dsgreve' ), 'dsgreve', '<a href="https://automattic.com/" rel="designer">Dale Greve</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
