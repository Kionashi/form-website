<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
	public $table = 'service_request';
    
    public function basicData() {
        return $this->belongsTo('App\BasicData','basic_data_id');
    }
    public function complementaryData() {
        return $this->belongsTo('App\ComplementaryData','complementary_data_id');
    }
    public function recording() {
        return $this->belongsTo('App\Recording','recording_id');
    }
    public function control() {
        return $this->belongsTo('App\Control','control_id');
    }
    public function inspection() {
        return $this->belongsTo('App\Inspection','inspection_id');
    }
    
    public static function getRequest($userId, $serviceRequestId) {
    	
    	$flow = ServiceRequest::where('user_id',$userId)
            ->where('service_id',$serviceRequestId)
    		->where('status','PENDING')
    		->first()
    		;
    		
    	return $flow;
    }
    
    public static function getLastStep($serviceRequest) {
        
        $currentStep = $serviceRequest->last_step;
        
        switch ($serviceRequest->service_id) {
            //Regrabación
            case 1:
                switch ($currentStep) {
                    case 0:
                        $lastStep = 0;
                        break;
                    
                    case 1:
                        $lastStep = 0;
                        break;
                    
                    case 2:
                        $lastStep = 1;
                        break;
                    
                    case 3:
                        $lastStep = 2;
                        break;
                    
                    case 6:
                        $lastStep = 3;
                        break;
                    
                    default:
                        $lastStep = 0;
                        break;
                }
                break;
            //Avaluó Comercial
            case 2:
                switch ($currentStep) {
                    case 0:
                        $lastStep = 0;
                        break;
                    
                    case 1:
                        $lastStep = 0;
                        break;
                    
                    case 2:
                        $lastStep = 1;
                        break;
                    
                    case 4:
                        $lastStep = 2;
                        break;
                    
                    case 5:
                        $lastStep = 4;
                        
                    case 6:
                        $lastStep = 5;
                        break;
                    
                    default:
                        $lastStep = 0;
                        break;
                }
                break;
            //RTC
            case 3:
                switch ($currentStep) {
                    case 0:
                        $lastStep = 0;
                        break;
                    
                    case 1:
                        $lastStep = 0;
                        break;
                    
                    case 2:
                        $lastStep = 1;
                        break;
                    
                    case 5:
                        $lastStep = 2;
                        break;
                    
                    case 6:
                        $lastStep = 5;
                        break;
                    
                    default:
                        $lastStep = 0;
                        break;
                }
                break;
            //Avaluó sin RTC
            case 4:
                switch ($currentStep) {
                    case 0:
                        $lastStep = 0;
                        break;
                    
                    case 1:
                        $lastStep = 0;
                        break;
                    
                    case 2:
                        $lastStep = 1;
                        break;
                    
                    case 4:
                        $lastStep = 2;
                        break;
                    
                    case 6:
                        $lastStep = 4;
                        break;
                    
                    default:
                        $lastStep = 0;
                        break;
                }
                break;
            default:
                $lastStep = 0;
                break;
        }
        
        return $lastStep;
    }
}
