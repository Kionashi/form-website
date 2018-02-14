@extends('layouts.backend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Editar cuenta de usuario</h3>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		{!!Form::open(array('route' => 'admin/user/edit/')) !!}
		{!!Form::hidden('id',$user->id)!!}
			<fieldset>
				<legend>Datos Personales</legend>
	
				<div class="form-group">
				<label class="padding-top-1 col-md-12">Nombre</label>
					<div class="col-md-12">
						{!! Form::text('name',$user->name,array('class' => 'form-control','placeholder' => 'Nombre'))!!}
					</div>
					<label class="padding-top-1 col-md-12">Correo</label>
					<div class="col-md-12">
						{!! Form::email('email',$user->email,array('class' => 'form-control','placeholder' => 'correo@mail.com'))!!}
					</div>	
					<label class="padding-top-1 col-md-12">Rol de usuario</label>
					<div class="col-md-12">
						{!! Form::select('roleId',$roles,$user->role->id,array('class' => 'form-control'))!!}	
					</div>
					<label class="padding-top-1 col-md-12">Estado</label>
					<div class="col-md-12">
						{!! Form::select('status',$status,$user->status,array('class' => 'form-control'))!!}		
					</div>
				</div>
				
			<div class="padding-top-1 col-md-12">
				<span>
					<input class="btn btn-primary" type="submit" name="" value="Enviar">
				</span>
				<span>
					<a href="{{route('admin/user/new-password/',$user->id)}}" class="btn btn-info">
						Cambiar contraseña
					</a> 
				</span>
				<span>
					<a href="{{route('admin/users')}}" class="btn btn-success">
						Volver
					</a> 
				</span>
			</div>
		{!! Form::close() !!}
	</div>
			</fieldset>
@endsection
@section('custom_script')
	<script type="text/javascript">
		$(document).ready(function() {
			
			$('#birthdate').datetimepicker({
            	format:'DD/MM/YYYY'
            });
            
            $('#entryDate').datetimepicker({
            	format:'DD/MM/YYYY'
            });
        });
    </script>
@stop  