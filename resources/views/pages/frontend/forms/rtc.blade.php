@extends('layouts.frontend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Control</h3>
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
			{!!Form::open(array('route' => 'request/control','files'=>true)) !!}
			{!!Form::hidden('serviceRequestId',$serviceRequestId)!!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group">
					<div class="col-md-12">
					<label class="col-md-3 padding-top-1">Placa</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('plate',$basicData->plate,['placeholder' => 'Placa', 'class' =>'form-control']) !!}
					</div>
						
					</div>
					<label class="col-md-3 padding-top-1">No. Radicación</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('radicationNumber',$control->radication_number,['placeholder' => 'No. Radicación', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">No. Formulario</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('formNumber',$control->form_number,['placeholder' => 'No. Formulario', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Marca</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('brandId',$brands,$basicData->brand_id,array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Clase</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('classId',$vehicleClasses,null,array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Color</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('colorId',$colors,$complementaryData->color_id,array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Nuevo Color</label>
					{!!Form::open(array('route' => 'request/complementary-data/add-color')) !!}
						{!!Form::hidden('serviceRequestId',$serviceRequestId)!!}
						<div class="col-md-3 padding-top-1">
							{!! Form::text('name',null,['placeholder' => 'Nuevo Color', 'class' =>'form-control']) !!} 
						</div>
					{!!Form::close()!!}
					
					<label class="col-md-3 padding-top-1">Plaqueta Serie</label>
					<div class="col-md-3 padding-top-1">{!! Form::file('serialFile') !!}</div>
					
					<label class="col-md-3 padding-top-1">Lineas 1</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('line1',$control->line1,['placeholder' => 'Lineas 1', 'class' =>'form-control']) !!}
					</div>
					
					<label class="col-md-3 padding-top-1">Nro Motor</label>
					<div class="col-md-3 padding-top-1">{!! Form::file('engineFile') !!}</div>
					<label class="col-md-3 padding-top-1">Lineas 2</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('line2',$control->line2,['placeholder' => 'Lineas 2', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Nro Chasis</label>
					<div class="col-md-3 padding-top-1">{!! Form::file('chassisFile') !!}</div>
					<label class="col-md-3 padding-top-1">Lineas 3</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('line3',$control->line3,['placeholder' => 'Lineas 3', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Modelo</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('model',$models,$basicData->model,array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Motor</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('engineNumber',$complementaryData->engine_number,['placeholder' => 'Motor', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Nro Seguridad</label>
					<div class="col-md-3 padding-top-1">{!! Form::file('securityNumber') !!}</div>
					<label class="col-md-3 padding-top-1">Serie</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('serialNumber',$complementaryData->serial_number,['placeholder' => 'Serie', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Tarjeta Frontal</label>
					<div class="col-md-3 padding-top-1">{!! Form::file('frontCard') !!}</div>
					<label class="col-md-3 padding-top-1">Chasis</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('chassisNumber',$complementaryData->chassis_number,['placeholder' => 'Chasis', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Tarjeta Posterior</label>
					<div class="col-md-3 padding-top-1">{!! Form::file('backCard') !!}</div>
					<label class="col-md-3 padding-top-1">Datos de Revisión</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('reviewData',$control->review_data,['placeholder' => 'Datos de revisión', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Motivo</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('reason',$control->reason,['placeholder' => 'Motivo', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Tec. Identificaciones</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('inspectorId',$inspectors,null,array('class' => 'form-control'))!!}
					</div>
					<div class="col-md-12">
						<label class="col-md-3 padding-top-1">Fotos</label>
						<div class="col-md-9 padding-top-1">
							<div class="col-md-3">
								<a href="{{asset($complementaryData->main_image)}}" target="_blank"><img src="{{asset($complementaryData->main_image)}}" class="img-responsive thumbnail"></a>
							</div>
							<div class="col-md-3">
								<a href="{{asset($complementaryData->secondary_image)}}" target="_blank">
								<img src="{{asset($complementaryData->secondary_image)}}" class="img-responsive thumbnail">
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<label class="col-md-3 padding-top-1">Estado</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::select('status',['APPROVED'=> 'Aprobado','REJECTED' => 'Rechazado'],$control->inspector_id,array('class' => 'form-control'))!!}
						</div>
					</div>
					<label class="col-md-3 padding-top-1">Motivo del rechazo</label>
					<div class="col-md-9 padding-top-1">
						{!! Form::textarea('rejectReason',$control->reject_reason,['placeholder' => 'Motivo del rechazo', 'class' =>'form-control']) !!}
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
