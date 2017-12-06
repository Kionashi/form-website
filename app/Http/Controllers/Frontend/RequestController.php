<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\AppController;
use App\ServiceRequest;
use Auth;
use File;
use Storage;
use App\User;
use App\Color;
use App\Brand;
use App\Control;
use App\Service;
use App\Novelty;
use App\Cylinder;
use App\FuelType;
use App\Recording;
use App\Fasecolda;
use App\Reference;
use App\BasicData;
use App\Inspection;
use App\VisualValue;
use App\VehicleClass;
use App\VehicleService;
use App\VisualValueField;
use App\ComplementaryData;
use App\FasecoldaYearValue;
use App\VisualValueFieldValue;
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
	
	protected $colorValidationRules=[
		'name' 			=> 'required|unique:colors'
	];
	
	protected $complementaryDataValidationRules=[
		'turn' 				=> 'required',
		'brandId' 			=> 'required',
		'line'				=> 'required',
		'cylinders' 		=> 'required',
		'serviceId' 		=> 'required',
		'bodywork'			=> 'required',
		'bodyworkType'		=> 'required',
		'fuelTypeId'		=> 'required',
		'capacity'			=> 'required',
		'model'				=> 'required|numeric',
		'colorId'			=> 'required',
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
		'intermediary'		=> 'required'
	];

	protected $recordingValidationRules=[
		'reRecordedPart'		=> 'required',
		'plate' 				=> 'required',
		'reviewCity'			=> 'required',
		'city'					=> 'required',
		'secretaryExpedition'	=> 'required',
		'notes'					=> 'required',
		'description'			=> 'required',
		'classId'				=> 'required',
		'inspectorId'			=> 'required',
		'bodyworkType'			=> 'required',
		'brandId' 				=> 'required',
		'model'					=> 'required|numeric',
		'engineNumber'			=> 'required',
		'serialNumber'			=> 'required',
		'chassisNumber'			=> 'required',
		'colorId'				=> 'required',
		'line'					=> 'required'
	];
	
	protected $controlValidationRules=[
		'plate' 			=> 'required',
		'radicationNumber'	=> 'required',
		'formNumber'		=> 'required',
		'brandId' 			=> 'required',
		'classId'			=> 'required',
		'colorId'			=> 'required',
		'serialFile'		=> 'required',
		'engineFile'		=> 'required',
		'chassisFile'		=> 'required',
		'line1'				=> 'required',
		'line2' 			=> 'required',
		'line3' 			=> 'required',
		'model'				=> 'required|numeric',
		'engineNumber'		=> 'required',
		'serialNumber'		=> 'required',
		'chassisNumber'		=> 'required',
		'frontCard'			=> 'required',
		'backCard'			=> 'required',
		'securityNumber'	=> 'required',
		'reviewData'		=> 'required',
		'reason'			=> 'required',
		'inspectorId'		=> 'required',
		'status'			=> 'required'
	];

    public function start (Request $request) {
    	$serviceRequestId = $request->input('serviceId');
    	$user = Auth::user();
    	$serviceRequest = ServiceRequest::getRequest($user->id,$serviceRequestId);
    	if (!$serviceRequest) {
	
	    	$serviceRequest = new ServiceRequest();
	    	$serviceRequest->user_id = $user->id;
	    	$serviceRequest->service_id = $serviceRequestId;
	    	$serviceRequest->last_step = 0;
	    	$serviceRequest->progress = 'PENDING';
	    	
	    	$serviceRequest->save();
		}
    	
    	return $this->goNextStep($serviceRequest, $serviceRequest->last_step);
    	
    }
    
    //With the service request and the current step will show the view from the next step  
    public function goNextStep ($serviceRequest) {
    	
    	$currentStep = $serviceRequest->last_step;
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
    					return redirect()->route('request/control/',$serviceRequest->id);
    					break;
    				
    				case 6:
    					return redirect()->route('request/print/',$serviceRequest->id);
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
    					return redirect()->route('request/inspection/',$serviceRequest->id);
    					break;
    				
    				case 4:
    					return redirect()->route('request/rtc/',$serviceRequest->id);
    					break;
    				
    				case 5:
    					return redirect()->route('request/control/',$serviceRequest->id);
    					break;
    					
    				case 6:
    					return redirect()->route('request/print/',$serviceRequest->id);
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
    					return redirect()->route('request/rtc/',$serviceRequest->id);
    					break;
    				
    				case 5:
    					return redirect()->route('request/control/',$serviceRequest->id);
    					break;
    				
    				case 6:
    					return redirect()->route('request/print/',$serviceRequest->id);
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
    					return redirect()->route('request/inspection/',$serviceRequest->id);
    					break;
    				
    				case 4:
    					return redirect()->route('request/control/',$serviceRequest->id);
    					break;
    				
    				case 6:
    					return redirect()->route('request/print/',$serviceRequest->id);
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
    	
    	$basicData = $serviceRequest->basicData;
    	
    	if(! $basicData) {
    		$basicData = new BasicData();
    		$this->basicDataValidationRules['dataPrivacy'] = 'required';
    	}
    	
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
    		$models[$i] = $i;
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
    		->with('basicData',$basicData)
    		;
    	
    }
    
    public function goComplementaryData($serviceRequestId) {
    	
    	// Find service request
    	$serviceRequest = ServiceRequest::with('complementaryData')->find($serviceRequestId);
    	$basicData = BasicData::find($serviceRequest->basic_data_id);
    	$complementaryData = $serviceRequest->complementaryData;
    	if(! $complementaryData) {
    		$complementaryData = new ComplementaryData();
    		$this->complementaryDataValidationRules['primaryImage'] = 'required';
    		$this->complementaryDataValidationRules['secondaryImage'] = 'required';
    	}
    	
    	$brands = Brand::all()
    		->pluck('name','id')
    		;
    	$services = VehicleService::all()
    		->pluck('name','id')
    		;
    	$colors = Color::all()
    		->pluck('name','id')
    		;
    		
    	/////////////////////////////////////////////////////
    		$brandId = $basicData->brand_id;
    	$fasecoldaYearValues = FasecoldaYearValue::with('fasecolda')
    		->whereHas('fasecolda',function($query) use ($brandId){
    			$query->where('brand_id',$brandId)
					;
    		})
    		->orderBy('year','desc')
    		->get()
    		;
    	$models = array();
    	
    	foreach($fasecoldaYearValues as $fasecoldaYearValue){
    		$models[$fasecoldaYearValue->year] = $fasecoldaYearValue->year;
    	};
    	
    	$models = array_unique($models);
    	$uniqueModels = array();
    	foreach($models as $uniqueModel){
    		$uniqueModels[$uniqueModel] = $uniqueModel;
    	}
    	// dump($uniqueModels);
    	/////////////////////////////////////////////////////
    	$classes =VehicleClass::all()
    		->pluck('name','id')
    		; 
    	
    	// $cylinders = Cylinder::all()
    	// 	->pluck('name','id')
    	// 	;
    		
    	$fasecoldaYearValues = FasecoldaYearValue::where('year',$basicData->model)
    		->with('fasecolda')
    		->whereHas('fasecolda',function($query) use ($basicData){
    			$query->where('brand_id',$basicData->brand_id)
					;
    		})
    		->get()
    		;
    	$cylinders = array();
    	foreach($fasecoldaYearValues as $fasecoldaYearValue){
    		$cylinder = Cylinder::find($fasecoldaYearValue->fasecolda->cylinder_id);
    		$cylinders[$cylinder->id] = $cylinder->name;
    	};
    	
    	$fuelTypes = FuelType::all()
    		->pluck('name','id')
    		;
    		
    	return view('pages.frontend.forms.complementary-data')
    		->with('brands',$brands)
    		->with('services',$services)
    		->with('classes',$classes)
    		->with('fuelTypes',$fuelTypes)
    		->with('colors',$colors)
    		->with('models',$uniqueModels)
    		->with('serviceId',$serviceRequest->service_id)
    		->with('serviceRequestId',$serviceRequest->id)
    		->with('basicData',$basicData)
    		->with('complementaryData',$complementaryData)
    		->with('cylinders',$cylinders)
    		;
    }
    
    public function goRecording ($serviceRequestId) {
    	// Find service request
    	$serviceRequest = ServiceRequest::with('recording')
    		->with('complementaryData')
    		->with('basicData')
    		->with('recording')
    		->find($serviceRequestId)
    		;
    	$complementaryData = $serviceRequest->complementaryData;
    	$basicData = $serviceRequest->basicData;
    	$recording = $serviceRequest->recording;
    	
    	if(! $recording) {
    		$recording = new Recording();
    	}
    	
    	$brands = Brand::all()
    		->pluck('name','id')
    		;
    	$colors = Color::all()
    		->pluck('name','id')
    		;
    	$nextYear = date('Y') + 1;
    	$models = array();
    	for($i = 1950; $i <= $nextYear; $i++) {
    		$models[$i] = $i;
    	}
    	$inspectors = User::all()
    		->pluck('name','id')
    		;
    	
    	$vehicleClasses =VehicleClass::all()
    		->pluck('name','id')
    		; 
    	
    	// $cylinders = Cylinder::all()
    	// 	->pluck('name','id')
    	// 	;
    		
    	$fuelTypes = FuelType::all()
    		->pluck('name','id')
    		;
    		
    	return view('pages.frontend.forms.recording')
    		->with('brands',$brands)
    		->with('vehicleClasses',$vehicleClasses)
    		->with('colors',$colors)
    		->with('models',$models)
    		->with('inspectors',$inspectors)
    		->with('serviceId',$serviceRequest->service_id)
    		->with('serviceRequestId',$serviceRequest->id)
    		->with('complementaryData',$complementaryData)
    		->with('recording',$recording)
    		->with('basicData',$basicData)
    		;
    }
    
    public function goControl($serviceRequestId){
    	
    	// Find service request
    	$serviceRequest = ServiceRequest::with('recording')
    		->with('complementaryData')
    		->with('basicData')
    		->with('control')
    		->find($serviceRequestId)
    		;
    		
    	$complementaryData = $serviceRequest->complementaryData;
    	$basicData = $serviceRequest->basicData;
    	$control = $serviceRequest->control;
    	
    	if(! $control) {
    		$control = new Control();
    	}
    	
    	$nextYear = date('Y') + 1;
    	$models = array();
    	for($i = 1950; $i <= $nextYear; $i++) {
    		$models[$i] = $i;
    	}
    	
    	$brands = Brand::all()
    		->pluck('name','id')
    		;
    	$colors = Color::all()
    		->pluck('name','id')
    		;
    
    	$inspectors = User::all()
    		->pluck('name','id')
    		;
    	
    	$vehicleClasses =VehicleClass::all()
    		->pluck('name','id')
    		; 
    	
    	// $cylinders = Cylinder::all()
    	// 	->pluck('name','id')
    	// 	;
    		
    	$fuelTypes = FuelType::all()
    		->pluck('name','id')
    		;
    		
    	return view('pages.frontend.forms.control')
    		->with('brands',$brands)
    		->with('vehicleClasses',$vehicleClasses)
    		->with('colors',$colors)
    		->with('models',$models)
    		->with('inspectors',$inspectors)
    		->with('serviceId',$serviceRequest->service_id)
    		->with('serviceRequestId',$serviceRequest->id)
    		->with('complementaryData',$complementaryData)
    		->with('control',$control)
    		->with('basicData',$basicData)
    		;
    }
    
    public function goPrint($serviceRequestId){
    	
    	// Find service request
    	$serviceRequest = ServiceRequest::with('recording')
    		->with('complementaryData')
    		->with('basicData')
    		->with('recording')
    		->with('control')
    		->find($serviceRequestId)
    		;
    	$serviceRequest->progress = 'COMPLETED';
    	$serviceRequest->save();
    		
    	return view('pages.frontend.reports.service-request')
    		->with('serviceRequest',$serviceRequest)
    		;
    	
    }

	public function goInspection($serviceRequestId){
    	
    	// Find service request
    	$serviceRequest = ServiceRequest::with('basicData')
    		->with('complementaryData')
    		->with('inspection')
    		->find($serviceRequestId)
    		;
    	$basicData = $serviceRequest->basicData;
    	$complementaryData = $serviceRequest->complementaryData;
    	$inspection = $serviceRequest->inspection;
    	if(! $inspection) {
    		$inspection = new Inspection();
    	}
    	$fasecoldaYearValues = FasecoldaYearValue::where('year',$basicData->model)
    		->with('fasecolda')
    		->whereHas('fasecolda',function($query) use ($basicData,$complementaryData){
    			$query->where('brand_id',$basicData->brand_id)
		    		->where('fuel_type_id',$complementaryData->fuel_type_id)
		    		->where('vehicle_service_id',$complementaryData->vehicle_service_id)
					;
    		})
    		->get()
    		;
    	
    	dump($fasecoldaYearValues);die;
    	$visualValues = VisualValue::all()
    		->pluck('name','id')
    		;
    	
    	$visualValueFields = VisualValueField::where('visual_value_id',1)
    		->with('visualValueFieldValues')
    		->get();
    		;
   		// $visualValueFieldValues = $visualValueFields[0]->visualValueFieldValues->pluck('name','id');
    		// dump($visualValueFieldValues);
    	
    	$novelties = Novelty::all();
    	// dump($visualValueFieldValues);die;
    	// dump($visualValueFields);	
    	return view('pages.frontend.forms.inspection')
    		->with('serviceRequest',$serviceRequest)
    		->with('references',$references)
    		->with('inspection',$inspection)
    		->with('visualValues',$visualValues)
    		->with('visualValueFields',$visualValueFields)
    		// ->with('visualValueFieldValues',$visualValueFieldValues)
    		->with('novelties',$novelties)
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
    	
    	$serviceRequest = ServiceRequest::findOrFail($serviceRequestId);
    	
    	//Finding if there is already a basic data related to the service request
    	$basicData = BasicData::find($serviceRequest->basic_data_id);
    	
    	//If basicData == null I create a new instance of BasicData and get the path to the file 
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
    	$basicData->save();
    	
    	if($dataPrivacy) {
    		
			if($basicData->data_privacy) {
				
				if(file_exists($basicData->data_privacy)){
    			
    				unlink($basicData->data_privacy);
    			}
			}
			$extension = $dataPrivacy->getClientOriginalExtension();
	    	$fileName = $basicData->id.".".$extension;
	    	$destinationPath = 'basic-data';
	    	$path = $dataPrivacy->move($destinationPath,$fileName);
    		$basicData->data_privacy = $path;
    		$basicData->save();
    	}
	    	
    	
		
		$serviceRequest->basic_data_id = $basicData->id;
		$serviceRequest->last_step = 1;
		$serviceRequest->save();
    	return $this->goNextStep($serviceRequest);
        
    }
    
    public function processComplementaryData(Request $request){
    	
    	$this->validate($request, $this->complementaryDataValidationRules);
    	
    	$serviceRequestId = $request->input('serviceRequestId');
    	$turn = $request->input('turn');
    	$brandId = $request->input('brandId');
    	$line = $request->input('line');
    	$cylinders = $request->input('cylinders');
    	$serviceId = $request->input('serviceId');
    	$bodywork = $request->input('bodywork');
    	$bodyworkType = $request->input('bodyworkType');
    	$fuelTypeId = $request->input('fuelTypeId');
    	$capacity = $request->input('capacity');
    	$model = $request->input('model');
    	$colorId = $request->input('colorId');
    	// $newColor = $request->input('newColor');
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
    	$primaryImage = $request->primaryImage;
    	$secondaryImage = $request->secondaryImage;
    	    	
    	$serviceRequest = ServiceRequest::with('complementaryData')
    		->with('basicData')
    		->find($serviceRequestId)
    		;
    	
    	$complementaryData = $serviceRequest->complementaryData;
    	$basicData = $serviceRequest->basicData;
    	
    	if (!$complementaryData) {
	
	    	$complementaryData = new ComplementaryData();
		}
		
    	$complementaryData->turn = $turn;
    	$complementaryData->line = $line;
    	$complementaryData->cylinders = $cylinders;
    	$complementaryData->service_id = $serviceId;
    	$complementaryData->bodywork = $bodywork;
    	$complementaryData->bodywork_type = $bodyworkType;
    	$complementaryData->fuel_type_id = $fuelTypeId;
    	$complementaryData->capacity = $capacity;
    	$complementaryData->color_id = $colorId;
    	$complementaryData->import_declaration = $importDeclaration;
    	$complementaryData->engine_number = $engineNumber;
    	$complementaryData->serial_number = $serialNumber;
    	$complementaryData->chassis_number = $chassisNumber;
    	$complementaryData->import_date = $importDate;
    	$complementaryData->plate_date = $plateDate;
    	$complementaryData->observation = $observation;
    	$complementaryData->headquarters = $headquarters;
    	$complementaryData->requested_by = $requestedBy;
    	$complementaryData->insured = $insured;
    	$complementaryData->intermediary = $intermediary;
    	
    	$complementaryData->save();
    	
    	$basicData->brand_id = $brandId;
    	$basicData->model = $model;
    	$basicData->save();
    	if($primaryImage) {
    		$primaryExtension = $primaryImage->getClientOriginalExtension();
			if($complementaryData->primary_image) {
				
				if(file_exists($complementaryData->primary_image)){
    			
    				unlink($complementaryData->primary_image);
    			}
			}
			$primaryFileName = $complementaryData->id."primary".".".$primaryExtension;
			$destinationPath = 'complementary-data';
			$primaryPath = $primaryImage->move($destinationPath,$primaryFileName);
    		$complementaryData->main_image = $primaryPath;
    		$complementaryData->save();
    	}
    	
    	if($secondaryImage) {
    		
    		$secondaryExtension = $secondaryImage->getClientOriginalExtension();
			if($complementaryData->secondary_image) {
				
				if(file_exists($complementaryData->secondary_image)){
    			
    				unlink($complementaryData->secondary_image);
    			}
			}
			$secondaryFileName = $complementaryData->id."secondary".".".$secondaryExtension;
	    	$destinationPath = 'complementary-data';
	    	$secondaryPath = $secondaryImage->move($destinationPath,$secondaryFileName);
    		$complementaryData->secondary_image = $secondaryPath;
    		$complementaryData->save();
    	}
    	
    	$serviceRequest->complementary_data_id = $complementaryData->id;
		$serviceRequest->last_step = 2;
		$serviceRequest->save();
    	
    	return $this->goNextStep($serviceRequest);
    }
    
    public function processRecording(Request $request) {
    	
    	$this->validate($request, $this->recordingValidationRules);
    	
    	$serviceRequestId = $request->input('serviceRequestId');
    	$plate = $request->input('plate');
    	$brandId = $request->input('brandId');
    	$model = $request->input('model');
    	$line = $request->input('line');
    	$reRecordedPart = $request->input('reRecordedPart');
    	$classId = $request->input('classId');
    	$bodyworkType = $request->input('bodyworkType');
    	$engineNumber = $request->input('engineNumber');
    	$serialNumber = $request->input('serialNumber');
    	$chassisNumber = $request->input('chassisNumber');
    	$colorId = $request->input('colorId');
    	$reviewCity = $request->input('reviewCity');
    	$city = $request->input('city');
    	$secretaryExpedition = $request->input('secretaryExpedition');
    	// $newColor = $request->input('newColor');
    	$description = $request->input('description');
    	$notes = $request->input('notes');
    	$inspectorId = $request->input('inspectorId');
    	    	
    	$serviceRequest = ServiceRequest::with('complementaryData')
    		->with('basicData')
    		->with('recording')
    		->find($serviceRequestId)
    		;
    	
    	$basicData = $serviceRequest->basicData;
    	$complementaryData = $serviceRequest->complementaryData;
    	$recording = $serviceRequest->recording;
    	
    	if (!$recording) {
	
	    	$recording = new Recording();
		}
		
    	$basicData->brand_id = $brandId;
    	$basicData->model = $model;
    	$basicData->plate = $plate;
    	$basicData->save();
    	
    	$complementaryData->line = $line;
    	$complementaryData->bodywork_type = $bodyworkType;
    	$complementaryData->color_id = $colorId;
    	$complementaryData->engine_number = $engineNumber;
    	$complementaryData->serial_number = $serialNumber;
    	$complementaryData->chassis_number = $chassisNumber;
    	$complementaryData->save();
		
    	$recording->re_recorded_part = $reRecordedPart;
    	$recording->review_city = $reviewCity;
    	$recording->city = $city;
    	$recording->secretary_expedition = $secretaryExpedition;
    	$recording->description = $description;
    	$recording->notes = $notes;
    	$recording->class_id = $classId;
    	$recording->inspector_id = $inspectorId;
    	$recording->save();
    	
    	
    	$serviceRequest->recording_id = $recording->id;
		$serviceRequest->last_step = 3;
		$serviceRequest->save();
		
    	return $this->goNextStep($serviceRequest);
    	
    }
    
    public function processControl(Request $request) {
    	
    	$this->validate($request, $this->controlValidationRules);
    	
    	$serviceRequestId = $request->input('serviceRequestId');
    	$plate = $request->input('plate');
    	$brandId = $request->input('brandId');
    	$model = $request->input('model');
    	$radicationNumber = $request->input('radicationNumber');
    	$formNumber = $request->input('formNumber');
    	$classId = $request->input('classId');
    	$colorId = $request->input('colorId');
    	$engineNumber = $request->input('engineNumber');
    	$serialNumber = $request->input('serialNumber');
    	$chassisNumber = $request->input('chassisNumber');
    	$engineFile = $request->engineFile;
    	$serialFile = $request->serialFile;
    	$chassisFile = $request->chassisFile;
    	$securityNumber = $request->securityNumber;
    	$frontCard = $request->frontCard;
    	$backCard = $request->backCard;
    	$reviewData = $request->input('reviewData');
    	$reason = $request->input('reason');
    	$inspectorId = $request->input('inspectorId');
    	$line1 = $request->input('line1');
    	$line2 = $request->input('line2');
    	$line3 = $request->input('line3');
    	$status = $request->input('status');
    	$rejectReason = $request->input('rejectReason');
    	
    	$serviceRequest = ServiceRequest::with('complementaryData')
    		->with('basicData')
    		->with('control')
    		->find($serviceRequestId)
    		;
    	
    	$basicData = $serviceRequest->basicData;
    	$complementaryData = $serviceRequest->complementaryData;
    	$control = $serviceRequest->control;
    	
    	if (!$control) {
	
	    	$control = new Control();
		}
		
		$control->radication_number = $radicationNumber;
		$control->form_number = $formNumber;
		$control->line1 = $line1;
		$control->line2 = $line2;
		$control->line3 = $line3;
		$control->review_data = $reviewData;
		$control->status = $status;
		$control->reject_reason = $rejectReason;
		$control->reason = $reason;
		$control->save();
		
    	$basicData->brand_id = $brandId;
    	$basicData->model = $model;
    	$basicData->plate = $plate;
    	$basicData->save();
    	
    	$complementaryData->color_id = $colorId;
    	$complementaryData->engine_number = $engineNumber;
    	$complementaryData->serial_number = $serialNumber;
    	$complementaryData->chassis_number = $chassisNumber;
    	$complementaryData->save();
    	
    	if($serialFile) {
    		$serialExtension = $serialFile->getClientOriginalExtension();
			if($control->serial_file) {
				
				if(file_exists($control->serial_file)){
    			
    				unlink($control->serial_file);
    			}
			}
			$serialFileName = $control->id."-serial".".".$serialExtension;
			$destinationPath = 'control';
			$serialPath = $serialFile->move($destinationPath,$serialFileName);
    		$control->serial_file = $serialPath;
    		$control->save();
    	}
    	if($engineFile) {
    		$engineExtension = $engineFile->getClientOriginalExtension();
			if($control->engine_file) {
				
				if(file_exists($control->engine_file)){
    			
    				unlink($control->engine_file);
    			}
			}
			$engineFileName = $control->id."-engine".".".$engineExtension;
			$destinationPath = 'control';
			$enginePath = $engineFile->move($destinationPath,$engineFileName);
    		$control->engine_file = $enginePath;
    		$control->save();
    	}
    	if($chassisFile) {
    		$chassisExtension = $chassisFile->getClientOriginalExtension();
			if($control->chassis_file) {
				
				if(file_exists($control->chassis_file)){
    			
    				unlink($control->chassis_file);
    			}
			}
			$chassisFileName = $control->id."-chassis".".".$chassisExtension;
			$destinationPath = 'control';
			$chassisPath = $chassisFile->move($destinationPath,$chassisFileName);
    		$control->chassis_file = $chassisPath;
    		$control->save();
		}
		if($securityNumber) {
    		$securityExtension = $securityNumber->getClientOriginalExtension();
			if($control->security_number) {
				
				if(file_exists($control->security_number)){
    			
    				unlink($control->security_number);
    			}
			}
			$securityFileName = $control->id."-security-number".".".$securityExtension;
			$destinationPath = 'control';
			$securityPath = $securityNumber->move($destinationPath,$securityFileName);
    		$control->security_number = $securityPath;
    		$control->save();
    	}
    	if($frontCard) {
    		$frontCardExtension = $frontCard->getClientOriginalExtension();
			if($control->front_card) {
				
				if(file_exists($control->front_card)){
    			
    				unlink($control->front_card);
    			}
			}
			$frontCardFileName = $control->id."-front-card".".".$frontCardExtension;
			$destinationPath = 'control';
			$frontCardPath = $frontCard->move($destinationPath,$frontCardFileName);
    		$control->front_card = $frontCardPath;
    		$control->save();
    	}
    	if($backCard) {
    		$backCardExtension = $backCard->getClientOriginalExtension();
			if($control->back_card) {
				
				if(file_exists($control->back_card)){
    			
    				unlink($control->back_card);
    			}
			}
			$backCardFileName = $control->id."-back-card".".".$backCardExtension;
			$destinationPath = 'control';
			$backCardPath = $backCard->move($destinationPath,$backCardFileName);
    		$control->back_card = $backCardPath;
    		$control->save();
    	}
    	$serviceRequest->control_id = $control->id;
		$serviceRequest->last_step = 6;
		$serviceRequest->save();
		
    	return $this->goNextStep($serviceRequest);
    } 
    
    public function return ($serviceRequestId) {
    	
    	$serviceRequest = ServiceRequest::find($serviceRequestId);
    	
    	$lastStep = $serviceRequest::getLastStep($serviceRequest);
    	
    	// dump($lastStep);die;
    	$serviceRequest->last_step = $lastStep;
    	$serviceRequest->save();
    	
    	
    	return $this->goNextStep($serviceRequest);
    	
    }
    
    public function addColor(Request $request) {
    	
    	$this->validate($request, $this->colorValidationRules);
    	
    	$name = $request->input('name');
    	$serviceRequestId = $request->input('serviceRequestId');
    	
    	$color = new Color();
    	$color->name = $name;
    	$color->save();
    	
    	return redirect()->route('request/complementary-data/',$serviceRequestId);
    }
    
    public function getVisualValueFields($id) {
    	
    	$visualValueFields = VisualValueField::where('visual_value_id',$id)
    		->with('visualValueFieldValues')
    		->get();
    		
    	return $visualValueFields;
    }
    
    public function getCylinders($model, $brandId){
    	// echo('model =>');
    	// dump($model);
    	// echo('brandId =>');
    	// dump($brandId);
    	$fasecoldaYearValues = FasecoldaYearValue::where('year',$model)
    		->with('fasecolda')
    		->with('fasecolda.cylinder')
    		->whereHas('fasecolda',function($query) use ($brandId){
    			$query->where('brand_id',$brandId)
					;
    		})
    		->get()
    		;
    	$cylinders = array();
    	foreach($fasecoldaYearValues as $fasecoldaYearValue){
    		// $cylinder = Cylinder::find($fasecoldaYearValue->fasecolda->cylinder_id);
    		$cylinders[] = "<option value="."\"".$fasecoldaYearValue->fasecolda->cylinder->id."\"".">".$fasecoldaYearValue->fasecolda->cylinder->name."</option>";
    	};
    	// dump($cylinders);die;
    	
    	$cylinders = array_unique($cylinders);
    	$uniqueCylinders = array();
    	foreach($cylinders as $uniqueCylinder){
    		$uniqueCylinders[] = $uniqueCylinder;
    	}
    	// echo 1234;
    	// dump($uniqueCylinders);die;
    	
    	return $uniqueCylinders;
    }
    
    public function getModels($brandId) {
    	
    	$fasecoldaYearValues = FasecoldaYearValue::with('fasecolda')
    		->whereHas('fasecolda',function($query) use ($brandId){
    			$query->where('brand_id',$brandId)
					;
    		})
    		->orderBy('year','desc')
    		->get()
    		;
    	$models = array();
    	
    	foreach($fasecoldaYearValues as $fasecoldaYearValue){
    		$models[] = "<option value="."\"".$fasecoldaYearValue->year."\"".">".$fasecoldaYearValue->year."</option>";
    	};
    	
    	$models = array_unique($models);
    	$uniqueModels = array();
    	foreach($models as $uniqueModel){
    		$uniqueModels[] = $uniqueModel;
    	}
    	// dump($uniqueModels);
    	return $uniqueModels;
    }
    
    public function getFuelTypes($brandId, $model) {
    	
    	$fasecoldaYearValues = FasecoldaYearValue::where('year',$model)
    		->with('fasecolda')
    		->with('fasecolda.fuelType')
    		->whereHas('fasecolda',function($query) use ($brandId){
    			$query->where('brand_id',$brandId)
					;
    		})
    		->get()
    		;
    	$fuelTypes = array();
    	foreach($fasecoldaYearValues as $fasecoldaYearValue){
    		// $cylinder = Cylinder::find($fasecoldaYearValue->fasecolda->cylinder_id);
    		$fuelTypes[] = "<option value="."\"".$fasecoldaYearValue->fasecolda->fuelType->id."\"".">".$fasecoldaYearValue->fasecolda->fuelType->name."</option>";
    	};
    	// dump($cylinders);die;
    	
    	$fuelTypes = array_unique($fuelTypes);
    	$uniqueFuelTypes = array();
    	foreach($fuelTypes as $uniqueFuelType){
    		$uniqueFuelTypes[] = $uniqueFuelType;
    	}
    	// echo 1234;
    	// dump($uniqueCylinders);die;
    	
    	return $uniqueFuelTypes;
    }
    
    public function getVehicleServices($brandId, $model) {
    	
    	$fasecoldaYearValues = FasecoldaYearValue::where('year',$model)
    		->with('fasecolda')
    		->with('fasecolda.fuelType')
    		->whereHas('fasecolda',function($query) use ($brandId){
    			$query->where('brand_id',$brandId)
					;
    		})
    		->get()
    		;
    	$fuelTypes = array();
    	foreach($fasecoldaYearValues as $fasecoldaYearValue){
    		// $cylinder = Cylinder::find($fasecoldaYearValue->fasecolda->cylinder_id);
    		$fuelTypes[] = "<option value="."\"".$fasecoldaYearValue->fasecolda->fuelType->id."\"".">".$fasecoldaYearValue->fasecolda->fuelType->name."</option>";
    	};
    	// dump($cylinders);die;
    	
    	$fuelTypes = array_unique($fuelTypes);
    	$uniqueFuelTypes = array();
    	foreach($fuelTypes as $uniqueFuelType){
    		$uniqueFuelTypes[] = $uniqueFuelType;
    	}
    	// echo 1234;
    	// dump($uniqueCylinders);die;
    	
    	return $uniqueFuelTypes;
    }
    
}
