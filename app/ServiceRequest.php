<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
	public $table = 'request';
    public static function getRequest($id) {
    	
    	$flow = ServiceRequest::where('user_id',$id)
    		->where('status','PENDING')
    		->first()
    		;
    		
    	return $flow;
    }
    
    public static function getLastStep($serviceRequest) {
        
        $currentStep = $serviceRequest->lastStep;
        
        switch ($serviceRequest->service_id) {
            //Regrabación
            case 1:
                switch ($currentStep) {
                    case 0:
                        $lastStep = -1;
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
                        $lastStep = -1;
                        break;
                }
                break;
            //Avaluó Comercial
            case 2:
                switch ($currentStep) {
                    case 0:
                        $lastStep = -1;
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
                        $lastStep = -1;
                        break;
                }
                break;
            //RTC
            case 3:
                switch ($currentStep) {
                    case 0:
                        $lastStep = -1;
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
                        $lastStep = -1;
                        break;
                }
                break;
            //Avaluó sin RTC
            case 4:
                switch ($currentStep) {
                    case 0:
                        $lastStep = -1;
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
                        $lastStep = -1;
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
