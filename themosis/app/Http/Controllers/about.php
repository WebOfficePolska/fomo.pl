<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Themosis\Support\Facades\Page;


class about extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //

	Page::make('demo-page', 'Demo Page')
	->set();

	return View('about');
    }
}
