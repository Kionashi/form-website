<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Request as Flow;
use App\Service;
use App\Http\Controllers\AppController;
use App\ServiceRequest;
use Auth;

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
        
    	$serviceRequests = ServiceRequest::where('progress','PENDING')
            ->with('basicData')
            ->with('service')
            ->get()
            ;
        // dump($serviceRequests);die;
        $pendingPlates = array();
        $firstPlate = null;
        foreach($serviceRequests as $serviceRequest) {
            if($serviceRequest->basicData) {
                if(!$firstPlate){
                    $firstPlate = $serviceRequest->basicData->plate;
                }
                $pendingPlates[$serviceRequest->basicData->plate] = $serviceRequest->basicData->plate;
            }
        }
        
        // $firstRequests = ServiceRequest::where('progress','PENDING')
        //     ->where('basicData.plate',$firstPlate)
        //     ->pluck('service.name','service.id')
        //     ;
        // dump($serviceRequests);die;
            
        return view('pages.frontend.index')
        	->with('services',$services)
            ->with('pendingPlates',$pendingPlates)
        	;
    }
    
    public function logout() {
        
        Auth::logout();
        
        return redirect()->route('/'); 
    }
}
