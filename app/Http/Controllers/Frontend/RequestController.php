<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\AppController;
use App\ServiceRequest;
use Auth;
use App\Brand;
use App\Service;
use App\BasicData;
use App\ComplementaryData;
use App\Recording;
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
		'finalizationSoat'	=> 'required',
		'dataPrivacy'		=> 'required'
	];
	protected $complementaryDataValidationRules=[
		'turn' 				=> 'required',
		'brandId' 			=> 'required',
		'line'				=> 'required',
		'cylinders' 		=> 'required',
		'serviceId' 		=> 'required',
		'bodywork'			=> 'required',
		'bodyworkType'		=> 'required',
		'fuelType'			=> 'required',
		'capacity'			=> 'required',
		'model'				=> 'required|numeric',
		'color'				=> 'required',
		'newColor'			=> 'required',
		'importDeclaration'	=> 'required',
		'engineNumber'		=> 'required',
		'serialNumber'		=> 'required',
		'chassisNumber'		=> 'required',
		'importDate'		=> 'required',
		'plateDate'			=> 'required',
		'observation'		=> 'required',
		'headquarters'		=> 'required',
		'requestedBy'		=> 'required',
		'insured'			=> 'required',
		'intermediary'		=> 'required',
		'mainImage'			=> 'required',
		'secondaryImage'	=> 'required'
		
		
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
    
    //With the service request and the current step will show the view from the next step  
    public function goNextStep ($serviceRequest,$currentStep) {
    	switch ($serviceRequest->service_id) {
    		//Regrabación
    		case 1:
    			switch ($currentStep) {
    				
    				case 0:
    					return redirect()->route('request/basic-data/',$serviceRequest->id);
    					break;
    				
    				case 1:
    					return redirect()->route('request/complementary-data/',$serviceRequest->id);
    					break;
    				
    				case 2:
    					return redirect()->route('request/recording/',$serviceRequest->id);
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
    				
    				case 0:
    					return redirect()->route('request/basic-data/',$serviceRequest->id);
    					break;
    				
    				case 1:
    					return redirect()->route('request/complementary-data/',$serviceRequest->id);
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
    				
    				case 0:
    					return redirect()->route('request/basic-data/',$serviceRequest->id);
    					break;
    				
    				case 1:
    					return redirect()->route('request/complementary-data/',$serviceRequest->id);
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
    					return redirect()->route('/');
    					break;
    			}
    			break;
    		//Avaluó sin RTC
    		case 4:
    			switch ($currentStep) {
    				
    				case 0:
    					return redirect()->route('request/basic-data/',$serviceRequest->id);
    					break;
    				
    				case 1:
    					return redirect()->route('request/complementary-data/',$serviceRequest->id);
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
    					return redirect()->route('/');
    					break;
    			}
    			break;
    		default:
    			return redirect()->route('/');
    			break;
    	}
    	
    	return $page;
    }
    
    
    public function goBasicData ($serviceRequestId) {
    	// Find service request
    	$serviceRequest = ServiceRequest::with('basicData')->find($serviceRequestId);
    	
    	// Find brands
    	$brands = Brand::all()
    		->pluck('name','id')
    		;
    	// Find services
    	$services = Service::all()
    		->pluck('name','id')
    		;
    		
    	// Get all years from 1950 to current year + 1
    	$nextYear = date('Y') + 1;
    	$models = array();
    	for($i = 1950; $i <= $nextYear; $i++) {
    		$models[] = $i;
    	}
    	
    	$userTypes = array();
    	$userTypes = ['INTERNAL'=> 'Interno', 'EXTERNAL'=>'Externo'];
    	
    	// Render view
    	return view('pages.frontend.forms.basic-data')
    		->with('brands',$brands)
    		->with('services',$services)
    		->with('userTypes',$userTypes)
    		->with('models',$models)
    		->with('serviceId',$serviceRequest->service_id)
    		->with('serviceRequestId',$serviceRequest->id)
    		;
    	
    }
    
    public function goComplementaryData($serviceRequestId) {
    	
    	// Find service request
    	$serviceRequest = ServiceRequest::with('complementaryData')->find($serviceRequestId);
    	
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
    
    public function goRecording (Request $request, $serviceRequestId) {
    	// Find service request
    	$serviceRequest = ServiceRequest::with('recording')->find($serviceRequestId);
    	
    	// Find brands
    	$brands = Brand::all()
    		->pluck('name','id')
    		;
    	// Find services
    	$services = Service::all()
    		->pluck('name','id')
    		;
    		
    	// Get all years from 1950 to current year + 1
    	$nextYear = date('Y') + 1;
    	$models = array();
    	for($i = 1950; $i <= $nextYear; $i++) {
    		$models[] = $i;
    	}
    	
    	$userTypes = array();
    	$userTypes = ['INTERNAL'=> 'Interno', 'EXTERNAL'=>'Externo'];
    	
    	// Render view
    	return view('pages.frontend.forms.basic-data')
    		->with('brands',$brands)
    		->with('services',$services)
    		->with('userTypes',$userTypes)
    		->with('models',$models)
    		->with('serviceId',$serviceRequest->service_id)
    		->with('serviceRequestId',$serviceRequest->id)
    		;
    	
    }
    
    public function processBasicData (Request $request) {
    	
    	//Validation
    	$this->validate($request, $this->basicDataValidationRules);
    	
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
    
    public function processComplementaryData(Request $request){
    	
    	// echo('123');die;
    	$this->validate($request, $this->complementaryDataValidationRules);
    	
    	$serviceRequestId = $request->input('serviceRequestId');
    	$turn = $request->input('turn');
    	$brandId = $request->input('brandId');
    	$line = $request->input('line');
    	$cylinders = $request->input('cylinders');
    	$serviceId = $request->input('serviceId');
    	$bodywork = $request->input('bodywork');
    	$bodyworkType = $request->input('bodyworkType');
    	$fuelType = $request->input('fuelType');
    	$capacity = $request->input('capacity');
    	$model = $request->input('model');
    	$color = $request->input('color');
    	$newColor = $request->input('newColor');
    	$importDeclaration = $request->input('importDeclaration');
    	$engineNumber = $request->input('engineNumber');
    	$serialNumber = $request->input('serialNumber');
    	$chassisNumber = $request->input('chassisNumber');
    	$importDate = $request->input('importDate');
    	$plateDate = $request->input('plateDate');
    	$observation = $request->input('observation');
    	$headquarters = $request->input('headquarters');
    	$requestedBy = $request->input('requestedBy');
    	$insured = $request->input('insured');
    	$intermediary = $request->input('intermediary');
    	$mainImage = $request->input('mainImage');
    	$secondaryImage = $request->input('secondaryImage');
    	
    	//Finding if there is already a complementary data related to the service request
    	$complementaryData = ComplementaryData::find($serviceRequest->basic_data_id);
    	
    	if (!$complementaryData) {
	
	    	$complementaryData = new ComplementaryData();
		}
		
    	$complementaryData->turn = $turn;
    	$complementaryData->brand_id = $brandId;
    	$complementaryData->line = $line;
    	$complementaryData->cylinders = $cylinders;
    	$complementaryData->service_id = $serviceId;
    	$complementaryData->bodywork = $bodywork;
    	$complementaryData->bodywork_type = $bodyworkType;
    	$complementaryData->fuel_type = $fuelType;
    	$complementaryData->capacity = $capacity;
    	$complementaryData->model = $model;
    	$complementaryData->color = $color;
    	$complementaryData->new_color = $newColor;
    	$complementaryData->import_declaration = $importDeclaration;
    	$complementaryData->engine_number = $engineNumber;
    	$complementaryData->serial_number = $serialNumber;
    	$complementaryData->chassis_number = $chassisNumber;
    	$complementaryData->import_date = $importDate;
    	$complementaryData->platedate = $plateDate;
    	$complementaryData->observation = $observation;
    	$complementaryData->headquarters = $headquarters;
    	$complementaryData->requested_by = $requestedBy;
    	$complementaryData->insured = $insured;
    	$complementaryData->intermediary = $intermediary;
    	$complementaryData->main_image = $mainImage;
    	$complementaryData->secondary_image = $secondaryImage;
    	
    	$complementaryData->save();
    	
    	$primaryFileName = $complementaryData->id."primary".".".$extension;
    	$destinationPath = 'complementary-data';
    	$primaryPath = $dataPrivacy->move($destinationPath,$primaryFileName);
    	
    	$secondaryFileName = $complementaryData->id."secondary".".".$extension;
    	$destinationPath = 'complementary-data';
    	$path = $dataPrivacy->move($destinationPath,$fileName);
    	
    	$serviceRequest->complementary_data_id = $complementaryData->id;
		$serviceRequest->last_step = 2;
		$serviceRequest->save();
    	
    	return $goNextStep($serviveRequest,2);
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
    			return $this->goBasicData($serviceRequest->id);
    			break;
    		
    		case 2:
    			$serviceRequest->last_step = $serviceRequest::getLastStep($serviceRequest);
    			$serviceRequest->save();
    			return $this->goComplementaryData($serviceRequest->id);
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
