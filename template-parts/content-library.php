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

<?php
function import_kindleHighlights() {

  $kindleHighlights_data = json_decode( file_get_contents( 'php://input' ) );

  if ( compare_keys() ) {
    insert_or_update( $kindleHighlights_data );
  }

  wp_die();

}
?>
</article><!-- #post-## -->
<footer class="entry-footer">
	<?php dsgreve_entry_footer(); ?>
</footer><!-- .entry-footer -->
