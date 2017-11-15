<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Request as Flow;
use App\Service;
use App\Http\Controllers\AppController;

class HomeController extends AppController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$services = Service::all()
    		->pluck('name','id')
    		;
    		
        return view('pages.frontend.index')
        	->with('services',$services)
        	;
    }
}
