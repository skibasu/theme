<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage theme
 * @since 1.0.0
 */

/* global setting page  */
require_once( get_template_directory() . '/includes/acf-settings-page/acf-settings-page.php' );

/* theme scripts and styles */
require_once( get_template_directory() . '/includes/scripts-styles/scripts-styles.php' );

/* activate menus */
require_once( get_template_directory() . '/includes/activate-support/activate-support.php' );

/* register shordcodes */
require_once( get_template_directory() . '/includes/register-shordcodes/register-shordcodes.php' );

/* get template part width variables */
require_once( get_template_directory() . '/includes/template-part-variable/jpr-get-template-part-with-vars.php' );

/* remove emoji */
require_once( get_template_directory() . '/includes/remove-emoji/remove-emoji.php' );

/* wp remove version 8 */
require_once( get_template_directory() . '/includes/wp-remove-version/wp-remove-version.php' );

/* cf7 settings */
require_once( get_template_directory() . '/includes/cf7-settings/cf7-settings.php' );

/* acf blocks */
require_once( get_template_directory() . '/includes/acf-blocks/acf-blocks.php' );






