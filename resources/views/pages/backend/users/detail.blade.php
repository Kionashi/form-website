@extends('layouts.backend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Detalle del usuario</h3>
	
			<fieldset>
				<legend>Datos Personales</legend>
	
				<div class="form-group">
					<div class="col-md-12 padding-top-1">
					<label class="">Nombre</label>
						{{$user->name}}
					</div>
					<div class="col-md-12 padding-top-1">
					<label class="">Correo</label>
						{{$user->email}}
					</div>	
					<div class="col-md-12 padding-top-1">
					<label class="">Rol de usuario</label>
						{{$user->role->name}}	
					</div>
					<div class="col-md-12 padding-top-1">
					<label class="">Empresa</label>
						{{$user->company}}
					</div>
					<div class="col-md-12 padding-top-1">
					<label class="">Estado</label>
						@if($user->status == 'ACTIVE')
							Activo
						@else
							Inactivo
						@endif				
					</div>
				</div>
				
			<br>
			<br>
			<div>
				<div class="col-md-12 padding-top-1"><a class="btn btn-success" name="" href="{{route('admin/users')}}">Volver</a></div>
			</div>
		{!! Form::close() !!}
	</div>
	</fieldset>
@endsection
 