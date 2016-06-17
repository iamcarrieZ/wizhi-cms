<?php

$post_types = wizhi_post_types();

$fields = [
	[
		'type'    => 'multi-checkbox',
		'name'    => 'enabled_post_types',
		'label'   => __( 'Enable content types', 'wizhi' ),
		'options' => $post_types,
	],
	[
		'type'    => 'checkbox',
		'name'    => 'is_enable_static',
		'label'   => __( 'Use build in JavaScript And CSS', 'wizhi' ),
	],
	[
		'type'    => 'checkbox',
		'name'    => 'is_enable_font',
		'label'   => __( '是否加载插件自带的 FontAwesome 字体图标', 'wizhi' ),
	],
	[
		'type'    => 'checkbox',
		'name'    => 'is_enable_builder',
		'label'   => __( 'Enable visual content builder（required install and active Shortcake plugin）', 'wizhi' ),
	],
];


$args = [
	'slug'  => 'wizhi-cms-settings',
	'label' => __( 'Plugin settings', 'wizhi' ),
	'title' => __( 'Wizhi CMS Plugin settings', 'wizhi' ),
];

new WizhiOptionPage( $fields, $args );