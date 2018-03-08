@extends('layouts.backend.master.index')
@section('content')
@if(isset($success))
<h4 style="color:green;">{{$success}}</h4>
@endif
	<div class="col-md-4 col-lg-4 col-sm-12">
	
	{!!Form::open(array('route' => 'admin/user/search/')) !!}
	
	{!!Form::text('key',null,array('placeholder' => 'Buscar', 'class' => 'form-control')) !!}
	
	{!! Form::close() !!}
	</div>
	<div class="table-responsive col-md-12">
		<table class="table table-hover">
		 <thead>
		 	<th>Nombre</th>
		 	<th>Correo</th>
		 	<th>Rol</th>
		 	<th>Estado</th>
		 	<th>Acciones</th>
		 </thead>
		 <tbody>
		 	@foreach($users as $user)
		 	<tr>
			 	<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->role->name}}</td>
				<td>{{$user->status}}</td>
				<td> 
					<a href="{{route('admin/user/update/',$user->id)}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
				
					<a href="{{route('admin/user/',$user->id)}}" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i>
					</a> 
					<a href="{{route('admin/user/delete/',$user->id)}}" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
					</a> 
				</td>
		 	</tr>
		 	@endforeach
		 </tbody>
		</table>
	</div> 
@endsection