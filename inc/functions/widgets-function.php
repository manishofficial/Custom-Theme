<?php

function jsWidgets() {
	register_sidebar(array(
		'name'			=>	'Sidebar',
		'id'			=>	'sidebar1',
		'before_widget'	=>	'<div class="widget-item">',
		'after_widget'	=>	'</div>',
		'before_title'	=>	'<h4 class="widget-title">',
		'afetr_title'	=>	'</h4>',
	));
}
add_action('widgets_init', 'jsWidgets');