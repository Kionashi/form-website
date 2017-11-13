<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\AppController;
use App\ServiceRequest;
use Auth;
use App\Brand;
use App\Service;
use App\BasicData;
use File;
use Storage;

class RequestController extends AppController
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    // Validation rules
	protected $basicDataValidationRules=[
		'plate' 			=> 'required',
		'firstName'			=> 'required',
		'lastName' 			=> 'required',
		'brandId' 			=> 'required',
		'document' 			=> 'required',
		'expeditionPlace'	=> 'required',
		'phone'				=> 'required',
		'userType'			=> 'required',
		'serviceId'			=> 'required',
		'model'				=> 'required|numeric',
		'finalizationSoat'	=> 'required'
	];

    public function start (Request $request) {
    	
    	$serviceId = $request->input('serviceId');
    	$user = Auth::user();
    	$serviceRequest = ServiceRequest::getRequest($user->id);
    	if (!$serviceRequest) {
	
	    	$serviceRequest = new ServiceRequest();
	    	$serviceRequest->user_id = $user->id;
	    	$serviceRequest->service_id = $serviceId;
	    	$serviceRequest->last_step = 0;
	    	$serviceRequest->status = 'PENDING';
	    	
	    	$serviceRequest->save();
		}
    	
    	return $this->goNextStep($serviceRequest, $serviceRequest->last_step);
    	
    }
    
    //With the service ID and the current step will return the route to the next step  
    public function goNextStep ($serviceRequest,$currentStep) {
    	switch ($serviceRequest->service_id) {
    		//Regrabación
    		case 1:
    			switch ($currentStep) {
    				case -1:
    					return redirect()->route('/');
    					break;
    				case 0:
    					$page = $this->goBasicData($serviceRequest);
    					break;
    				
    				case 1:
    					$page = $this->goComplementaryData($serviceRequest);
    					break;
    				
    				case 2:
    					$page = 'pages.frontend.forms.recording';
    					break;
    				
    				case 3:
    					$page = 'pages.frontend.forms.control';
    					break;
    				
    				case 6:
    					$page = null;
    					break;
    				
    				default:
    					$page = null;
    					break;
    			}
    			break;
    		//Avaluó Comercial
    		case 2:
    			switch ($currentStep) {
    				case -1:
    					return redirect()->route('/');
    					break;
    				case 0:
    					$this->goBasicData($serviceRequest);
    					break;
    				
    				case 1:
    					$page = $this->goComplementaryData($serviceRequest);
    					break;
    				
    				case 2:
    					$page = 'pages.frontend.forms.inspection';
    					break;
    				
    				case 4:
    					$page = 'pages.frontend.forms.rtc';
    					break;
    				
    				case 5:
    					$page = 'pages.frontend.forms.control';
    					
    				case 6:
    					$page = null;
    					break;
    				
    				default:
    					$page = null;
    					break;
    			}
    			break;
    		//RTC
    		case 3:
    			switch ($currentStep) {
    				case -1:
    					return redirect()->route('/');
    					break;
    				case 0:
    					$page = $this->goBasicData($serviceRequest);
    					break;
    				
    				case 1:
    					$page = $this->goComplementaryData($serviceRequest);
    					break;
    				
    				case 2:
    					$page = 'pages.frontend.forms.rtc';
    					break;
    				
    				case 5:
    					$page = 'pages.frontend.forms.control';
    					break;
    				
    				case 6:
    					$page = null;
    					break;
    				
    				default:
    					$page = null;
    					break;
    			}
    			break;
    		//Avaluó sin RTC
    		case 4:
    			switch ($currentStep) {
    				case -1:
    					return redirect()->route('/');
    					break;
    				case 0:
    					$page = $this->goBasicData($serviceRequest);
    					break;
    				
    				case 1:
    					$page = $this->goComplementaryData($serviceRequest);
    					break;
    				
    				case 2:
    					$page = 'pages.frontend.forms.inspection';
    					break;
    				
    				case 4:
    					$page = 'pages.frontend.forms.control';
    					break;
    				
    				case 6:
    					$page = null;
    					break;
    				
    				default:
    					$page = null;
    					break;
    			}
    			break;
    		default:
    			$page = null;
    			break;
    	}
    	
    	return $page;
    }
    
    public function goBasicData ($serviceRequest) {
    	
    	$brands = Brand::all()
    		->pluck('name','id')
    		;
    	$services = Service::all()
    		->pluck('name','id')
    		;
    	$nextYear = date('Y') + 1;
    	$models = array();
    	for($i = 1950; $i <= $nextYear; $i++) {
    		$models[] = $i;
    	}
    	
    	$userTypes = array();
    	$userTypes = ['INTERNAL'=> 'Interno', 'EXTERNAL'=>'Externo'];
    	
    	return view('pages.frontend.forms.basic-data')
    		->with('brands',$brands)
    		->with('services',$services)
    		->with('userTypes',$userTypes)
    		->with('models',$models)
    		->with('serviceId',$serviceRequest->service_id)
    		->with('serviceRequestId',$serviceRequest->id)
    		;
    	
    }
    
    public function goComplementaryData($serviceRequest) {
    	
    	$brands = Brand::all()
    		->pluck('name','id')
    		;
    	$services = Service::all()
    		->pluck('name','id')
    		;
    	$nextYear = date('Y') + 1;
    	$models = array();
    	for($i = 1950; $i <= $nextYear; $i++) {
    		$models[] = $i;
    	}
    	
    	return view('pages.frontend.forms.complementary-data')
    		->with('brands',$brands)
    		->with('services',$services)
    		->with('models',$models)
    		->with('serviceId',$serviceRequest->service_id)
    		->with('serviceRequestId',$serviceRequest->id)
    		;
    }
    
    public function basicData (Request $request) {
    	
    	//Validation
    	// $this->validate($request, $this->basicDataValidationRules);
    	// echo ('exito');die;
    	
    	//Getting the data from the forms
    	$plate = $request->input('plate');
    	$firstName = $request->input('firstName');
    	$lastName = $request->input('lastName');
    	$brandId = $request->input('brandId');
    	$document = $request->input('document');
    	$expeditionPlace = $request->input('expeditionPlace');
    	$phone = $request->input('phone');
    	$userType = $request->input('userType');
    	$serviceId = $request->input('serviceId');
    	$serviceRequestId = $request->input('serviceRequestId');
    	$model = $request->input('model');
    	$finalizationSoat = $request->input('finalizationSoat');
    	$dataPrivacy = $request->dataPrivacy;
    	$extension = $dataPrivacy->getClientOriginalExtension();
    	
    	$serviceRequest = ServiceRequest::findOrFail($serviceRequestId);
    	
    	//Finding if there is already a basic data related to the service request
    	$basicData = BasicData::find($serviceRequest->basic_data_id);
    	
    	if (!$basicData) {
	
	    	$basicData = new BasicData();
		}
		
    	
    	$basicData->plate = $plate;
    	$basicData->first_name = $firstName;
    	$basicData->last_name = $lastName;
    	$basicData->brand_id = $brandId;
    	$basicData->document = $document;
    	$basicData->expedition_place = $expeditionPlace;
    	$basicData->phone = $phone;
    	$basicData->user_type = $userType;
    	$basicData->service_id = $serviceId;
    	$basicData->model = $model;
    	$basicData->finalization_soat = $finalizationSoat;
    	$basicData->data_privacy = 'placeholder';
    	$basicData->save();
    	
    	$fileName = $basicData->id.".".$extension;
    	$destinationPath = 'basic-data';
    	$path = $dataPrivacy->move($destinationPath,$fileName);
    	
    	$basicData->data_privacy = $path;
    	$basicData->save();
		
		$serviceRequest->basic_data_id = $basicData->id;
		$serviceRequest->last_step = 1;
		$serviceRequest->save();
    	
    	return $this->goNextStep($serviceRequest,1);
        
    }
    
    public function return ($serviceRequestId) {
    	
    	$serviceRequest = ServiceRequest::find($serviceRequestId);
    	
    	$lastStep = $serviceRequest->last_step;
    	
    	switch ($lastStep) {
    		case 0:
    			$serviceRequest->last_step = $serviceRequest::getLastStep($serviceRequest);
    			$serviceRequest->save();
    			 return redirect()->route('/');
    			break;
    		
    		case 1:
    			$serviceRequest->last_step = $serviceRequest::getLastStep($serviceRequest);
    			$serviceRequest->save();
    			return $this->goBasicData($serviceRequest);
    			break;
    		
    		case 2:
    			$serviceRequest->last_step = $serviceRequest::getLastStep($serviceRequest);
    			$serviceRequest->save();
    			return $this->goComplementaryData($serviceRequest);
    			break;
    		
    		case 3:
    			$serviceRequest->last_step = $serviceRequest::getLastStep($serviceRequest);
    			$serviceRequest->save();
    			echo ('crear función "go" :V');
    			die;
    			break;
    		
    		case 4:
    			$serviceRequest->last_step = $serviceRequest::getLastStep($serviceRequest);
    			$serviceRequest->save();
    			echo ('crear función "go" :V');
    			die;
    			break;
    		
    		case 5:
    			$serviceRequest->last_step = $serviceRequest::getLastStep($serviceRequest);
    			$serviceRequest->save();
    			echo ('crear función "go" :V');
    			die;
    			break;
    		
    		case 6:
    			$serviceRequest->last_step = $serviceRequest::getLastStep($serviceRequest);
    			$serviceRequest->save();
    			echo ('crear función "go" :V');
    			die;
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    
    }
    
}
