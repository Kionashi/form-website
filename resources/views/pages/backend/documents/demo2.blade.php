@extends('layouts.backend.master.index')
@section('content')
		<div class="col-md-2 centered size-70">
			<a class="blue undecorated" href="{{route('admin/documents/1')}}">
				<i class="fa fa-level-up" style="font-size: 70px;"></i>
				<h2 style="margin-top: -3px;">Subir un nivel</h2>
			</a>
		</div>
		<div class="col-md-2 centered size-70">
			<a class="yellow undecorated" href="{{route('admin/documents/2')}}">
				<i class="fa fa-folder" style="font-size: 70px;"></i>
				<h2 style="margin-top: -3px;">Carpeta 13</h2>
			</a>
		</div>
		<div class="col-md-2 red centered size-70">
			<a class="red undecorated" href="{{asset('pdf/demo/abc123-Avaluo-Comercial-79.pdf')}}" target="_blank">
				<i class="fa fa-file-pdf-o"></i>
				<h2 style="margin-top: -3px;">Archivo 1</h2>
			</a>
		</div>
		<div class="col-md-2 centered size-70">
			<a class="red undecorated" href="{{asset('pdf/demo/abc123-Avaluo-Comercial-79.pdf')}}" target="_blank">
				<i class="fa fa-file-pdf-o" ></i>
				<h2 style="margin-top: -3px;">Archivo 2</h2>
			</a>
		</div>
		
@endsection