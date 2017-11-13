<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
// use App\Audit;

class AppController extends Controller
{
    function view($view = null, $data = [], $mergeData = []) {
	
	return view($view, $data, $mergeData)
     	// >with('auth', $auth)
    ;
    
	}
	
	public function storeAudit ($request, $action, $entityId) {
		
		// $ip = $request->ip();
		// $userAgent = $request->header('User-Agent');
		
		// $id = Auth::user()->id;
		
		// $audit = new Audit();
		// $audit->ip_address = $ip;
		// $audit->user_agent = $userAgent;
		// $audit->user_id = $id;
		// $audit->action = $action;
		// $audit->entity_id = $entityId;
		// $audit->save();
		
	}
	
	public function checkPermissions ($permission) {
		
		// return true;
		// $pass = false;
		// $user = Auth::user();
		
		// foreach($user->role->permissions as $userPermission) {
		// 	 echo($userPermission->name);
		// 	if($userPermission->name == $permission) {
				
		// 		$pass = true;
		// 	}
		// }
		
		// return $pass;
	}
}
