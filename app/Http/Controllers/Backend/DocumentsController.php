<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use App\User;
use App\Folder;
use App\File;
use File as FileMaker;

class DocumentsController extends Controller
{
    public function index() {
    	
        // $folders = Folder::where('id','>',0)->orderBy('created_at','desc')->get();
        // $files = File::all();
        
        // foreach ($files as $file) {
        //     $file->delete();
        // }
        // foreach ($folders as $folder) {
        //     $folder->delete();
        // }
        
    	$users = User::where('status','ACTIVE')->get();
    	foreach($users as $user) {
            $folder = Folder::where('user_id', $user->id)->first();
            if(!$folder) {
                $folder = new Folder();
                $folder->user_id = $user->id;
                $folder->parent_id = null;
                $folder->path = 'storage/documents/'.$user->id;
                $folder->name = $user->name;
                $folder->save();
            }
        }
        $folders = Folder::where('parent_id',null)->get();
    	return view('pages.backend.documents.index')
    	->with('folders',$folders)
    	;
    }
    
    //Load a view with the folders and files contained in the parentId
    public function folders($id,$parentId) {
        
    	$parent = Folder::find($parentId);
        $path = $parent->path; 
                
		$folders = Folder::where('user_id',$id)
			->where('parent_id',$parentId)
			->get()
    		;
    	$files = File::where('user_id',$id)
			->where('parent_id',$parentId)
			->get()
			;
		return view('pages.backend.documents.folders')
			->with('files',$files)
			->with('folders',$folders)
			->with('parent',$parent)
            ->with('path',$path)
			;
    }
    
    public function addFile(Request $request) {
        // phpinfo();die;
    	$file = $request->file('file');
        $parentId = $request->parentId;
        $name = strtolower(urlencode($request->name));
        $userId = $request->userId;
        $path = $request->path;
        // dump($path);die;
        if($file) {
            exec('mkdir -p '.$path);
            // $filePath = $file->store('hola/mundo', ['disk' => 'public_uploads']);
            // dump($filePath);die;
            
            if($file) {
    
                $extension = $file->getClientOriginalExtension();
                $fileName = $name.".".$extension;
                $filePath = $file->move($path,$fileName);
                
            }
            // $filePath = Storage::putFile($path,$file);
    	// dump($file);die;
   //  		$serialExtension = $file->getClientOriginalExtension();
			// $serialFileName = $name.".".$serialExtension;
			// $destinationPath = 'documents/anibal/carpeta1/carpeta2';
			// $filePath = $file->move($destinationPath,$serialFileName);
    		
    		$newFile = new File();
    		$newFile->name = $request->name;
    		$newFile->path = $filePath;
    		$newFile->user_id = $userId;
    		$newFile->parent_id = $parentId;
    		$newFile->save();
    		
    		return $this->folders($userId, $parentId);
    	}
    }
    public function addFolder(Request $request){
        // dump(123);die;
        $userId = $request->userId;
        $parentId = $request->parentId;
        $name = $request->name;
    
        $parent = Folder::find($parentId);
        $path = $parent->path;
        
        //Update the name to make it url friendly
        $name = strtolower(urlencode($request->name));
        
    	$folder = new Folder();
    	$folder->name = $request->name;
        $folder->user_id = $userId;
        $folder->parent_id = $parentId;
        $folder->path = $parent->path.'/'.$name;
        $folder->save();
        
        return $this->folders($userId, $parentId);
    }
	// public function demo1() {
 //    	return view('pages.backend.documents.demo1');
	// }
	
	// public function demo2() {
 //    	return view('pages.backend.documents.demo2');
	// }
	
	public function download($id) {
		
		//soon
	}
}
