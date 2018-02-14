@extends('layouts.backend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Crear cuenta de usuario</h3>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		{!!Form::open(array('route' => 'admin/user/register')) !!}
			<fieldset>
				<legend>Datos Personales</legend>
	
				<div class="form-group">
					<label class="padding-top-1 col-md-12">Nombre</label>
					<div class="col-md-12">
						{!! Form::text('name',old('name'),array('class' => 'form-control','placeholder' => 'Nombre'))!!}
					</div>
					<label class="padding-top-1 col-md-12">Correo</label>
					<div class="col-md-12">
						{!! Form::email('email',old('email'),array('class' => 'form-control','placeholder' => 'correo@mail.com'))!!}
					</div>	
					<label class="padding-top-1 col-md-12">Crea una Contraseña</label>
					<div class="col-md-12">
						{!! Form::password('password',array('class' => 'form-control'))!!}
					</div>
					<label class="padding-top-1 col-md-12">Confirma tu contraseña</label>
					<div class="col-md-12">
						{!! Form::password('passwordConfirmation',array('class' => 'form-control'))!!}
					</div>
					<label class="padding-top-1 col-md-12">Rol de usuario</label>
					<div class="col-md-12">
						{!! Form::select('roleId',$roles,old('roleId'),array('class' => 'form-control'))!!}	
					</div>
					<label class="padding-top-1 col-md-12">Empresa</label>
					<div class="col-md-12">
						{!! Form::text('company',old('company'),array('class' => 'form-control','placeholder' => 'Si el usuario es externo, incluir este campo'))!!}
					</div>
					<label class="padding-top-1 col-md-12">Estado</label>
					<div class="col-md-12">
						{!! Form::select('status',$status,old('status'),array('class' => 'form-control'))!!}
					</div>
				</div>
			<br>
			<br>
			<div>
				<div class="col-md-12 padding-top-1">
					<div class="col-md-3">
						<a class="btn btn-primary btn-block" href="{{route('admin/users')}}">Regresar</a>
					</div>
					<div class="col-md-3">
						<input class="btn btn-success btn-block" type="submit" name="" value="Enviar">
					</div>
				</div>
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