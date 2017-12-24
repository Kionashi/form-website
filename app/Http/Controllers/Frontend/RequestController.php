<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\AppController;
use App\ServiceRequest;
use Auth;
use File;
use Storage;
use PDF;
use App\RTC;
use App\User;
use App\Color;
use App\Brand;
use App\Control;
use App\Service;
use App\Novelty;
use App\Accesory;
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
use App\VisualValueReport;
use App\ComplementaryData;
use App\InspectionNovelty;
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
	protected $controlValidationRules=[
		'status' 		=>'required',
		'rejectReason'	=>'required'
	];
	protected $complementaryDataValidationRules=[
		'turn' 				=> 'required',
		// 'brandId' 			=> 'required',
		'line'				=> 'required',
		'cylinderId' 		=> 'required',
		'serviceId' 		=> 'required',
		'bodywork'			=> 'required',
		'bodyworkType'		=> 'required',
		'fuelTypeId'		=> 'required',
		'capacity'			=> 'required',
		// 'model'				=> 'required|numeric',
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
	
	protected $inspectionValidationRules=[
		'plate' 			=> 'required',
		'referenceId1'		=> 'required',
		'referenceId2'		=> 'required',
		'visualValueId'		=> 'required',
		'discount'			=> 'required',
		'mileage'			=> 'required',
		'approval'			=> 'required',
		'fasecoldaCode'		=> 'required',
		'fasecoldaValue'	=> 'required'
	];
	
	protected $rtcValidationRules=[
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
        
        $colors = Color::all()
            ->pluck('name','id')
            ;
            
        /////////////////////////////////////////////////////
        $brandId = $basicData->brand_id;
        $fasecoldaYearValues = FasecoldaYearValue::with('fasecolda.vehicleService')
            ->whereHas('fasecolda',function($query) use ($brandId){
                $query->where('brand_id',$brandId)
                    ;
            })
            ->orderBy('year','desc')
            ->get()
            ;
        
        $models = array();
    	$services = array();
    	
    	foreach($fasecoldaYearValues as $fasecoldaYearValue){
    		$models[$fasecoldaYearValue->year] = $fasecoldaYearValue->year;
            $services[$fasecoldaYearValue->fasecolda->vehicleService->id] = $fasecoldaYearValue->fasecolda->vehicleService->name;
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
    	
    	$fuelTypes = array();
    	foreach($fasecoldaYearValues as $fasecoldaYearValue){
    		$fuelType = FuelType::find($fasecoldaYearValue->fasecolda->fuel_type_id);
    		$fuelTypes[$fuelType->id] = $fuelType->name;
    	};
    	
    	// $fuelTypes = FuelType::all()
    	// 	->pluck('name','id')
    	// 	;
    		
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
    	
    	$fasecoldaYearValues = FasecoldaYearValue::where('year',$basicData->model)
    		->with('fasecolda')
    		->whereHas('fasecolda',function($query) use ($basicData,$complementaryData){
    			$query->where('brand_id',$basicData->brand_id)
    				->where('cylinder_id',$complementaryData->cylinder_id)
    				->where('vehicle_service_id',$complementaryData->service_id)
					->where('fuel_type_id',$complementaryData->fuel_type_id)
					;
    		})
    		->get()
    		;
    	$vehicleClasses = array();
    	foreach($fasecoldaYearValues as $fasecoldaYearValue){
    		$vehicleClass = VehicleClass::find($fasecoldaYearValue->fasecolda->vehicle_class_id);
    		$vehicleClasses[$vehicleClass->id] = $vehicleClass->name;
    	};
    	
    	
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
    	$serviceRequest = ServiceRequest::with('recording.vehicleClass')
    		->with('recording.inspector')
    		->with('complementaryData.color')
    		->with('complementaryData.cylinder')
    		->with('complementaryData.vehicleService')
    		->with('complementaryData.fuelType')
    		->with('basicData.brand')
    		->with('rtc.vehicleClass')
    		->with('inspection.fasecoldaYearValue')
    		->with('inspection.fasecolda.firstReference')
    		->with('inspection.fasecolda.secondReference')
    		->with('inspection.novelties')
    		->with('inspection.accessories')
    		->with('inspection.visualValueFieldValues.visualValueField')
    		->with('control')
    		->find($serviceRequestId)
    		;
    		$visualValues = VisualValue::with('visualValueFields')->get();
    		if ($serviceRequest->inspection){
	    		foreach($visualValues as $visualValue) {
	    			foreach($visualValue->visualValueFields as $i => $visualValueField) {
	    				foreach($serviceRequest->inspection->visualValueFieldValues as $visualValueFieldValue) {
	    					if($visualValueField->id == $visualValueFieldValue->visual_value_field_id) {
	    						$visualValue->visualValueFields[$i]->valueName = $visualValueFieldValue->name;
	    						$visualValue->visualValueFields[$i]->value = $visualValueFieldValue->value;
	    					}
	    				}
	    			}
	    		}
	    	}
    		// dump($visualValues[0]->visualValueFields);die;
    		
    	// dump($serviceRequest->inspection);die;
    	
    	
    		
    	// $complementaryData = $serviceRequest->complementaryData;
    	// $basicData = $serviceRequest->basicData;
    	// $control = $serviceRequest->control;
    	
    	// if(! $control) {
    	// 	$control = new Control();
    	// }
    	
    	// $nextYear = date('Y') + 1;
    	// $models = array();
    	// for($i = 1950; $i <= $nextYear; $i++) {
    	// 	$models[$i] = $i;
    	// }
    	
    	// $brands = Brand::all()
    	// 	->pluck('name','id')
    	// 	;
    	// $colors = Color::all()
    	// 	->pluck('name','id')
    	// 	;
    
    	// $inspectors = User::all()
    	// 	->pluck('name','id')
    	// 	;
    	
    	// $vehicleClasses =VehicleClass::all()
    	// 	->pluck('name','id')
    	// 	; 
    	
    	// $cylinders = Cylinder::all()
    	// 	->pluck('name','id')
    	// 	;
    		
    	// $fuelTypes = FuelType::all()
    	// 	->pluck('name','id')
    	// 	;
    	
    		
    	// return view('pages.frontend.forms.control')
    	// 	->with('brands',$brands)
    	// 	->with('vehicleClasses',$vehicleClasses)
    	// 	->with('colors',$colors)
    	// 	->with('models',$models)
    	// 	->with('inspectors',$inspectors)
    	// 	->with('serviceId',$serviceRequest->service_id)
    	// 	->with('serviceRequestId',$serviceRequest->id)
    	// 	->with('complementaryData',$complementaryData)
    	// 	->with('control',$control)
    	// 	->with('basicData',$basicData)
    	// 	;
    	
    	// echo('control');
    	// die;
    	return view('pages.frontend.forms.control')
    		->with('serviceRequest',$serviceRequest)
    		->with('visualValues',$visualValues)
    		;
    }
    
    public function goPrint($serviceRequestId){
    	
    	// dump('print');die;
    	// Find service request
    	$serviceRequest = ServiceRequest::with('recording.vehicleClass')
    		->with('recording.inspector')
    		->with('complementaryData.color')
            ->with('complementaryData.vehicleService')
    		->with('basicData.brand')
    		->with('rtc.vehicleClass')
    		->with('inspection.accessories')
            ->with('inspection.novelties')
    		->with('control')
    		->find($serviceRequestId)
    		;
            
        // dump($serviceRequest->inspection);die;
        if($serviceRequest->inspection) {
            $visualValues = VisualValue::with('visualValueFields')->get();
                foreach($visualValues as $visualValue) {
                    $total = 0;
                    foreach($visualValue->visualValueFields as $i => $visualValueField) {
                        foreach($serviceRequest->inspection->visualValueFieldValues as $visualValueFieldValue) {
                            if($visualValueField->id == $visualValueFieldValue->visual_value_field_id) {
                                $visualValue->visualValueFields[$i]->valueName = $visualValueFieldValue->name;
                                $visualValue->visualValueFields[$i]->value = $visualValueFieldValue->value;
                                $total = $total + intval($visualValueFieldValue->value);
                            }
                        }
                    }
                    $visualValue->total = $total;
                }
                
            $serviceRequest->inspection->visualValues = $visualValues;
            $totalAccesories = 0;
            foreach($serviceRequest->inspection->accessories as $accesory){
                $accesory->total = intval($accesory->value) * intval($accesory->amount);
                $totalAccesories = $totalAccesories + $accesory->total;
            }
            $serviceRequest->inspection->totalAccesories = $totalAccesories;
        }
    	date_default_timezone_set('America/Bogota');
		$date = date('Y-m-d', time());
        // dump($serviceRequest->recording);die;
        $serviceRequest->now = $date;
        $data =array('serviceRequest' => $serviceRequest);
        $pdf = PDF::loadView('pages.frontend.reports.print', $data);
        // dump($pdf);die;
        return $pdf->download('invoice.pdf');
    	return view('pages.frontend.reports.print')
    		->with('serviceRequest',$data)
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
    	
	    //Initializing the default values of fasecolda code and value 
    	$fasecoldaCode = null;
    	$fasecoldaValue =null;
    	if(! $inspection) {
    		$inspection = new Inspection();
    	}else{
    		
	    	$fasecoldaCode = $inspection->fasecolda->code;
	    	$fasecoldaValue = $inspection->fasecoldaYearValue->value;
    	}
    	$fasecoldaYearValues = FasecoldaYearValue::where('year',$basicData->model)
    		->with('fasecolda')
    		->whereHas('fasecolda',function($query) use ($basicData,$complementaryData){
    			$query->where('brand_id',$basicData->brand_id)
		    		->where('fuel_type_id',$complementaryData->fuel_type_id)
		    		->where('vehicle_service_id',$complementaryData->service_id)
					;
    		})
    		->get()
    		;
    	// dump($complementaryData->fuel_type_id);die;
    	$firstReferenceId = null;
    	$firstReferences = array();
    	foreach($fasecoldaYearValues as $fasecoldaYearValue){
    		// foreach($fasecoldaYearValue->fasecolda as $fasecolda) {
    			// dump($fasecoldaYearValue->fasecolda);die;
    		if(!$firstReferenceId)  {
    			$firstReferenceId = $fasecoldaYearValue->fasecolda->first_reference_id; 
    		}
    		$firstReferences[$fasecoldaYearValue->fasecolda->first_reference_id] =$fasecoldaYearValue->fasecolda->firstReference->name;
    		
    		// }
    	}
    	
    		// dump('referencias');
    		// dump($firstReferenceId);
    		// die;
    	
    	//Searching again now with the first reference to build the second reference array
    	$fasecoldaYearValuesSR = FasecoldaYearValue::where('year',$basicData->model)
    		->with('fasecolda.secondReference')
    		->whereHas('fasecolda',function($query) use ($basicData,$complementaryData,$firstReferenceId){
    			$query->where('brand_id',$basicData->brand_id)
		    		->where('fuel_type_id',$complementaryData->fuel_type_id)
		    		->where('vehicle_service_id',$complementaryData->service_id)
		    		->where('first_reference_id',$firstReferenceId)
					;
    		})
    		->get()
    		;
    	$secondReferenceId = null;
    	$secondReferences = array();
    	foreach($fasecoldaYearValuesSR as $fasecoldaYearValue){
    		
    		if(!$secondReferenceId) {
    			$secondReferenceId = $fasecoldaYearValue->fasecolda->second_reference_id;
    		}
    	// dump($fasecoldaYearValue);die;
    		$secondReferences[$fasecoldaYearValue->fasecolda->second_reference_id] =$fasecoldaYearValue->fasecolda->secondReference->name;
    	}
    	
    	//Get the fasecolda with the default first and second reference to find the code
    	$tentativeFasecolda = Fasecolda::where('first_reference_id',$firstReferenceId)
    		->where('second_reference_id',$secondReferenceId)
    		->where('brand_id',$basicData->brand_id)
    		->where('fuel_type_id',$complementaryData->fuel_type_id)
    		->where('vehicle_service_id',$complementaryData->service_id)
    		->first();
    		;
    	// 	dump('first_reference_id'.$firstReferenceId);
    	// 	dump('second_reference_id'.$secondReferenceId);
    	// 	dump('brand_id'.$basicData->brand_id);
    	// 	dump('fuel_type_id',$complementaryData->fuel_type_id);
    	// 	dump('vehicle_service_id'.$complementaryData->service_id);
    	// dump($tentativeFasecolda);die;
    	if(!$fasecoldaCode)
    	$fasecoldaCode = $tentativeFasecolda->code;
    	
    	//With the fasecolda code and the year I can get the value 
    	$tentativeFasecoldaYearValue = FasecoldaYearValue::where('year',$basicData->model)
    		->with('fasecolda.secondReference')
    		->whereHas('fasecolda',function($query) use ($fasecoldaCode){
    			$query->where('code',$fasecoldaCode)
				;
    		})
    		->first()
    		;
    	$fasecoldaValue = $tentativeFasecoldaYearValue->value;
    	// dump($secondReferences);die;
    	
    	// dump('model =>'.$basicData->model);	
    	// dump('brand ID => '.$basicData->brand_id);
    	// dump('fuel ID =>'.$complementaryData->fuel_type_id);
    	// dump('vehicle service => '.$complementaryData->service_id);
    	$visualValueSelect = VisualValue::all()
    		->pluck('name','id')
    		;
    	
    	$visualValues = VisualValue::with('visualValueFields')
    		->with('visualValueFields.visualValueFieldValues')
    		->get();
    		;
    	// $visualValueArray = array();
    	// foreach ($visualValueFields as $i => $visualValueField) {
    	// 	$visualValueArray[$visualValueField->visual_value_id][]=$visualValueField;
    	// }
    	// dump($visualValues);die;
   		// $visualValueFieldValues = $visualValueFields[0]->visualValueFieldValues->pluck('name','id');
    		// dump($visualValueFieldValues);
    	
    	$novelties = Novelty::all();
    	$selectedNovelties = InspectionNovelty::where('inspection_id',$inspection->id)
    		->get();
    	foreach($novelties as $novelty) {
    		foreach($selectedNovelties as $selectedNovelty) {
    			if(!$novelty->selected) {
    				
	    			if($selectedNovelty->novelty_id == $novelty->id) {
	    				$novelty->selected = true;
	    			}else {
	    				$novelty->selected = false;
	    			}
    			}
    			
    		}
    	}
    	
    	$accessories = Accesory::where('inspection_id',$inspection->id)
    		->get();
    	
    	// dump($visualValueFieldValues);die;
    	// dump($visualValueFields);	
    	return view('pages.frontend.forms.inspection')
    		->with('serviceRequest',$serviceRequest)
    		->with('firstReferences',$firstReferences)
    		->with('secondReferences',$secondReferences)
    		->with('inspection',$inspection)
    		->with('visualValues',$visualValues)
    		->with('fasecoldaCode',$fasecoldaCode)
    		->with('fasecoldaValue',$fasecoldaValue)
    		->with('visualValueSelect',$visualValueSelect)
    		->with('novelties',$novelties)
    		->with('accessories',$accessories)
    		->with('accessoriesCount',$accessories->count()+1)
    		;
    }
    
    public function goRTC($serviceRequestId) {
    	
    	// Find service request
    	$serviceRequest = ServiceRequest::with('basicData')
    		->with('complementaryData')
    		->with('rtc')
    		->find($serviceRequestId)
    		;
    		
    	$complementaryData = $serviceRequest->complementaryData;
    	$basicData = $serviceRequest->basicData;
    	$rtc = $serviceRequest->rtc;
    	
    	if(! $rtc) {
    		$rtc = new RTC();
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
    		
    	return view('pages.frontend.forms.rtc')
    		->with('brands',$brands)
    		->with('vehicleClasses',$vehicleClasses)
    		->with('colors',$colors)
    		->with('models',$models)
    		->with('inspectors',$inspectors)
    		->with('serviceId',$serviceRequest->service_id)
    		->with('serviceRequestId',$serviceRequest->id)
    		->with('complementaryData',$complementaryData)
    		->with('rtc',$rtc)
    		->with('basicData',$basicData)
    		;
    }
    
    public function goCurrentServices (Request $request) {
        
        $plate = $request->plate;
        $serviceId = $request->serviceId;
        // dump($serviceId);
        // dump($plate);
        $serviceRequest = ServiceRequest::where('service_id',$serviceId)
            ->where('progress','PENDING')
            ->whereHas('basicData',function($query) use ($plate){
                $query->where('plate',$plate)
                ;
            })
            ->with('service')
            ->first()
            ;
        // dump($serviceRequest);die;
        
        return view('pages.frontend.current-service')
            ->with('serviceRequest',$serviceRequest)
            ;
        
    }
    
    public function goPlateSearch(Request $request) {
        $plate = $request->plate;
        $serviceId = $request->serviceId;
        $serviceRequests = ServiceRequest::where('service_id',$serviceId)
            ->whereHas('basicData',function($query) use ($plate){
                $query->where('plate',$plate)
                ;
            })
            ->with('service')
            ->get()
            ;
        // dump($serviceRequests);die;
        return view('pages.frontend.plate-search')
            ->with('serviceRequests',$serviceRequests)
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
    	$cylinderId = $request->input('cylinderId');
    	$serviceId = $request->input('serviceId');
    	$bodywork = $request->input('bodywork');
    	$bodyworkType = $request->input('bodyworkType');
    	$fuelTypeId = $request->input('fuelTypeId');
    	$capacity = $request->input('capacity');
    	$model = $request->input('model');
    	$colorId = $request->input('colorId');
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
		if($newColor) {
			
			$color = Color::where('name',$newColor)->first();
			if(!$color) {
				$color = new Color();
				$color->name = $newColor;
				$color->save();
			}
    		$complementaryData->color_id = $color->id;
    		
		}else{
    		$complementaryData->color_id = $colorId;
		}
    	$complementaryData->turn = $turn;
    	$complementaryData->line = $line;
    	$complementaryData->cylinder_id = $cylinderId;
    	$complementaryData->service_id = $serviceId;
    	$complementaryData->bodywork = $bodywork;
    	$complementaryData->bodywork_type = $bodyworkType;
    	$complementaryData->fuel_type_id = $fuelTypeId;
    	$complementaryData->capacity = $capacity;
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
    	
    	// $basicData->brand_id = $brandId;
    	// $basicData->model = $model;
    	// $basicData->save();
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
    	
    	$serviceRequestId = $request->input('serviceRequestId');
    	$status = $request->input('status');
    	$rejectReason = $request->input('rejectReason');
    	// dump($status);
    	// dump($rejectReason);die;
    	// $control = new Control();
    	// $control->status = $status;
    	// $control->reject_reason = $rejectReason;
    	// $control->save();
    	
    	$serviceRequest = ServiceRequest::find($serviceRequestId);
    	// dump($serviceRequest);
    	// dump($control);
    	// die;
    	$serviceRequest->progress = 'COMPLETED';
    	$serviceRequest->reject_reason = $rejectReason;
    	$serviceRequest->status = $status;
    	$serviceRequest->save();
    	// $serviceRequest->control_id = $control->id;
		$serviceRequest->last_step = 6;
		$serviceRequest->save();
		
		if($serviceRequest->status == 'APPROVED') {
			
    		return $this->goNextStep($serviceRequest);
		}else {
			
			return redirect(route('/'));
		}
		
    } 
    
    public function processRTC(Request $request) {
    	
    	$this->validate($request, $this->rtcValidationRules);
    	
    	$serviceRequestId = $request->input('serviceRequestId');
    	// $plate = $request->input('plate');
    	// $brandId = $request->input('brandId');
    	// $model = $request->input('model');
    	$radicationNumber = $request->input('radicationNumber');
    	$formNumber = $request->input('formNumber');
    	$classId = $request->input('classId');
    	// $colorId = $request->input('colorId');
    	// $engineNumber = $request->input('engineNumber');
    	// $serialNumber = $request->input('serialNumber');
    	// $chassisNumber = $request->input('chassisNumber');
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
    	$image1 = $request->image1;
    	$image2 = $request->image2;
    	$image3 = $request->image3;
    	$image4 = $request->image4;
    	$image5 = $request->image5;
    	$image6 = $request->image6;
    	
    	$serviceRequest = ServiceRequest::with('complementaryData')
    		->with('basicData')
    		->with('rtc')
    		->find($serviceRequestId)
    		;
    	
    	$basicData = $serviceRequest->basicData;
    	$complementaryData = $serviceRequest->complementaryData;
    	$rtc = $serviceRequest->rtc;
    	
    	if (!$rtc) {
	
	    	$rtc = new RTC();
		}
		
		$rtc->radication_number = $radicationNumber;
		$rtc->form_number = $formNumber;
		$rtc->line1 = $line1;
		$rtc->line2 = $line2;
		$rtc->line3 = $line3;
		$rtc->review_data = $reviewData;
		$rtc->reason = $reason;
		$rtc->vehicle_class_id = $classId;
		$rtc->inspector_id = $inspectorId;
		$rtc->save();
		
    	// $basicData->brand_id = $brandId;
    	// $basicData->model = $model;
    	// $basicData->plate = $plate;
    	// $basicData->save();
    	
    	// $complementaryData->color_id = $colorId;
    	// $complementaryData->engine_number = $engineNumber;
    	// $complementaryData->serial_number = $serialNumber;
    	// $complementaryData->chassis_number = $chassisNumber;
    	// $complementaryData->save();
    	
    	if($serialFile) {
    		$serialExtension = $serialFile->getClientOriginalExtension();
			if($rtc->serial_file) {
				
				if(file_exists($rtc->serial_file)){
    			
    				unlink($rtc->serial_file);
    			}
			}
			$serialFileName = $rtc->id."-serial".".".$serialExtension;
			$destinationPath = 'rtc';
			$serialPath = $serialFile->move($destinationPath,$serialFileName);
    		$rtc->serial_file = $serialPath;
    		$rtc->save();
    	}
    	if($engineFile) {
    		$engineExtension = $engineFile->getClientOriginalExtension();
			if($rtc->engine_file) {
				
				if(file_exists($rtc->engine_file)){
    			
    				unlink($rtc->engine_file);
    			}
			}
			$engineFileName = $rtc->id."-engine".".".$engineExtension;
			$destinationPath = 'rtc';
			$enginePath = $engineFile->move($destinationPath,$engineFileName);
    		$rtc->engine_file = $enginePath;
    		$rtc->save();
    	}
    	if($chassisFile) {
    		$chassisExtension = $chassisFile->getClientOriginalExtension();
			if($rtc->chassis_file) {
				
				if(file_exists($rtc->chassis_file)){
    			
    				unlink($rtc->chassis_file);
    			}
			}
			$chassisFileName = $rtc->id."-chassis".".".$chassisExtension;
			$destinationPath = 'rtc';
			$chassisPath = $chassisFile->move($destinationPath,$chassisFileName);
    		$rtc->chassis_file = $chassisPath;
    		$rtc->save();
		}
		if($securityNumber) {
    		$securityExtension = $securityNumber->getClientOriginalExtension();
			if($rtc->security_number) {
				
				if(file_exists($rtc->security_number)){
    			
    				unlink($rtc->security_number);
    			}
			}
			$securityFileName = $rtc->id."-security-number".".".$securityExtension;
			$destinationPath = 'rtc';
			$securityPath = $securityNumber->move($destinationPath,$securityFileName);
    		$rtc->security_number = $securityPath;
    		$rtc->save();
    	}
    	if($frontCard) {
    		$frontCardExtension = $frontCard->getClientOriginalExtension();
			if($rtc->front_card) {
				
				if(file_exists($rtc->front_card)){
    			
    				unlink($rtc->front_card);
    			}
			}
			$frontCardFileName = $rtc->id."-front-card".".".$frontCardExtension;
			$destinationPath = 'rtc';
			$frontCardPath = $frontCard->move($destinationPath,$frontCardFileName);
    		$rtc->front_card = $frontCardPath;
    		$rtc->save();
    	}
    	if($backCard) {
    		$backCardExtension = $backCard->getClientOriginalExtension();
			if($rtc->back_card) {
				
				if(file_exists($rtc->back_card)){
    			
    				unlink($rtc->back_card);
    			}
			}
			$backCardFileName = $rtc->id."-back-card".".".$backCardExtension;
			$destinationPath = 'rtc';
			$backCardPath = $backCard->move($destinationPath,$backCardFileName);
    		$rtc->back_card = $backCardPath;
    		$rtc->save();
    	}
    	if($image1) {
    		$frontCardExtension = $image1->getClientOriginalExtension();
			if($rtc->image1) {
				
				if(file_exists($rtc->image1)){
    			
    				unlink($rtc->image1);
    			}
			}
			$frontCardFileName = $rtc->id."-image1".".".$frontCardExtension;
			$destinationPath = 'rtc';
			$frontCardPath = $image1->move($destinationPath,$frontCardFileName);
    		$rtc->image1 = $frontCardPath;
    		$rtc->save();
    	}
    	if($image2) {
    		$frontCardExtension = $image2->getClientOriginalExtension();
			if($rtc->image2) {
				
				if(file_exists($rtc->image2)){
    			
    				unlink($rtc->image2);
    			}
			}
			$frontCardFileName = $rtc->id."-image2".".".$frontCardExtension;
			$destinationPath = 'rtc';
			$frontCardPath = $image2->move($destinationPath,$frontCardFileName);
    		$rtc->image2 = $frontCardPath;
    		$rtc->save();
    	}
    	if($image3) {
    		$frontCardExtension = $image3->getClientOriginalExtension();
			if($rtc->image3) {
				
				if(file_exists($rtc->image3)){
    			
    				unlink($rtc->image3);
    			}
			}
			$frontCardFileName = $rtc->id."-image3".".".$frontCardExtension;
			$destinationPath = 'rtc';
			$frontCardPath = $image3->move($destinationPath,$frontCardFileName);
    		$rtc->image3 = $frontCardPath;
    		$rtc->save();
    	}
    	if($image4) {
    		$frontCardExtension = $image4->getClientOriginalExtension();
			if($rtc->image4) {
				
				if(file_exists($rtc->image4)){
    			
    				unlink($rtc->image4);
    			}
			}
			$frontCardFileName = $rtc->id."-image4".".".$frontCardExtension;
			$destinationPath = 'rtc';
			$frontCardPath = $image4->move($destinationPath,$frontCardFileName);
    		$rtc->image4 = $frontCardPath;
    		$rtc->save();
    	}
    	if($image5) {
    		$frontCardExtension = $image5->getClientOriginalExtension();
			if($rtc->image5) {
				
				if(file_exists($rtc->image5)){
    			
    				unlink($rtc->image5);
    			}
			}
			$frontCardFileName = $rtc->id."-image5".".".$frontCardExtension;
			$destinationPath = 'rtc';
			$frontCardPath = $image5->move($destinationPath,$frontCardFileName);
    		$rtc->image5 = $frontCardPath;
    		$rtc->save();
    	}
    	if($image6) {
    		$frontCardExtension = $image6->getClientOriginalExtension();
			if($rtc->image6) {
				
				if(file_exists($rtc->image6)){
    			
    				unlink($rtc->image6);
    			}
			}
			$frontCardFileName = $rtc->id."-image6".".".$frontCardExtension;
			$destinationPath = 'rtc';
			$frontCardPath = $image6->move($destinationPath,$frontCardFileName);
    		$rtc->image6 = $frontCardPath;
    		$rtc->save();
    	}
    	$serviceRequest->rtc_id = $rtc->id;
		$serviceRequest->last_step = 5;
		$serviceRequest->save();
		
    	return $this->goNextStep($serviceRequest);
    }
    
    public function processInspection(Request $request) {
    	
    	// dump($request->all());die;
    	//Validation
    	$this->validate($request, $this->inspectionValidationRules);
    	
    	$fasecoldaCode = $request->fasecoldaCode;
    	$fasecoldaValue = $request->fasecoldaValue;
    	$plate = $request->plate;
    	$referenceId1 = $request->referenceId1;
    	$referenceId2 = $request->referenceId2;
    	$discount = $request->discount;
    	$mileage = $request->mileage;
    	$approval = $request->approval;
    	$serviceRequestId = $request->serviceRequestId;
    	$accessories = $request->accessories;
    	// dump($request->all());die;
    	$image1 = $request->image1;
    	$image2 = $request->image2;
    	$image3 = $request->image3;
    	$image4 = $request->image4;
    	$image5 = $request->image5;
    	$image6 = $request->image6;
    	
    	$fasecolda = Fasecolda::where('code',$fasecoldaCode)->first();
    	$serviceRequest = ServiceRequest::with('complementaryData')
    		->with('basicData')
    		->with('rtc')
    		->find($serviceRequestId)
    		;
    	
    	$basicData = $serviceRequest->basicData;
    	$complementaryData = $serviceRequest->complementaryData;
    	$inspection = $serviceRequest->inspection;
    	
    	if (!$inspection) {
	
	    	$inspection = new Inspection();
		}
		
		$inspection->discount = $discount;
		$inspection->mileage = $mileage;
		$inspection->approval = $approval;
		$inspection->fasecolda_id = $fasecolda->id;
	    	// dump($inspection->id);die;
		
		//If plate was altered save the new plate
		// if($basicData->plate != $plate) {
		// 	$basicData->plate = $plate;
		// 	$basicData->save();
		// }
		
		$fasecoldaYearValue = FasecoldaYearValue::where('year',$basicData->model)
    		->with('fasecolda')
    		->whereHas('fasecolda',function($query) use ($basicData,$complementaryData,$referenceId1,$referenceId2){
    			$query->where('brand_id',$basicData->brand_id)
		    		->where('fuel_type_id',$complementaryData->fuel_type_id)
		    		->where('vehicle_service_id',$complementaryData->service_id)
		    		->where('first_reference_id',$referenceId1)
		    		->where('second_reference_id',$referenceId2)
					;
    		})
    		->first()
    		;
    	$inspection->fasecolda_year_value_id = $fasecoldaYearValue->id;
    	
    	//saving to get the inspection ID
	    $inspection->save();
    	
    	$visualValues = VisualValue::all();
    	$visualValueFields = VisualValueField::all();
    	$visualValueFieldValues = VisualValueFieldValue::all();
    	$visualValueReport = VisualValueReport::where('inspection_id',$inspection->id)->first();
    	if(!$visualValueReport) {
    		$visualValueReport = new VisualValueReport();
    	}
    	
    	foreach($visualValues as $visualValue) {
    		foreach($visualValueFields as $visualValueField) {
    			$nameField = $visualValue->name.'-'.$visualValueField->name;
    			$nameField = str_replace(' ', '_', $nameField);
    			// dump($nameField);
    			
    			$inputRequest = $request->$nameField;
    			if($inputRequest) {
    				// dump('exito');
    				// dump($inputRequest);
    				// $databaseFieldName = str_replace($visualValue->name.'-','',$nameField);
    				// $databaseFieldName = str_replace('_',' ',$databaseFieldName);
    				// // dump($databaseFieldName);
    				// $visualValueFieldValue = 'waste of timeeeeeee';
    				$visualValueReport = new VisualValueReport();
    				$visualValueReport->inspection_id = $inspection->id;
    				$visualValueReport->visual_value_field_value_id = $inputRequest;
    				$visualValueReport->save();
    			}
    		}
    				// die;
    	}
    	
    	//Delete all old accessories asociated with that inspection
    	$oldAccesories = Accesory::where('inspection_id',$inspection->id)
    		->get();
    	foreach($oldAccesories as $oldAccesory) {
    		$oldAccesory->delete();
    	}
    	// dump($accessories);die;
    	//Add new accessories from input data
    	foreach($accessories as $accesoryInput) {
    		if($accesoryInput['type']) {
    			
	    		$accesory = new Accesory();
	    		$accesory->type = $accesoryInput['type'];
	    		$accesory->reference = $accesoryInput['brand'];
	    		$accesory->amount = $accesoryInput['amount'];
	    		$accesory->value = $accesoryInput['value'];
	    		$accesory->inspection_id = $inspection->id;
	    		$accesory->save();
    		}
    	}
    	
    	if($image1) {
    		$frontCardExtension = $image1->getClientOriginalExtension();
			if($inspection->image1) {
				
				if(file_exists($inspection->image1)){
    			
    				unlink($inspection->image1);
    			}
			}
			$frontCardFileName = $inspection->id."-image1".".".$frontCardExtension;
			$destinationPath = 'inspections';
			$frontCardPath = $image1->move($destinationPath,$frontCardFileName);
    		$inspection->image1 = $frontCardPath;
    		$inspection->save();
    	}
    	if($image2) {
    		$frontCardExtension = $image2->getClientOriginalExtension();
			if($inspection->image2) {
				
				if(file_exists($inspection->image2)){
    			
    				unlink($inspection->image2);
    			}
			}
			$frontCardFileName = $inspection->id."-image2".".".$frontCardExtension;
			$destinationPath = 'inspections';
			$frontCardPath = $image2->move($destinationPath,$frontCardFileName);
    		$inspection->image2 = $frontCardPath;
    		$inspection->save();
    	}
    	if($image3) {
    		$frontCardExtension = $image3->getClientOriginalExtension();
			if($inspection->image3) {
				
				if(file_exists($inspection->image3)){
    			
    				unlink($inspection->image3);
    			}
			}
			$frontCardFileName = $inspection->id."-image3".".".$frontCardExtension;
			$destinationPath = 'inspections';
			$frontCardPath = $image3->move($destinationPath,$frontCardFileName);
    		$inspection->image3 = $frontCardPath;
    		$inspection->save();
    	}
    	if($image4) {
    		$frontCardExtension = $image4->getClientOriginalExtension();
			if($inspection->image4) {
				
				if(file_exists($inspection->image4)){
    			
    				unlink($inspection->image4);
    			}
			}
			$frontCardFileName = $inspection->id."-image4".".".$frontCardExtension;
			$destinationPath = 'inspections';
			$frontCardPath = $image4->move($destinationPath,$frontCardFileName);
    		$inspection->image4 = $frontCardPath;
    		$inspection->save();
    	}
    	if($image5) {
    		$frontCardExtension = $image5->getClientOriginalExtension();
			if($inspection->image5) {
				
				if(file_exists($inspection->image5)){
    			
    				unlink($inspection->image5);
    			}
			}
			$frontCardFileName = $inspection->id."-image5".".".$frontCardExtension;
			$destinationPath = 'inspections';
			$frontCardPath = $image5->move($destinationPath,$frontCardFileName);
    		$inspection->image5 = $frontCardPath;
    		$inspection->save();
    	}
    	if($image6) {
    		$frontCardExtension = $image6->getClientOriginalExtension();
			if($inspection->image6) {
				
				if(file_exists($inspection->image6)){
    			
    				unlink($inspection->image6);
    			}
			}
			$frontCardFileName = $inspection->id."-image6".".".$frontCardExtension;
			$destinationPath = 'inspections';
			$frontCardPath = $image6->move($destinationPath,$frontCardFileName);
    		$inspection->image6 = $frontCardPath;
    		$inspection->save();
    	}
    	
    	
    	//Delete all old Novelties from the inspection
    	$inspectionNovelties = InspectionNovelty::where('inspection_id',$inspection->id)
    		->get()
    		;
    	foreach($inspectionNovelties as $inspectionNovelty) {
    		$inspectionNovelty->delete();
    	}
    	
    	$novelties = Novelty::all();
    	foreach($novelties as $novelty) {
    		//Building the name as in the input
    		$noveltyName = 'novelty-'.$novelty->id;
    		
    		//if the input exist, create a new Inspection Novelty
    		if($request->$noveltyName) {
    			$inspectionNovelty = new InspectionNovelty();
    			$inspectionNovelty->inspection_id = $inspection->id;
    			$inspectionNovelty->novelty_id = $novelty->id;
    			$inspectionNovelty->save();
    		}
    	}
    	
    	//Updating the service request with the inspection ID and the next step
    	$serviceRequest->inspection_id = $inspection->id;
		$serviceRequest->last_step = 4;
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
    	// $models[] ="<option value="."\"".$fasecoldaYearValues->count()."\"".">".$fasecoldaYearValues->count()."</option>";
    	
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
    
    public function getFuelTypes($model, $brandId,$cylinderId,$vehicleServiceId) {
    	
        // dump($brandId);
        // dump($model);
        // dump($cylinderId);
        // dump($vehicleServiceId);
        // die;
        
    	$fasecoldaYearValues = FasecoldaYearValue::where('year',$model)
    		->with('fasecolda.fuelType')
    		->whereHas('fasecolda',function($query) use ($brandId,$cylinderId,$vehicleServiceId){
    			$query->where('brand_id',$brandId)
    				->where('cylinder_id',$cylinderId)
    				->where('vehicle_service_id',$vehicleServiceId)
					;
    		})
    		->get()
    		;
        
        // dump($fasecoldaYearValues);die;
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
    
    public function getVehicleServices($model, $brandId,$cylinderId) {
    // 	dump('model '.$model);
    //     dump('brandId '.$brandId);
    //     dump('cylinderId '.$cylinderId);
    // die;
    	$fasecoldaYearValues = FasecoldaYearValue::where('year',$model)
    		->with('fasecolda')
    		->with('fasecolda.vehicleService')
    		->whereHas('fasecolda',function($query) use ($brandId,$cylinderId){
    			$query->where('brand_id',$brandId)
    				->where('cylinder_id',$cylinderId)
					;
    		})
    		->get()
    		;
    	$vehicleServices = array();
    	foreach($fasecoldaYearValues as $fasecoldaYearValue){
    		// $cylinder = Cylinder::find($fasecoldaYearValue->fasecolda->cylinder_id);
    		$vehicleServices[] = "<option value="."\"".$fasecoldaYearValue->fasecolda->vehicleService->id."\"".">".$fasecoldaYearValue->fasecolda->vehicleService->name."</option>";
    	};
    	// dump($cylinders);die;
    	
    	$vehicleServices = array_unique($vehicleServices);
    	$uniqueVehicleServices = array();
    	foreach($vehicleServices as $uniqueVehicleService){
    		$uniqueVehicleServices[] = $uniqueVehicleService;
    	}
    	// echo 1234;
    	// dump($uniqueCylinders);die;
    	
    	return $uniqueVehicleServices;
    }
    
    
    public function goTest() {
    	// $visualValues2 = VisualValue::with('visualValueFields')
    	// 	->with('visualValueFields.visualValueFieldValues')
    	// 	->get();
    	// 	;
    		
    	// 	$visualValueFields = VisualValueField::all()
    	// 	->pluck('name','id')
    	// 	;
    	// foreach ($visualValues2 as $visualValue) {
    	// 	foreach($visualValue->visualValueFields as $visualValueField) {
    	// 		dump($visualValueField);
    	// 	}
    	// }
    	// dump($visualValues2);die;
        
        $pdf = PDF::loadView('pages.frontend.text', $data);
        return $pdf->download('invoice.pdf');
        
    	// return view('pages.frontend.text')
    	// 	->with('visualValueFields',$visualValueFields)
    	// 	->with('visualValues2',$visualValues2)
    	// 	;
    }
    
    public function processTest(Request $request) {
    	
    	$visualValueFieldId = $request->visualValueFieldId;
    	$name = $request->name;
    	$value = $request->value;
    	
    	$visualValueFieldValue = new VisualValueFieldValue();
    	$visualValueFieldValue->name = $name;
    	$visualValueFieldValue->value = $value;
    	$visualValueFieldValue->visual_value_field_id = $visualValueFieldId;
    	$visualValueFieldValue->save();
    	
    	$visualValues2 = VisualValue::with('visualValueFields')
    		->with('visualValueFields.visualValueFieldValues')
    		->get();
    		;
    		
    		$visualValueFields = VisualValueField::all()
    		->pluck('name','id')
    		;
    	// foreach ($visualValues2 as $visualValue) {
    	// 	foreach($visualValue->visualValueFields as $visualValueField) {
    	// 		dump($visualValueField);
    	// 	}
    	// }
    	// dump($visualValues2);die;
    	return view('pages.frontend.text')
    		->with('visualValueFields',$visualValueFields)
    		->with('visualValues2',$visualValues2)
    		->with('visualValueFieldSelected',$visualValueFieldId)
    		;
    	
    }
}
