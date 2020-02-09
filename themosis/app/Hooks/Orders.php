<?php
namespace App\Hooks;

use Themosis\Hook\Hookable;
use Themosis\Support\Facades\PostType;

class Orders extends Hookable
{
    public function register()
    {

		PostType::make('order', 'Zamówienia', 'Zamówienie')->setArguments([
			'labels' 		=> [
				'name'               => _x('Zamówienie', 'post type general name'),
				'singular_name'      => _x('Zamówienie', 'post type singular name'),
				'menu_name'          => _x('Zamówienia', 'admin menu'),
				'name_admin_bar'     => _x('Zamówienie', 'add new on admin bar'),
				'add_new'            => _x('Dodaj nowe', 'book'),
				'add_new_item'       => __('Dodaj nowe zamówienie'),
				'new_item'           => __('Nowe zamówienie'),
				'edit_item'          => __('Edytuj zamówienie'),
				'view_item'          => __('Pokaż zamówienie'),
				'all_items'          => __('Wszystkie zamówienia'),
				'search_items'       => __('Szukaj zamówień'),
				'parent_item_colon'  => __('Nadrzędne zamówienie:'),
				'not_found'          => __('Nie znaleziono zamówień.'),
				'not_found_in_trash' => __('Nie znaleziono zamówień w koszu')
			],
		    'menu_icon'   		  => 'dashicons-cart',
		    'public'        	  => true,
		    'menu_position' 	  => 22,
		    'exclude_from_search' => true,
		    'supports'      	  => ['title', 'editor'],
			'rewrite'       	  => ['slug' => 'zamowienie'],
		    'query_var'     	  => false
		])->set();
		
    }
}