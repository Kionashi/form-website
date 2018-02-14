<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\User;
use App\UserRole;
use App\ServiceRequest;
use Auth;
use App\Http\Controllers\BackendController;

class UsersController extends BackendController
{
	// Validation rules
	protected $signUpValidationRules=[
		'name' 					=> 'required',
		'password'				=> 'required',
		'passwordConfirmation' 	=> 'required|same:password',
		'email' 				=> 'required|unique:users|email',
		'roleId' 				=> 'required',
		'status'				=> 'required'
	];
	protected $editValidationRules=[
		'name' 					=> 'required',
		'email' 				=> 'required|email',
		'roleId' 				=> 'required',
		'status'				=> 'required'
	];
	
	protected $newPasswordValidationRules=[
		'password'				=> 'required',
		'passwordConfirmation' 	=> 'required|same:password'
		];
	
    public function index () {
    	
    	$users = User::with('role')
    		->get();
    		;
    		
    	return view('pages.backend.users.index')
    		->with('users',$users)
    		;
    }
    
    public function show($id) {
    	
    	$user = User::find($id);
    	
    	return view('pages.backend.users.detail')
    		->with('user',$user)
    		;
    }
    
    public function create () {
    	$roles = UserRole::all()
    		->pluck('name','id')
            ;
        $status = array();
        $status = ['ACTIVE' => 'Activo', 'INACTIVE' => 'Inactivo'];
        
    	return view('pages.backend.users.create')
    		->with('roles',$roles)
    		->with('status',$status)
    		;
    }
    
    public function register(Request $request) {
        
		// Validar esta funcion me regresa a la vista anterior con un mensaje de error si no cumple con las reglas de validacion
		$this->validate($request, $this->signUpValidationRules);
		
		$name = $request->input('name');
    	$email = $request->input('email');
    	$roleId = $request->input('roleId');
    	$password = $request->input('password');
    	$status = $request->input('status');
    	$company = $request->input('company');
        
    	$role = UserRole::findOrFail($roleId);
    	
    	$user = new User();
        if ($role->name == 'EXTERNAL') {
            $user->company = $company;
        }
        $user->name = $name;
        $user->password = bcrypt($password);
        $user->email = $email;
        $user->status = $status;
        $user->user_role_id = $roleId;
        $user->save();
        
        
        //Registrar auditoria
        // $this->storeAudit($request,'CREAR USUARIO',$user->id);
        
    	
		// Mostrar vista
		return redirect()->route('admin/users')
			->with('success','El usuario ha sido creado exitosamente')
		;
	}

	public function update ($id) {
    	
    	$user = User::findOrFail($id);
    	$roles = UserRole::all()
    		->pluck('name','id')
            ;
        $status = ['ACTIVE' => 'Activo', 'INACTIVE' => 'Inactivo'];
    	return view('pages.backend.users.update')
    		->with('roles',$roles)
    		->with('user',$user)
    		->with('status',$status)
    		;
    }
    
    public function edit(Request $request) {
        // Validar esta funcion me regresa a la vista anterior con un mensaje de error si no cumple con las reglas de validacion
        $id = $request->input('id');
        $email = $request->input('email');
        $user = User::findOrFail($id);
        
        //if the email field has been changed from the current user's email I overwrite the validation rules for the email to make sure there are no duplicates in the database
        if ($email != $user->email) {
            $this->editValidationRules['email'] = 'required|unique:users|email';
        }
        
		$this->validate($request, $this->editValidationRules);
		
		$name = $request->input('name');
    	$roleId = $request->input('roleId');
    	$password = $request->input('password');
    	$status = $request->input('status');
    	$id = $request->input('id');
    	$company = $request->input('company');
        
    	$role = UserRole::findOrFail($roleId);
    	
    	$user = User::findOrFail($id);
        if ($role->name == 'EXTERNAL') {
            $user->company = $company;
        }
    	$user->name = $name;
    	$user->password = bcrypt($password);
        $user->email = $email;
        $user->status = $status;
        $user->user_role_id = $roleId;
    	$user->save();
        
        //Registrar auditoria
        // $this->storeAudit($request,'CREAR USUARIO',$user->id);
        
    	
		// Mostrar vista
		return redirect()->route('admin/users')
			->with('success','El usuario ha sido modificado exitosamente')
		;
	}
	
	public function newPassword($id) {
		
		return view('pages.backend.users.new-password')
    		->with('id',$id)
    		;
		
	}
	
	public function editPassword(Request $request) {
		
		$this->validate($request, $this->newPasswordValidationRules);
		
    	$id = $request->input('id');
    	$password = $request->input('password');
		
		$user = User::findOrFail($id);
		$user->password = bcrypt($password);
		$user->save();
		
		return redirect()->route('admin/users')
			->with('success','La contraseña ha sido modificada exitosamente')
		;
	}
	
	public function delete($id) {
		
        $requests = ServiceRequest::where('user_id',$id)->get();
        
        foreach ($requests as $request) {
            $request->delete();
        }
		$user = User::findOrFail($id);
		$user->delete();
		// Mostrar vista
		return redirect()->route('admin/users')
			->with('success','El usuario ha sido eliminado exitosamente')
		;

	}
	
	public function search(Request $request){

		$key = $request->input('key');
		$users = User::where('name','like','%'.$key.'%')
			->orWhere('email','like','%'.$key.'%')
			->get()
			;
		return view('pages.backend.users.results')
			->with('users', $users)
			;
	}
    
    public function logout() {
        
        Auth::logout();
        
        return redirect()->route('/'); 
    }
}	
