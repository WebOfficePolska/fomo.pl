<?php
namespace App\Hooks;

use Themosis\Hook\Hookable;
use Themosis\Support\Facades\PostType;

class Products extends Hookable
{
    public function register()
    {
        PostType::make('product', 'Produkty', 'Produkt')
        		->setLabels([
					'name'               => _x('Produkty', 'post type general name'),
					'singular_name'      => _x('Produkt', 'post type singular name'),
					'menu_name'          => _x('Produkty', 'admin menu'),
					'name_admin_bar'     => _x('Produkt', 'add new on admin bar'),
					'add_new'            => _x('Dodaj nowy', 'book'),
					'add_new_item'       => __('Dodaj nowy produkt'),
					'new_item'           => __('Nowy produkt'),
					'edit_item'          => __('Edytuj produkt'),
					'view_item'          => __('Pokaż produkt'),
					'all_items'          => __('Wszystkie produkty'),
					'search_items'       => __('Szukaj produktów'),
					'parent_item_colon'  => __('Nadrzędny produkt:'),
					'not_found'          => __('Nie znaleziono produktów.'),
					'not_found_in_trash' => __('Nie znaleziono produktów w koszu')
        		])
			    ->setArguments([
					'has_archive'		  => true,
				    'menu_icon'   		  => 'dashicons-products',
				    'public'        	  => true,
				    'exclude_from_search' => false,
				    'taxonomies' 		  => [],
				    'supports'      	  => ['title', 'editor', 'page-attributes', 'thumbnail'],
					'rewrite'       	  => ['slug' => 'produkt'],
				    'query_var'     	  => false
			    ])
        		->set();
    }
}