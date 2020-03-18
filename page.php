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
        <?php 
        
        get_theme_part('parts/global/content'); 
        
        ?> 

       <?php ContentBlock::display_theme_blocks(); ?>
	</main>
<?php
get_footer();
