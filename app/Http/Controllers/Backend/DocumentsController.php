<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocumentsController extends Controller
{
    public function index() {
    	return view('pages.backend.documents.index');
    }
    
	public function demo1() {
    	return view('pages.backend.documents.demo1');
	}
	
	public function demo2() {
    	return view('pages.backend.documents.demo2');
	}
	
	public function download($id) {
		
		//soon
	}
}
