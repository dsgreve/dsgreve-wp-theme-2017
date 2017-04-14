<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dsgreve
 */

?>

<article id="post-<?php the_ID(); ?> fsvs-body' <?php post_class(); ?>>

	<header class="page-header slide">
		<figure class="cover">
			<div class="feature" id="hero" itemtype="http://schema.org/ImageObject" role="presentation" style="background-image: url('<?php the_field('page_header_background'); ?>')"></div>
			<figcaption class="feature-credit">
						<span>
						</span>
			</figcaption>
			</figure>
			<div id="fsvs-body">
			<div class="slide"></div>
			<div class="slide"></div>
			<div class="slide"></div>
		</div>
			<div class="articleHeadWrap">
				<?php the_field('page_header'); ?>
			</div>
	</header><!-- .entry-header -->

	<div class="entry-content slide">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'dsgreve' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dsgreve' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php dsgreve_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<style>

#hpbground {
	position: absolute;
    top: 90px;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}
</style>
<script>
			 jQuery(document).ready(function($){
					 var slider = $.fn.fsvs({
							 autoPlay            : false,
							 speed               : 1000,
							 bodyID              : 'fsvs-body',
							 selector            : '> .slide',
							 mouseSwipeDisance   : 40,
							 afterSlide          : function(){},
							 beforeSlide         : function(){},
							 endSlide            : function(){},
							 mouseWheelEvents    : true,
							 mouseWheelDelay     : false,
							 mouseDragEvents     : true,
							 touchEvents         : true,
							 arrowKeyEvents      : true,
							 pagination          : true,
							 nthClasses          : 2,
							 detectHash          : true
					 });
			 });
			 </script>
