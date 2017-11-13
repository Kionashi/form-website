@extends('layouts.frontend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Datos Complementarios</h3>
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
					<label class="col-md-4 padding-top-1">Turno</label>
					<label class="col-md-4 padding-top-1">Marca</label>
					<label class="col-md-4 padding-top-1">Linea</label>
					<div class="col-md-4">
						{!! Form::text('turn',old('turn'),['placeholder' => 'Turno', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-4">
						{!! Form::select('brandId',$brands,old('brandId'),array('class' => 'form-control'))!!}
					</div>
					<div class="col-md-4">
						{!! Form::text('line',old('line'),['placeholder' => 'Linea', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-4 padding-top-1">Cilindrada</label>
					<label class="col-md-4 padding-top-1">Servicio</label>
					<label class="col-md-4 padding-top-1">Carrocería</label>
					<div class="col-md-4">
						{!! Form::text('cylinders',old('cylinders'),['placeholder' => 'Cilindrada', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-4">
						{!! Form::select('serviceId',$services,old('serviceId'),array('class' => 'form-control'))!!}
					</div>
					<div class="col-md-4">
						{!! Form::text('bodywork',old('bodywork'),['placeholder' => 'Carrocería', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Tipo Carrocería</label>
					<label class="col-md-3 padding-top-1">Combustible</label>
					<label class="col-md-3 padding-top-1">Capacidad Kg/PSj</label>
					<label class="col-md-3 padding-top-1">Modelo</label>
					<div class="col-md-3">
						{!! Form::text('bodyworkType',old('bodyworkType'),['placeholder' => 'Tipo Carrocería', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::text('fuelType',old('fuelType'),['placeholder' => 'Combustible', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::text('capacity',old('capacity'),['placeholder' => 'Capacidad Kg/PSj', 'class' =>'form-control']) !!}
					</div>
					
					<div class="col-md-3">
						{!! Form::select('model',$models,old('model'),array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Color</label>
					<label class="col-md-3 padding-top-1">Nuevo Color</label>
					<label class="col-md-6 padding-top-1">Declaración Importación</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('color',old('color'),['placeholder' => 'Color', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('newColor',old('newColor'),['placeholder' => 'Nuevo Color', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-6 padding-top-1">
						{!! Form::text('importDeclaration',old('importDeclaration'),['placeholder' => 'Declaración Importación', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Número Motor</label>
					<label class="col-md-3 padding-top-1">Número Serie</label>
					<label class="col-md-6 padding-top-1">Número Chasis</label>
					<div class="col-md-3">
						{!! Form::text('engineNumber',old('engineNumber'),['placeholder' => 'Número Motor', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::text('serialNumber',old('serialNumber'),['placeholder' => 'Número Serie', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-6">
						{!! Form::text('chassisNumber',old('chassisNumber'),['placeholder' => 'Número Chasis', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-6 padding-top-1">Fecha Importación</label>
					<label class="col-md-6 padding-top-1">Fecha Matricula</label>
					<div class="col-md-6">
						{!! Form::text('importDate',old('importDate'),['placeholder' => 'Fecha Importación', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-6">
						{!! Form::text('plateDate',old('plateDate'),['placeholder' => 'Fecha Matricula', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Observación</label>
					<div class="col-md-9  padding-top-1">
						{!! Form::textarea('observation',old('observation'),['class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Sede</label>
					<label class="col-md-3 padding-top-1">Solicitado Por:</label>
					<label class="col-md-3 padding-top-1">Asegurado</label>
					<label class="col-md-3 padding-top-1">Intermediario</label>
					<div class="col-md-3">
						{!! Form::text('headquarters',old('headquarters'),['placeholder' => 'Sede', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::text('requestedBy',old('requestedBy'),['placeholder' => 'Solicitado Por:', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::text('insured',old('insured'),['placeholder' => 'Asegurado', 'class' =>'form-control']) !!}
					</div>
					
					<div class="col-md-3">
						{!! Form::text('intermediary',old('intermediary'),['placeholder' => 'Intermediario', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Imagenes</label>
					<div class="col-md-3 padding-top-1">{!! Form::file('mainImage') !!}{!! Form::file('secondaryImage') !!}</div>
					<div class="col-md-3 padding-top-1">
						<a class="btn btn-primary btn-block" href="{{route('request/return/',$serviceRequestId)}}">Regresar</a>
					</div>
					<div class="col-md-3 padding-top-1">
						<input class="btn btn-success btn-block" type="submit" name="" value="Continuar">
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