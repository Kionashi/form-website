@extends('layouts.frontend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Regrabación</h3>
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
			{!!Form::open(array('route' => 'request/recording','files'=>true)) !!}
			{!!Form::hidden('serviceRequestId',$serviceRequestId)!!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group">
					<label class="col-md-3 padding-top-1">Placa</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('plateMirror',$basicData->plate,['placeholder' => 'Placa', 'class' =>'form-control','disabled']) !!}
						{!!Form::hidden('plate',$basicData->plate)!!}
					</div>
					<label class="col-md-3 padding-top-1">Tipo Carrocería</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('bodyworkTypeMirror',$complementaryData->bodywork_type,['placeholder' => 'Tipo Carrocería', 'class' =>'form-control','disabled']) !!}
						{!!Form::hidden('bodyworkType',$complementaryData->bodywork_type)!!}
						
					</div>
					<label class="col-md-3 padding-top-1">Marca</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('brandIdMirror',$brands,$basicData->brand_id,array('class' => 'form-control','disabled'))!!}
						{!!Form::hidden('brandId',$basicData->brand_id)!!}
						
					</div>
					<label class="col-md-3 padding-top-1">Modelo</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('modelMirror',$models,$basicData->model,array('class' => 'form-control','disabled'))!!}
						{!!Form::hidden('model',$basicData->model)!!}
						
					</div>
					<label class="col-md-3 padding-top-1">Linea</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('lineMirror',$complementaryData->line,['placeholder' => 'Linea', 'class' =>'form-control','disabled']) !!}
						{!!Form::hidden('line',$complementaryData->line)!!}
						
					</div>
					<label class="col-md-3 padding-top-1">Clase</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('classId',$vehicleClasses,$recording->vehicle_class,array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Motor</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('engineNumberMirror',$complementaryData->engine_number,['placeholder' => 'Motor', 'class' =>'form-control','disabled']) !!}
						{!!Form::hidden('engineNumber',$complementaryData->engine_number)!!}
						
					</div>
					<label class="col-md-3 padding-top-1">Serie</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('serialNumberMirror',$complementaryData->serial_number,['placeholder' => 'Serie', 'class' =>'form-control','disabled']) !!}
						{!!Form::hidden('serialNumber',$complementaryData->serial_number)!!}
						
					</div>
					<label class="col-md-3 padding-top-1">Chasis</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('chassisNumberMirror',$complementaryData->chassis_number,['placeholder' => 'Chasis', 'class' =>'form-control','disabled']) !!}
						{!!Form::hidden('chassisNumber',$complementaryData->chassis_number)!!}
						
					</div>
					<label class="col-md-3 padding-top-1">Parte regrabada</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('reRecordedPart',$recording->re_recorded_part,['placeholder' => 'Parte regrabada', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Color</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('colorIdMirror',$colors,$complementaryData->color_id,array('class' => 'form-control','disabled'))!!}
						{!!Form::hidden('colorId',$complementaryData->color_id)!!}
						
					</div>
					<label class="col-md-3 padding-top-1">Nuevo Color</label>
					
					<div class="col-md-3 padding-top-1">
						{!! Form::text('name',null,['placeholder' => 'Nuevo Color', 'class' =>'form-control','disabled']) !!} 
					</div>
					
					<h3 class="col-md-12 padding-top-1" align="center">Datos de revisión</h3>
					
					<label class="col-md-3 padding-top-1">Ciudad Revisión</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('reviewCity',$recording->review_city,['placeholder' => 'Ciudad Revisión', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Expide Secretaria</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('secretaryExpedition',$recording->secretary_expedition,['placeholder' => 'Expide Secretaria', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Ciudad</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('city',$recording->city,['placeholder' => 'Ciudad', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Descripción</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('description',$recording->description,['placeholder' => 'Descripción', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Observaciones</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('notes',$recording->notes,['placeholder' => 'Observaciones', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Tec. Identificaciones</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('inspectorId',$inspectors,$recording->inspector_id,array('class' => 'form-control'))!!}
					</div>
					
					<div class="col-md-12" >
					<div class="col-md-3 offset-6 padding-top-1" align="center">
						<a class="btn btn-primary btn-block" href="{{route('request/return/',$serviceRequestId)}}">Regresar</a>
					</div>
					<div class="col-md-3 padding-top-1" align="center">
						<input class="btn btn-success btn-block" type="submit" name="" value="Continuar">
					</div>
					</div>
					
			{!! Form::close() !!}
				</div>
			
		</fieldset>
	</div>
@endsection
