<?php
namespace App\Hooks;

use Themosis\Hook\Hookable;
use Themosis\Support\Facades\Taxonomy;

class ProductCategories extends Hookable
{
    public function register()
    {
        Taxonomy::make('product-category', 'product', 'Kategorie', 'Kategoria')
        		->setLabels([
				   	'name' => _x('Kategorie', 'taxonomy general name'),
				    'singular_name' => _x('Kategoria', 'taxonomy singular name'),
				    'search_items' =>  __('Szukaj kategorii'),
				    'popular_items' => __('Popularne karegorie'),
				    'all_items' => __('Wszystkie kategorie'),
				    'parent_item' => null,
				    'parent_item_colon' => null,
				    'edit_item' => __('Edytuj kategorię'), 
				    'update_item' => __('Zaktualizuj kategorię'),
				    'add_new_item' => __('Dodaj nową kategorię'),
				    'new_item_name' => __('Nowa kategoria'),
				    'separate_items_with_commas' => __('Oddziel kategorie przecinkami'),
				    'add_or_remove_items' => __('Dodaj lub usuń kategorie'),
				    'choose_from_most_used' => __('Wybierz z najcześciej używanych'),
				    'menu_name' => __('Kategorie'),
        		])
			    ->setArguments([
			        'public' => true,
			        'show_in_nav_menus'  => true,
			        'hierarchical' => true,
			        'show_tagcloud' => false,
			        'show_in_quick_edit' => true,
				    'rewrite'       => ['slug' => 'products'],
				    'query_var'     => 'product_category',
			    ])
    			->set();
    }
}