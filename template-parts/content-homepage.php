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


	<div id="fsvs-body">
		<?php
			/** hold for new bground
			<div class="slide" style="background-image: url('<?php the_field('page_header_background'); ?>')">
			**/
			?>
			**/
			<div class="slide">
					<?php the_field('page_header'); ?>
			</div>
			<!-- End Slide One-->
			<div class="slide">
				<h2>Recent Work</h2>
			</div>
			<!-- End Slide Two-->
			<div class="slide">
				<h2>Recent Articles</h2>
			</div>
			<!-- End Slide 3-->
	</div>
</article><!-- #post-## -->
<footer class="entry-footer">
	<?php dsgreve_entry_footer(); ?>
</footer><!-- .entry-footer -->
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
