@extends('layouts.frontend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Datos Complementarios</h3>
	<!-- 	@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif -->
		<fieldset>
			{!!Form::open(array('files'=>true)) !!}
			{!!Form::hidden('serviceRequestId',$serviceRequestId)!!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group">
				<div class="row">
					<label class="col-md-4 padding-top-1">Turno</label>
					<label class="col-md-4 visible-lg visible-md padding-top-1">Marca</label>
					<label class="col-md-4 visible-lg visible-md padding-top-1">Linea</label>
					<div class="col-md-4">
						{!! Form::text('turn',$complementaryData->turn,['placeholder' => 'Turno', 'class' =>'form-control']) !!}
						<div class="red">{{$errors->first('turn')}}</div>
					</div>
					<label class="col-md-4 hidden-lg hidden-md padding-top-1">Marca</label>
					<div class="col-md-4">
						{{$basicData->brand->name}}
						{!!Form::hidden('brand',$basicData->brand->id,['id' => 'brand']) !!}
					</div>
					<label class="col-md-4 hidden-lg hidden-md padding-top-1">Linea</label>
					<div class="col-md-4">
						{!! Form::text('line',$complementaryData->line,['placeholder' => 'Linea', 'class' =>'form-control']) !!}
						<div class="red">{{$errors->first('line')}}</div>
					</div>
				</div>
				<div class="row">
					<label class="col-md-4 padding-top-1">Cilindrada</label>
					<label class="col-md-4 visible-lg visible-md padding-top-1">Servicio</label>
					<label class="col-md-4 visible-lg visible-md padding-top-1">Carrocería</label>
					<div class="col-md-4">
						{!! Form::select('cylinderId',$cylinders,$complementaryData->cylinder_id,['class' =>'form-control','id' => 'cylinder']) !!}
					</div>
					<label class="col-md-4 hidden-lg hidden-md padding-top-1">Servicio</label>
					<div class="col-md-4">
						{!! Form::select('serviceId',$services,$complementaryData->service_id,array('class' => 'form-control','id' => 'vehicleService'))!!}
					</div>
					<label class="col-md-4 hidden-lg hidden-md padding-top-1">Carrocería</label>
					<div class="col-md-4">
						{!! Form::text('bodywork',$complementaryData->bodywork,['placeholder' => 'Carrocería', 'class' =>'form-control']) !!}
						<div class="red">{{$errors->first('bodywork')}}</div>
					</div>
				</div>
				<div class="row">
					<label class="col-md-3 padding-top-1">Tipo Carrocería</label>
					<label class="col-md-3 visible-lg visible-md padding-top-1">Combustible</label>
					<label class="col-md-3 visible-lg visible-md padding-top-1">Capacidad Kg/PSj</label>
					<label class="col-md-3 visible-lg visible-md padding-top-1">Modelo</label>
					<div class="row margin-0">
						<div class="col-md-3">
							{!! Form::text('bodyworkType',$complementaryData->bodywork_type,['placeholder' => 'Tipo Carrocería', 'class' =>'form-control']) !!}
							<div class="red">{{$errors->first('bodyworkType')}}</div>
						</div>
						<label class="col-md-3 hidden-lg hidden-md padding-top-1">Combustible</label>
						<div class="col-md-3">
	            
							{!! Form::select('fuelTypeId',$fuelTypes,$complementaryData->fuel_type_id,array('class' => 'form-control','id'=>'fuelType'))!!}
						</div>
						<label class="col-md-3 hidden-lg hidden-md padding-top-1">Capacidad Kg/PSj</label>
						<div class="col-md-3">
							{!! Form::text('capacity',$complementaryData->capacity,['placeholder' => 'Capacidad Kg/PSj', 'class' =>'form-control']) !!}
							<div class="red">{{$errors->first('capacity')}}</div>
						</div>
						<label class="col-md-3 hidden-lg hidden-md padding-top-1">Modelo</label>
						<div class="col-md-3">
							{{$basicData->model}}
							{!!Form::hidden('model',$basicData->model,['id' => 'model']) !!}
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="row margin-0">
						<label class="col-md-3 padding-top-1">Color</label>
						<label class="col-md-3 visible-lg visible-md padding-top-1">Nuevo Color</label>
						<label class="col-md-6 visible-lg visible-md padding-top-1">Declaración Importación</label>
					</div>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('colorId',$colors,$complementaryData->color_id,array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 hidden-lg hidden-md padding-top-1">Nuevo Color</label>
					<div class="col-md-3 padding-top-1">
						
						{!! Form::text('newColor',null,['placeholder' => 'Nuevo Color', 'class' =>'form-control']) !!} 
					</div>
					<label class="col-md-6 hidden-lg hidden-md padding-top-1">Declaración Importación</label>
					<div class="col-md-6 padding-top-1">
						{!! Form::text('importDeclaration',$complementaryData->import_declaration,['placeholder' => 'Declaración Importación', 'class' =>'form-control']) !!}
						<div class="red">{{$errors->first('importDeclaration')}}</div>
					</div>
				</div>
				<div class="row">
					<label class="col-md-3 padding-top-1">Número Motor</label>
					<label class="col-md-3 visible-lg visible-md padding-top-1">Número Serie</label>
					<label class="col-md-6 visible-lg visible-md padding-top-1">Número Chasis</label>
					<div class="col-md-3">
						{!! Form::text('engineNumber',$complementaryData->engine_number,['placeholder' => 'Número Motor', 'class' =>'form-control']) !!}
						<div class="red">{{$errors->first('engineNumber')}}</div>
					</div>
					<label class="col-md-3 hidden-lg hidden-md padding-top-1">Número Serie</label>
					<div class="col-md-3">
						{!! Form::text('serialNumber',$complementaryData->serial_number,['placeholder' => 'Número Serie', 'class' =>'form-control']) !!}
						<div class="red">{{$errors->first('serialNumber')}}</div>
					</div>
					<label class="col-md-6 hidden-lg hidden-md padding-top-1">Número Chasis</label>
					<div class="col-md-6">
						{!! Form::text('chassisNumber',$complementaryData->chassis_number,['placeholder' => 'Número Chasis', 'class' =>'form-control']) !!}
						<div class="red">{{$errors->first('chassisNumber')}}</div>
					</div>
				</div>
				<div class="row">
					<label class="col-md-6 col-sm-12 padding-top-1">Fecha Importación</label>
					<!-- <label class="col-md-6 col-sm-12 padding-top-1">Fecha Matricula</label> -->
					<label class="col-md-6 col-sm-12 visible-lg visible-md padding-top-1">Fecha Matricula</label>
					<div class="col-md-12 datepickers">
						<div class="col-md-6 input-group date" id='importDate'>
							{!!Form::text('importDate',$complementaryData->import_date,array('placeholder' => 'Fecha Importación', 'class' => 'form-control')) !!}<span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
							
						</div>
						<!-- <div class="red">{{$errors->first('importDate')}}</div> -->
						<label class="col-md-6 col-sm-12 hidden-lg hidden-md padding-top-1">Fecha Matricula</label>
						<div class="col-md-6 input-group date" id='plateDate'>
							{!! Form::text('plateDate',$complementaryData->plate_date,['placeholder' => 'Fecha Matricula', 'class' =>'form-control']) !!}<span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
						</div>
				                <!-- <div class="red">{{$errors->first('plateDate')}}</div> -->
					</div>	
				</div>
				<div class="row">
					<label class="col-md-3 padding-top-1">Observación</label>
					<div class="col-md-9  padding-top-1">
						{!! Form::textarea('observation',$complementaryData->observation,['class' =>'form-control']) !!}
						<div class="red">{{$errors->first('observation')}}</div>
					</div>
				</div>
				<div class="row">
					<label class="col-md-3 padding-top-1">Sede</label>
					<label class="col-md-3 visible-lg visible-md padding-top-1">Solicitado Por:</label>
					<label class="col-md-3 visible-lg visible-md padding-top-1">Asegurado</label>
					<label class="col-md-3 visible-lg visible-md padding-top-1">Intermediario</label>
					<div class="col-md-3">
						{!! Form::text('headquarters',$complementaryData->headquarters,['placeholder' => 'Sede', 'class' =>'form-control']) !!}
						<div class="red">{{$errors->first('headquarters')}}</div>
					</div>
					<label class="col-md-3 hidden-lg hidden-md padding-top-1">Solicitado Por:</label>
					
					<div class="col-md-3">
						{!! Form::text('requestedBy',$complementaryData->requested_by,['placeholder' => 'Solicitado Por:', 'class' =>'form-control']) !!}
						<div class="red">{{$errors->first('requestedBy')}}</div>
					</div>
					<label class="col-md-3 hidden-lg hidden-md padding-top-1">Asegurado</label>
					
					<div class="col-md-3">
						{!! Form::text('insured',$complementaryData->insured,['placeholder' => 'Asegurado', 'class' =>'form-control']) !!}
						<div class="red">{{$errors->first('insured')}}</div>
					</div>
					<label class="col-md-3 hidden-lg hidden-md padding-top-1">Intermediario</label>
					
					<div class="col-md-3">
						{!! Form::text('intermediary',$complementaryData->intermediary,['placeholder' => 'Intermediario', 'class' =>'form-control']) !!}
						<div class="red">{{$errors->first('intermediary')}}</div>
					</div>
				</div>
				<div class="row">
				<div class="row">
					<label class="col-md-3 padding-top-1">Imagenes</label>
					<div class="col-md-3 padding-top-1">{!! Form::file('primaryImage') !!}{!! Form::file('secondaryImage') !!}
					<div class="red">{{$errors->first('primaryImage')}}</div></div>
				</div>
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
			
			$('#importDate').datetimepicker({
            	format:'YYYY-MM-DD'
            });
            
            $('#plateDate').datetimepicker({
            	format:'YYYY-MM-DD'
            });
            
            
            $('#cylinder').change(function(){
            	
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
						// console.log('xxxx');
						// console.log(models);
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
								// console.log('yyyy');
								// console.log(cylinders);
								// console.log('xxxx');
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
				
	           
            });
            $('#cylinder').trigger('change');
            
            //when vehicleService changes update fuelTypes
             $('#vehicleService').change(function(){
            	
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
	           
            });
            $('#vehicleService').trigger('change');
							
            
        });
    </script>
@stop  