@extends('layouts.backend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Modificar contraseña</h3>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		{!!Form::open(array('route' => 'admin/user/edit-password/')) !!}
		{!!Form::hidden('id',$id)!!}
			<fieldset>
				<legend>Datos Personales</legend>
			
				<div class="form-group">
				<label class="padding-top-1 col-md-12">Crea una Contraseña</label>
					<div class="col-md-12">
						{!! Form::password('password',array('class' => 'form-control'))!!}
					</div>
					<label class="padding-top-1 col-md-12">Confirma tu contraseña</label>
					<div class="col-md-12">
						{!! Form::password('passwordConfirmation',array('class' => 'form-control'))!!}
					</div>
				</div>
				
			<div class="padding-top-1 col-md-12">
				<span>
					<input class="btn btn-primary" type="submit" name="" value="Enviar">
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