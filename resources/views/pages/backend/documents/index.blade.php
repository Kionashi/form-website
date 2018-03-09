@extends('layouts.backend.master.index')
@section('content')
	<div class="row">
		<div class="col-md-3" style="text-align: center;">
			<a class="undecorated" href="{{route('admin/documents/1')}}">
				<i class="fa fa-address-book" style="font-size: 90px;"></i>
				<h1>Anibal Cardozo</h1>
			</a>
		</div>
		<div class="col-md-3" style="text-align: center;">
			<a class="undecorated" href="{{route('admin/documents/1')}}">
				<i class="fa fa-address-book" style="font-size: 90px;"></i>
				<h1>Empresa 1</h1>
			</a>
		</div>
		<div class="col-md-3" style="text-align: center;">
			<a class="undecorated" href="{{route('admin/documents/1')}}">
				<i class="fa fa-address-book" style="font-size: 90px;"></i>
				<h1>Oscar Diaz</h1>
			</a>
		</div>
		<div class="col-md-3" style="text-align: center;">
			<a href="{{route('admin/documents/1')}}">
				<i class="fa fa-address-book" style="font-size: 90px;"></i>
				<h1>Victor Cardozo</h1>
			</a>
		</div>
	</div>
@endsection