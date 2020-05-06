<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage theme
 * @since 1.0.0
 */

get_header();
the_post();
?>
	<main class="page-content">
    <?php the_content(); ?>
	</main>
<?php
get_footer();
