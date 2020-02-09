<?php
@session_start();

use App\Component\Cart;

global $post;


$data = [
    'assets_url'  		=> home_url('/content/themes/' . get_template() . '/assets'),
    'home_url' 			=> home_url('/'),
    'today'				=> date('d.m.Y'),
    'site_name'			=> get_bloginfo('name'),
    'site_description'	=> get_bloginfo('description'),
    'pages' 			=> [],
    'cart'              => Cart::get()
];


	
$options = [
    'store_page', 'base_price', 'base_delivery_time', 'default_product_sheet'
];

if( function_exists('get_field') ) {
	foreach ($options as $field) {
		$data[$field] = get_field($field, 'option');
	}
}

View::share($data);