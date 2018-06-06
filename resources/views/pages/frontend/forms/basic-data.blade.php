@extends('layouts.frontend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Datos B&aacute;sicos</h3>
		<!-- @if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li> $error </li>
		            @endforeach
		        </ul>
		    </div>
		@endif -->

		<fieldset>
			{!!Form::open(array('id'=> 'basicDataForm', 'files'=>true)) !!}
			{!!Form::hidden('serviceRequestId',$serviceRequestId)!!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group">
					<div class="row">
						<label class="col-md-3 padding-top-1">Placa</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('plate',$basicData->plate,['placeholder' => 'Placa', 'class' =>'form-control']) !!}
							<div class="red">{{$errors->first('plate')}}</div>
						</div>
						<label class="col-md-3 padding-top-1">Marca</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::select('brandId',$brands,$basicData->brand_id,array('id' => 'brandId', 'class' => 'form-control'))!!}
						</div>
					</div>
					<div class="row">
						<label class="col-md-3 padding-top-1">Nombre</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('firstName',$basicData->first_name,['placeholder' => 'Nombre', 'class' =>'form-control']) !!}
							<div class="red">{{$errors->first('firstName')}}</div>
						</div>
						<label class="col-md-3 padding-top-1">Apellido</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('lastName',$basicData->last_name,['placeholder' => 'Apellido', 'class' =>'form-control']) !!}
							<div class="red">{{$errors->first('lastName')}}</div>
						</div>
					</div>
					<div class="row">
						<label class="col-md-3 padding-top-1">Documento</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('document',$basicData->document,['placeholder' => 'Documento', 'class' =>'form-control']) !!}
							<div class="red">{{$errors->first('document')}}</div>
						</div>
						<label class="col-md-3 padding-top-1">Lugar Expedición</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('expeditionPlace',$basicData->expedition_place,['placeholder' => 'Lugar Expedición', 'class' =>'form-control']) !!}
							<div class="red">{{$errors->first('expeditionPlace')}}</div>
						</div>
					</div>
					<div class="row">
						<label class="col-md-3 padding-top-1">Teléfono</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('phone',$basicData->phone,['placeholder' => 'Teléfono', 'class' =>'form-control']) !!}
							<div class="red">{{$errors->first('phone')}}</div>
						</div>
						<!-- <label class="col-md-3 padding-top-1">Tipo de Usuario</label> -->
						<div class="col-md-3 padding-top-1" style="display: none;">
							{!! Form::select('userType',$userTypes,$basicData->user_type,array('class' => 'form-control'))!!}
						</div>
						<label class="col-md-3 padding-top-1">Servicio</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::select('serviceId',$services,$serviceId,array('class' => 'form-control'))!!}
						</div>
					</div>
					<div class="row">
						<label class="col-md-3 padding-top-1">Modelo</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::select('model',$models,$basicData->model,array('id' => 'model', 'class' => 'form-control'))!!}
						</div>
						<label class="col-md-3 padding-top-1">Finalización SOAT</label>
						<div class="col-md-3  padding-top-1 input-group date" id='finalizationSoat'>
							{!!Form::text('finalizationSoat',$basicData->finalization_soat,array('placeholder' => 'Finalización SOAT', 'class' => 'form-control')) !!}<span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
						</div>
					</div>
					<div class="row">
						<div class="red col-md-3 col-md-offset-9">{{$errors->first('finalizationSoat')}}</div>
					</div>
					<div class="row">
						<label class="col-md-3 padding-top-1">Privacidad de datos</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::file('dataPrivacy') !!}
							<div class="red">{{$errors->first('dataPrivacy')}}</div>
						</div>
					</div>
					<div class="col-md-12">
						
						<div class="col-md-4 padding-top-1">
							<a class="btn btn-primary btn-block" href="{{route('/')}}">Regresar</a>
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
			var submitForm = true;
			$('#basicDataForm').submit(function(e){
				if (submitForm) {
					console.log("SUBMIT");
				} else {
					e.preventDefault();
					console.log("PREVENTED");
				}
			});
			$('#finalizationSoat').datetimepicker({
            	format:'YYYY-MM-DD'
            });
            
            $('#entryDate').datetimepicker({
            	format:'DD/MM/YYYY'
            });
            
            $('#brandId').change(function(){
            	// Disable form to be submited
            	submitForm = false;
	            // Visual value id
				var brandId = $('#brandId').val();
				var getUrl = window.location;
				var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
				var requestUrl = baseUrl + "/peticion/modelos/"+brandId;
				console.log(requestUrl);
				
	            // Get visual value fields
				$.ajax({
					type: "GET",
					url: requestUrl,
					success: function(models) {
						// Clear visual value fields container
						$('#model').empty();
						console.log('xxxx');
						console.log(models);
						models.forEach(function(model){
							$('#model').append(model);
							
						});
							
						// Enable form to be submited
            			submitForm = true;
						// for each(var model in models) {
						// // 	// Add label to value fields
						// 	console.log(model);
						// }	
						
					},
					error: function(e) {
						console.log('error');
						console.log(e);
					}
				});
            });
            
            $('#brandId').trigger('change');
        });
    </script>
@stop  