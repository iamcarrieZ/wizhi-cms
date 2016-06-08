<?php
/**
 * Created by PhpStorm.
 * User: amoslee
 * Date: 16/6/7
 * Time: 00:35
 */


$fields = [
	[
		'type'    => 'text',
		'name'    => '_slider_url',
		'label'   => '链接地址',
		'size'    => '80',
		'default' => 'http://',
	],
];

$args_post = [
	'id'        => 'extra',
	'title'     => '幻灯参数',
	'post_type' => [ 'slider' ],
	'context'   => 'normal',
	'priority'  => 'high',
];


new WizhiPostMetabox( 'slider_data', '幻灯参数', $fields, $args_post );