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
			{!!Form::open(array('route' => 'request/complementary-data','files'=>true)) !!}
			{!!Form::hidden('serviceRequestId',$serviceRequestId)!!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group">
					<label class="col-md-4 padding-top-1">Turno</label>
					<label class="col-md-4 padding-top-1">Marca</label>
					<label class="col-md-4 padding-top-1">Linea</label>
					<div class="col-md-4">
						{!! Form::text('turn',$complementaryData->turn,['placeholder' => 'Turno', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-4">
						{!! Form::select('brandId',$brands,$basicData->brand_id,array('class' => 'form-control','id' => 'brand'))!!}
					</div>
					<div class="col-md-4">
						{!! Form::text('line',$complementaryData->line,['placeholder' => 'Linea', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-4 padding-top-1">Cilindrada</label>
					<label class="col-md-4 padding-top-1">Servicio</label>
					<label class="col-md-4 padding-top-1">Carrocería</label>
					<div class="col-md-4">
						{!! Form::select('cylinderId',$cylinders,$complementaryData->cylinder_id,['class' =>'form-control','id' => 'cylinder']) !!}
					</div>
					<div class="col-md-4">
						{!! Form::select('serviceId',$services,$complementaryData->service_id,array('class' => 'form-control'))!!}
					</div>
					<div class="col-md-4">
						{!! Form::text('bodywork',$complementaryData->bodywork,['placeholder' => 'Carrocería', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Tipo Carrocería</label>
					<label class="col-md-3 padding-top-1">Combustible</label>
					<label class="col-md-3 padding-top-1">Capacidad Kg/PSj</label>
					<label class="col-md-3 padding-top-1">Modelo</label>
					<div class="col-md-3">
						{!! Form::text('bodyworkType',$complementaryData->bodywork_type,['placeholder' => 'Tipo Carrocería', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-3">
            
						{!! Form::select('fuelTypeId',$fuelTypes,$complementaryData->fuel_type_id,array('class' => 'form-control'))!!}
					</div>
					<div class="col-md-3">
						{!! Form::text('capacity',$complementaryData->capacity,['placeholder' => 'Capacidad Kg/PSj', 'class' =>'form-control']) !!}
					</div>
					
					<div class="col-md-3">
						{!! Form::select('model',$models,$basicData->model,array('id'=>'model','class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Color</label>
					<label class="col-md-3 padding-top-1">Nuevo Color</label>
					<label class="col-md-6 padding-top-1">Declaración Importación</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('colorId',$colors,$complementaryData->color_id,array('class' => 'form-control'))!!}
					</div>
					{!!Form::open(array('route' => 'request/complementary-data/add-color')) !!}
						{!!Form::hidden('serviceRequestId',$serviceRequestId)!!}
						<div class="col-md-3 padding-top-1">
							
							{!! Form::text('name',null,['placeholder' => 'Nuevo Color', 'class' =>'form-control']) !!} 
						</div>
					{!!Form::close()!!}
					<div class="col-md-6 padding-top-1">
						{!! Form::text('importDeclaration',$complementaryData->import_declaration,['placeholder' => 'Declaración Importación', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Número Motor</label>
					<label class="col-md-3 padding-top-1">Número Serie</label>
					<label class="col-md-6 padding-top-1">Número Chasis</label>
					<div class="col-md-3">
						{!! Form::text('engineNumber',$complementaryData->engine_number,['placeholder' => 'Número Motor', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::text('serialNumber',$complementaryData->serial_number,['placeholder' => 'Número Serie', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-6">
						{!! Form::text('chassisNumber',$complementaryData->chassis_number,['placeholder' => 'Número Chasis', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-6 padding-top-1">Fecha Importación</label>
					<label class="col-md-6 padding-top-1">Fecha Matricula</label>
					<div class="col-md-12" style="display: inline-flex;">
						<div class="col-md-6 input-group date" id='importDate'>
							{!!Form::text('importDate',$complementaryData->import_date,array('placeholder' => 'Fecha Importación', 'class' => 'form-control')) !!}<span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
							
						</div>
						<div class="col-md-6 input-group date" id='plateDate'>
							{!! Form::text('plateDate',$complementaryData->plate_date,['placeholder' => 'Fecha Matricula', 'class' =>'form-control']) !!}<span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
						</div>
					</div>	
					<label class="col-md-3 padding-top-1">Observación</label>
					<div class="col-md-9  padding-top-1">
						{!! Form::textarea('observation',$complementaryData->observation,['class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Sede</label>
					<label class="col-md-3 padding-top-1">Solicitado Por:</label>
					<label class="col-md-3 padding-top-1">Asegurado</label>
					<label class="col-md-3 padding-top-1">Intermediario</label>
					<div class="col-md-3">
						{!! Form::text('headquarters',$complementaryData->headquarters,['placeholder' => 'Sede', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::text('requestedBy',$complementaryData->requested_by,['placeholder' => 'Solicitado Por:', 'class' =>'form-control']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::text('insured',$complementaryData->insured,['placeholder' => 'Asegurado', 'class' =>'form-control']) !!}
					</div>
					
					<div class="col-md-3">
						{!! Form::text('intermediary',$complementaryData->intermediary,['placeholder' => 'Intermediario', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Imagenes</label>
					<div class="col-md-3 padding-top-1">{!! Form::file('primaryImage') !!}{!! Form::file('secondaryImage') !!}</div>
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
            
            $('#brand').change(function(){
            	
            	//get brand current value (brandId)
            	var brand = $('#brand').val();
            	
            	//build base url
				var getUrl = window.location;
				var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
				
				//request url
				var requestUrl = baseUrl + "/peticion/modelos/"+brand;
				// console.log(requestUrl);
				
	            // Make the request
				$.ajax({
					type: "GET",
					url: requestUrl,
					success: function(models) {
						// Clear model fields container
						$('#model').empty();
						// console.log('xxxx');
						// console.log(models);
						//for each model append a new option in the select
						models.forEach(function(model){
							$('#model').append(model);
							
						});
						
						 //Get model current value
						var model = $('#model').val();
						
						//get brand current value (brandId)
		            	var brand = $('#brand').val();
		            	
						//build new request url
						var requestUrl = baseUrl + "/peticion/cilindrajes/modelo/"+model+"/marca/"+brand;
						console.log(requestUrl);
						
			            // Make the request
						$.ajax({
							type: "GET",
							url: requestUrl,
							success: function(cylinders) {
								// Clear cylinder fields container
								$('#cylinder').empty();
								console.log('yyyy');
								console.log(cylinders);
								console.log('xxxx');
								//for each model append a new option in the select
								cylinders.forEach(function(cylinder){
									$('#cylinder').append(cylinder);
									
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
            
            //when model changes update cylinders
             $('#model').change(function(){
            	
            	//Get model current value
				var model = $('#model').val();
				
				//get brand current value (brandId)
            	var brand = $('#brand').val();
            	
            	//build base url
				var getUrl = window.location;
				var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            	
				//build new request url
				var requestUrl = baseUrl + "/peticion/cilindrajes/modelo/"+model+"/marca/"+brand;
				console.log(requestUrl);
				
	            // Make the request
				$.ajax({
					type: "GET",
					url: requestUrl,
					success: function(cylinders) {
						// Clear cylinder fields container
						$('#cylinder').empty();
						console.log('yyyy');
						console.log(cylinders);
						console.log('xxxx');
						//for each model append a new option in the select
						cylinders.forEach(function(cylinder){
							$('#cylinder').append(cylinder);
							
						});
						
					},
					error: function(e) {
						console.log('error');
						console.log(e);
					}
				});
	           
            });
            
							
            
        });
    </script>
@stop  