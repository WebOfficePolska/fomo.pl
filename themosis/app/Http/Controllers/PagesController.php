<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * Show the home page.
     */
    public function index($page)
    {
        $data = get_fields($page->ID);
        //$page->thumb = thumbnail_url($page->ID, 'full');        
        $data['page'] = $page;
        
        if (!$data) {
            $data = [];
        }
        return view('pages.home', $data);
    }

    /**
     * Show the page.
     */
    public function product_old($product)
    {
        //$data = get_fields($page->ID) ? : []; 
	$data['page'] = $product;

	print_r($product);

        return view('pages.product', $data);
    }


    /**
     * Show the page.
     */
    public function page($page)
    {
        $data = get_fields($page->ID) ? : []; 
	$data['page'] = $page;

	//print_r($data);

        return view('pages.page', $data);
    }



    /**
     * Show the 404 page.
     */
    public function error404()
    {
        return view('pages.error404');
    }

}