<?php

function home_link($params, $content = null) {

	extract(shortcode_atts(array(
        'href' => network_home_url(),
	), $params));

  return "<a class='custom-link' href='$href' target='_blank'>$content</a>";
}
add_shortcode('link','home_link');

function current_date() {

  return date('Y');
}
add_shortcode('date','current_date');

function grid_column($params, $content = null) {

	extract(shortcode_atts(array(
		'class' => ''
	), $params));

  return "<div class='col col-lg-6 ".$class."' >".do_shortcode($content)."</div>";
}
add_shortcode('column','grid_column');

function grid_row($params, $content = null) {

	extract(shortcode_atts(array(
		'class' => 'row shortcode-row'
	), $params));

  return "<div class='$class' >".do_shortcode($content)."</div>";
}
add_shortcode('row','grid_row');