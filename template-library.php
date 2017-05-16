<?php
/**
 * Template Name: Library
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dsgreve
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
    $url = "http://api.lillycoi.com/v1/trials/search.json?query=cond:%22Multiple+Sclerosis%2C+Relapsing-Remitting%22&fields=id_info.nct_id,condition_browse,sponsors,intervention_browse,overall_status&limit=1000";

    $json = file_get_contents($url);
    $data = json_decode($json, TRUE);
?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
