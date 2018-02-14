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
						{!! Form::select('plate',$pendingPlates,old('plate'),array('class' => 'form-control', 'id' => 'pendingPlates'))!!}
					</div>
					<div class="col-md-3">
						{!! Form::select('serviceId',$services,old('serviceId'),array('class' => 'form-control','id' => 'currentServices'))!!}
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
						{!! Form::text('plate',null,['placeholder' => 'Placa', 'class' =>'form-control','id'=>'plateSearch']) !!}
					</div>
					<div class="col-md-3">
						{!! Form::select('serviceId',$services,old('serviceId'),array('class' => 'form-control','id'=>'oldServices'))!!}
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
            
            $('#pendingPlates').change(function(){
            	// console.log('ENTRO');
	            // Visual value id
				var plate = $('#pendingPlates').val();
				var getUrl = window.location;
				var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
				var requestUrl = baseUrl + "/peticion/servicios/actuales/placa/"+plate;
				console.log(requestUrl);
				
	            // Get visual value fields
				$.ajax({
					type: "GET",
					url: requestUrl,
					success: function(services) {
						// Clear visual value fields container
						$('#currentServices').empty();
						console.log('xxxx');
						console.log(services);
						services.forEach(function(currentServices){
							$('#currentServices').append(currentServices);
							
						});
							
						
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
			// console.log('ANTES');
			$('#pendingPlates').trigger('change');
			// console.log('DESPUES');
			
			$('#plateSearch').on('input', function() {
				var plate = $(this).val();
				var getUrl = window.location;
				var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
				var requestUrl = baseUrl + "/peticion/servicio/placa/"+plate;
				console.log(requestUrl);
				 // Get visual value fields
				$.ajax({
					type: "GET",
					url: requestUrl,
					success: function(services) {
						// Clear visual value fields container
						$('#oldServices').empty();
						console.log('xxxx');
						console.log(services);
						services.forEach(function(oldServices){
							$('#oldServices').append(oldServices);
							
						});
							
						
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
        });
    </script>
@stop  
