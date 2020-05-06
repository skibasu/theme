<?php
/**
 * The template for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
the_post();
?>
	<main class="page-content page-content--single">
	<article>
    <?php the_content();?>
    </article>
	</main>
<?php
get_footer();
