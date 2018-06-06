@extends('layouts.frontend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Regrabación</h3>
		<!-- @if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif -->
		<fieldset>
			{!!Form::open(array('files'=>true,'id' => 'recordingForm')) !!}
			{!!Form::hidden('serviceRequestId',$serviceRequestId)!!}
			{!!Form::hidden('hasComplementaryData',$hasComplementaryData)!!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group">
				<div class="row margin-0">
					<label class="col-md-3 padding-top-1">Placa</label>
					<div class="col-md-3 padding-top-1">
						{{$basicData->plate}}
						{!!Form::hidden('plate',$basicData->plate)!!}
					</div>
					<label class="col-md-3 padding-top-1">Tipo Carrocería</label>
					<div class="col-md-3 padding-top-1">
						@if($hasComplementaryData)
							{{$complementaryData->bodywork_type}}
							{!!Form::hidden('bodyworkType',$complementaryData->bodywork_type)!!}
						@elseif(!$hasComplementaryData)
							{!!Form::text('bodyworkType',null,['class' => 'form-control'])!!}
						@endif
					</div>
				</div>
				<div class="row margin-0">
					<label class="col-md-3 padding-top-1">Marca</label>
					<div class="col-md-3 padding-top-1">
						{{$basicData->brand->name}}
						{!!Form::hidden('brandId',$basicData->brand_id,['id' =>'brand'])!!}
						
					</div>
					<label class="col-md-3 padding-top-1">Modelo</label>
					<div class="col-md-3 padding-top-1">
						{{$basicData->model}}
						{!!Form::hidden('model',$basicData->model,['id' => 'model'])!!}
						
					</div>
				</div>
				<div class="row margin-0">
					<label class="col-md-3 padding-top-1">Linea</label>
					<div class="col-md-3 padding-top-1">
						@if($hasComplementaryData)
							{{$complementaryData->line}}
							{!!Form::hidden('line',$complementaryData->line)!!}
						@elseif(!$hasComplementaryData)
						{!!Form::text('line',null,['class' => 'form-control'])!!}
						@endif
					</div>
					
					<label class="col-md-3 padding-top-1">Cilindraje</label>
					<div class="col-md-3 padding-top-1">
						@if($hasComplementaryData)
							{{$complementaryData->cylinder->name}}
							{!!Form::hidden('cylinderId',$complementaryData->cylinder_id)!!}
						@elseif(!$hasComplementaryData)
						{!! Form::select('cylinderId',$cylinders,null,['class' =>'form-control','id' => 'cylinder']) !!}
						@endif
					</div>
				</div>
				<div class="row margin-0">
					<label class="col-md-3 padding-top-1">Servicio</label>
					<div class="col-md-3 padding-top-1">
						@if($hasComplementaryData)
							{{$complementaryData->vehicleService->name}}
							{!!Form::hidden('vehicleServiceId',$complementaryData->vehicleService->id)!!}
						@elseif(!$hasComplementaryData)
						{!! Form::select('vehicleServiceId',$services,null,array('class' => 'form-control','id' => 'vehicleService'))!!}
						@endif
					</div>
					
					<label class="col-md-3 padding-top-1">Combustible</label>
					<div class="col-md-3 padding-top-1">
						@if($hasComplementaryData)
							{{$complementaryData->fuelType->name}}
							{!!Form::hidden('fuelTypeId',$complementaryData->fuelType->id)!!}
						@elseif(!$hasComplementaryData)
						{!! Form::select('fuelTypeId',$fuelTypes,null,array('class' => 'form-control','id'=>'fuelType'))!!}
						@endif
					</div>
				</div>
				<div class="row margin-0">
					<label class="col-md-3 padding-top-1">Clase</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('classId',$vehicleClasses,$recording->vehicle_class,array('class' => 'form-control','id' => 'vehicleClass'))!!}
					</div>

					<label class="col-md-3 padding-top-1">Color</label>
						<div class="col-md-3 padding-top-1">
							@if($hasComplementaryData)
								{{$complementaryData->color->name}}
								{!!Form::hidden('colorId',$complementaryData->color_id)!!}
							@elseif(!$hasComplementaryData)
								{!! Form::select('colorId',$colors,null,array('class' => 'form-control'))!!}
							@endif
						</div>
				</div>
				<div class="row margin-0">
					<label class="col-md-3 padding-top-1">Motor</label>
					<div class="col-md-3 padding-top-1">
						@if($hasComplementaryData)
							{{$complementaryData->engine_number}}
							{!!Form::hidden('engineNumber',$complementaryData->engine_number)!!}
						@elseif(!$hasComplementaryData)
							{!!Form::text('engineNumber',null,['class' => 'form-control'])!!}
						@endif	
					</div>
					<label class="col-md-3 padding-top-1">Serie</label>
					<div class="col-md-3 padding-top-1">
						@if($hasComplementaryData)
							{{$complementaryData->serial_number}}
							{!!Form::hidden('serialNumber',$complementaryData->serial_number)!!}
						@elseif(!$hasComplementaryData)
							{!!Form::text('serialNumber',null,['class' => 'form-control'])!!}
						@endif	
					</div>
				</div>
				<div class="row margin-0">
					<label class="col-md-3 padding-top-1">Chasis</label>
					<div class="col-md-3 padding-top-1">
						@if($hasComplementaryData)
							{{$complementaryData->chassis_number}}
							{!!Form::hidden('chassisNumber',$complementaryData->chassis_number)!!}
						@elseif(!$hasComplementaryData)
							{!!Form::text('chassisNumber',null,['class' => 'form-control'])!!}
						@endif 
					</div>
					<label class="col-md-3 padding-top-1">Parte regrabada</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('reRecordedPart',$recording->re_recorded_part,['placeholder' => 'Parte regrabada', 'class' =>'form-control']) !!}
						<div class="red">{{$errors->first('reRecordedPart')}}</div>
					</div>
				</div>
					<!-- <div class="row margin-0"> 
						
					</div> -->
					
					<h3 class="col-md-12 padding-top-1" align="center">Datos de revisión</h3>
					
					<div class="row">
						<label class="col-md-3 padding-top-1">Ciudad Revisión</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('reviewCity',$recording->review_city,['placeholder' => 'Ciudad Revisión', 'class' =>'form-control']) !!}
							<div class="red">{{$errors->first('reviewCity')}}</div>
						</div>
						<label class="col-md-3 padding-top-1">Expide Secretaria</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('secretaryExpedition',$recording->secretary_expedition,['placeholder' => 'Expide Secretaria', 'class' =>'form-control']) !!}
							<div class="red">{{$errors->first('secretaryExpedition')}}</div>
						</div>
					</div>
					<div class="row">
						<label class="col-md-3 padding-top-1">Ciudad</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('city',$recording->city,['placeholder' => 'Ciudad', 'class' =>'form-control']) !!}
							<div class="red">{{$errors->first('city')}}</div>
						</div>
						<label class="col-md-3 padding-top-1">Motivo</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('description',$recording->description,['placeholder' => 'Motivo', 'class' =>'form-control']) !!}
							<div class="red">{{$errors->first('description')}}</div>
						</div>
					</div>
					<div class="row">
						<label class="col-md-3 padding-top-1">Observaciones</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('notes',$recording->notes,['placeholder' => 'Observaciones', 'class' =>'form-control']) !!}
							<div class="red">{{$errors->first('notes')}}</div>
						</div>
						<label class="col-md-3 padding-top-1">Tec. Identificaciones</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::select('inspectorId',$inspectors,$recording->inspector_id,array('class' => 'form-control'))!!}
						</div>
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
@section('custom_script')
<script type="text/javascript">
		$(document).ready(function() {
			
			var submitForm = true;
			$('#recordingForm').submit(function(e){
				if (submitForm) {
					console.log("SUBMIT");
				} else {
					e.preventDefault();
					console.log("PREVENTED");
				}
			});
			
			$('#importDate').datetimepicker({
            	format:'YYYY-MM-DD'
            });
            
            $('#plateDate').datetimepicker({
            	format:'YYYY-MM-DD'
            });
             
            $('#cylinder').change(function(){
            	//Disable the form to be submited
            	submitForm = false;
            	
            	//get brand current value (brandId)
            	var cylinder = $('#cylinder').val();
            	var model = $('#model').val();
            	var brand = $('#brand').val();
            	//build base url
				var getUrl = window.location;
				var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
				
				//request url
				var requestUrl = baseUrl + "/peticion/servicio/modelo/"+model+"/marca/"+brand+"/cilindraje/"+cylinder;
				console.log(requestUrl);
				
	            // Make the request
				$.ajax({
					type: "GET",
					url: requestUrl,
					success: function(vehicleServices) {
						// Clear model fields container
						$('#vehicleService').empty();
					
						//for each model append a new option in the select
						vehicleServices.forEach(function(vehicleService){
							$('#vehicleService').append(vehicleService);
							
						});
						
						 //Get model current value
						var model = $('#model').val();
						
						//get brand current value (brandId)
		            	var brand = $('#brand').val();
		            	
		            	 //Get vehicleService current value
						var vehicleService = $('#vehicleService').val();
						
						 //Get cylinders current value
						var cylinder = $('#cylinder').val();
		            	
						//build new request url
						var requestUrl = baseUrl + "/peticion/combustible/modelo/"+model+"/marca/"+brand+"/cilindraje/"+cylinder+"/servicio/"+vehicleService;
						console.log(requestUrl);
						
			            // Make the request
						$.ajax({
							type: "GET",
							url: requestUrl,
							success: function(fuelTypes) {
								// Clear cylinder fields container
								$('#fuelType').empty();
						
								//for each model append a new option in the select
								fuelTypes.forEach(function(fuelType){
									$('#fuelType').append(fuelType);
									
								});
								
							},
							error: function(e) {
								console.log('error');
								console.log(e);
							}
						});
									
							},
							error: function(e) {
								console.log('error');
								console.log(e);
							}
							
							
				});
				//Enable the form to be submited
            	submitForm = true;
				
	           
            });
            $('#cylinder').trigger('change');
            
            //when vehicleService changes update fuelTypes
             $('#vehicleService').change(function(){
            	
            	//Disable the form to be submited
            	submitForm = false;
            	
            	//Get model current value
				var model = $('#model').val();
				
				//get brand current value (brandId)
            	var brand = $('#brand').val();
            	
            	 //Get vehicleService current value
				var vehicleService = $('#vehicleService').val();
				
				 //Get cylinders current value
				var cylinder = $('#cylinder').val();
            	
            	//build base url
				var getUrl = window.location;
				var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
				
				//build new request url
				var requestUrl = baseUrl + "/peticion/combustible/modelo/"+model+"/marca/"+brand+"/cilindraje/"+cylinder+"/servicio/"+vehicleService;
				console.log(requestUrl);
            	
	            // Make the request
				$.ajax({
					type: "GET",
					url: requestUrl,
					success: function(fuelTypes) {
						// Clear cylinder fields container
						$('#fuelType').empty();
						//for each model append a new option in the select
						fuelTypes.forEach(function(fuelType){
							$('#fuelType').append(fuelType);
							
						});
						
					},
					error: function(e) {
						console.log('error');
						console.log(e);
					}
				});
	           //Enable the form to be submited
            	submitForm = true;

            	//Trigger itself so new changes to vehicleClass can be applied
            	$('#fuelType').trigger('change');
            });
            $('#vehicleService').trigger('change');
			
			//when fuelType changes update vehicleClass
             $('#fuelType').change(function(){
            	
            	//Disable the form to be submited
            	submitForm = false;
            	
            	//Get model current value
				var model = $('#model').val();
				
				//get brand current value (brandId)
            	var brand = $('#brand').val();
            	
            	 //Get vehicleService current value
				var vehicleService = $('#vehicleService').val();
				
				 //Get cylinders current value
				var cylinder = $('#cylinder').val();
            	
            	//Get fuelTypes current value
            	var fuelType = $('#fuelType').val();

            	//build base url
				var getUrl = window.location;
				var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
				
				//build new request url
				var requestUrl = baseUrl + "/peticion/clases/modelo/"+model+"/marca/"+brand+"/cilindraje/"+cylinder+"/servicio/"+vehicleService+"/combustible/"+fuelType;
				console.log(requestUrl);
            	
	            // Make the request
				$.ajax({
					type: "GET",
					url: requestUrl,
					success: function(vehicleClasses) {
						// Clear vehicle classes container
						$('#vehicleClass').empty();

						//for each model append a new option in the select
						vehicleClasses.forEach(function(vehicleClass){
							$('#vehicleClass').append(vehicleClass);
							
						});
						
					},
					error: function(e) {
						console.log('error');
						console.log(e);
					}
				});
	           //Enable the form to be submited
            	submitForm = true;
            });
            $('#fuelType').trigger('change');
           
        });
    </script>
@stop  