<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProductCategory;
use App\Models\Product;

class StoreController extends Controller
{
    /**
     * Show the store index page.
     */
    public function index($page, $query)
    {

        $data = get_fields($page->ID);
        $data['page'] = $page;
        $data['categories'] = ProductCategory::all(['parent' => 0]);

        return view('store.index', $data);
    }

    /**
     * Show the store category page.
     */
    public function category()
    {
        global $wp_query;        
        
        $category = $wp_query->queried_object;
        $data = get_fields("product-category_{$category->term_id}");
        
        
        $data['category'] = ProductCategory::getCustomFields($category);
        $data['subcategories'] = ProductCategory::all([
            'parent' => $category->term_id
        ]);

        array_walk($data['subcategories'], function(&$cat) {
            $cat->products = Product::getByTaxonomy($cat->slug, 'product-category');
        }); 
                
        return view('store.category', $data);
    }

    /**
     * Show the store product page.
     */
    public function product($product)
    {
        $data = [];
        $data['product'] = Product::getCustomFields($product);
        foreach ($data['product']->terms['product-category'] as $cat) {
            if ($cat->parent === 0) {
                $data['main_category'] = ProductCategory::getCustomFields($cat);
            }
        }
        if (isset($data['main_category'])) {
            $data['other_products'] = Product::getByTaxonomy($data['main_category']->slug, 'product-category', 100, 0, 'medium', [$product->ID]);
            // var_dump($data['other_products']);exit;
        }    
        return view('store.product', $data);
    }
}