@extends('layouts.frontend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Centro de solicitudes</h3>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<fieldset>
			{!!Form::open(array('route' => 'request/start')) !!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group">
					<label class="col-md-3">Solicitud de Servicio</label>
					<div class="col-md-3">
						{!! Form::select('serviceId',$services,old('serviceId'),array('class' => 'form-control'))!!}	
					</div>
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<input class="btn btn-primary btn-block" type="submit" name="" value="Ingresar">
					</div>
				</div>
			{!! Form::close() !!}
			{!!Form::open(array('route' => 'current-services/')) !!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group padding-top-4">
					<label class="col-md-3">Servicios Actuales</label>
					<div class="col-md-3">
						{!! Form::text('plate',null,['placeholder' => '', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::select('serviceId',$services,old('serviceId'),array('class' => 'form-control'))!!}
					</div>
					<div class="col-md-3">
						<input class="btn btn-primary btn-block" type="submit" name="" value="Ver">
					</div>
				</div>
			{!! Form::close() !!}
			{!!Form::open(array('route' => 'plate-search/')) !!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group padding-top-4">
					<label class="col-md-3">Consulta por Placa</label>
					<div class="col-md-3">
						{!! Form::text('plate',null,['placeholder' => 'Placa', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::select('serviceId',$services,old('serviceId'),array('class' => 'form-control'))!!}
					</div>
					<div class="col-md-3">
						<input class="btn btn-primary btn-block" type="submit" name="" value="Consultar">
					</div>
				</div>
			{!! Form::close() !!}
		</fieldset>
	</div>
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