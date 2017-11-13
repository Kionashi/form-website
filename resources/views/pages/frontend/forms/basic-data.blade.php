@extends('layouts.frontend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Datos Basicos</h3>
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
			{!!Form::open(array('route' => 'request/basic-data','files'=>true)) !!}
			{!!Form::hidden('serviceRequestId',$serviceRequestId)!!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group">
					<label class="col-md-3 padding-top-1">Placa</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('plate',old('plate'),['placeholder' => 'Placa', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Marca</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('brandId',$brands,old('brandId'),array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Nombre</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('firstName',old('firstName'),['placeholder' => 'Nombre', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Apellido</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('lastName',old('lastName'),['placeholder' => 'Apellido', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Documento</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('document',old('document'),['placeholder' => 'Documento', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Lugar Expedición</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('expeditionPlace',old('expeditionPlace'),['placeholder' => 'Lugar Expedición', 'class' =>'form-control']) !!}
					</div>
					
					<label class="col-md-3 padding-top-1">Teléfono</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('phone',old('phone'),['placeholder' => 'Teléfono', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Tipo de Usuario</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('userType',$userTypes,old('userType'),array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Servicio</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('serviceId',$services,old('serviceId'),array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Modelo</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('model',$models,old('model'),array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Finalización SOAT</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::date('finalizationSoat',old('finalizationSoat'),['placeholder' => 'AAAA-MM-DD', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Privacidad de datos</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::file('dataPrivacy') !!}
					</div>
					<div class="col-md-12">
						
						<div class="col-md-4 padding-top-1">
							<a class="btn btn-primary btn-block" href="{{route('request/return/',$serviceRequestId)}}">Regresar</a>
						</div>
						<div class="col-md-4 padding-top-1">
							<a class="btn btn-warning btn-block" href="#">Pago Online</a>
						</div>
						<div class="col-md-4 padding-top-1">
							<input class="btn btn-success btn-block" type="submit" name="" value="Continuar">
						</div>
					</div>
					
			{!! Form::close() !!}
				</div>
			
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