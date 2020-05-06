<?php
function tn_block_categories($categories)
{
	$category_slugs = wp_list_pluck($categories, 'slug');
	return in_array('tn', $category_slugs, true) ? $categories : array_merge(
		$categories,
		array(
			array(
				'slug'  => 'tn',
				'title' => __('Theme Name Blocks', 'tn'),
				'icon'  => null,
			),
		)
	);
}
add_filter('block_categories', 'tn_block_categories');




if (function_exists('acf_register_block_type')) {
	add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types(){

	
	acf_register_block_type(array(
		'name'				=> 'hero_slider',
		'title'				=> __('Theme Name Products Slider'),
		'description'		=> __(''),
		'render_template'	=> 'parts/blocks/block-products-slider.php',
		'category'			=> 'tn',
		'icon'				=> 'nametag',
    ));
}