@extends('layouts.frontend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Inspección</h3>
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
			{!!Form::open(array('route' => 'request/inspection','files'=>true)) !!}
			{!!Form::hidden('serviceRequestId',$serviceRequest->id)!!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group">
					<label class="col-md-3 padding-top-1">Placa</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('plate',$serviceRequest->basicData->plate,['placeholder' => 'Placa', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Referencia 1</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('referenceId1',$references,null,array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Referencia 2</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('referenceId2',$references,null,array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Valor Fasecolda</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('fasecoldaValue',$inspection->fasecolda_value,['placeholder' => 'Valor Fasecolda', 'class' =>'form-control']) !!} 
					</div>
					<label class="col-md-3 padding-top-1">Código Fasecolda</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('fasecoldaCode',null,['placeholder' => 'Código Fasecolda', 'class' =>'form-control']) !!} 
					</div>
					<label class="col-md-3 padding-top-1">Valoración Visual</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('visualValueId',$visualValues,null,array('id'=>'visualValue','class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Descuento</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('discount',null,['placeholder' => 'Descuento', 'class' =>'form-control']) !!} 
					</div>
					<label class="col-md-3 padding-top-1">Kilometraje</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('mileage',null,['placeholder' => 'Kilometraje', 'class' =>'form-control']) !!} 
					</div>
					<label class="col-md-3 padding-top-1">Aprobación</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('approval',null,['placeholder' => 'Aprobación', 'class' =>'form-control']) !!} 
					</div>
					
					<h3 class="col-md-12 padding-top-1" align="center">Carga Fotos</h3>
					<div class="col-md-3 padding-top-1">{!! Form::file('image1') !!}</div>
					<div class="col-md-3 padding-top-1">{!! Form::file('image2') !!}</div>
					<div class="col-md-3 padding-top-1">{!! Form::file('image3') !!}</div>
					<div class="col-md-3 padding-top-1">{!! Form::file('image4') !!}</div>
					<div class="col-md-3 padding-top-1">{!! Form::file('image5') !!}</div>
					<div class="col-md-3 padding-top-1">{!! Form::file('image6') !!}</div>
					
					<h3 class="col-md-12 padding-top-1" align="center">Valoración visual</h3>
					<div id="visualValueFieldsContainer" class="col-md-12">
						@foreach($visualValueFields as $visualValueField)
						<label class="col-md-3 padding-top-1">{{$visualValueField->name}}</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::select("data['.$visualValueField->id.']['.$visualValueField->visualValueFieldValue->id.'][value]'",$visualValueField->visualValueFieldValues->pluck('name','id'),null,array('class' => 'form-control'))!!}
						</div>
						@endforeach
					</div>
					<h3 class="col-md-12 padding-top-1" align="center">Accesorios</h3>
					<label class="col-md-3 padding-top-1">Tipo</label>
					<label class="col-md-3 padding-top-1">Marca/Referencia</label>
					<label class="col-md-3 padding-top-1">Valor</label>
					<label class="col-md-3 padding-top-1">Cantidad</label>
					<div id="accesoriesContainer">
						<div class="col-md-3 padding-top-1">
							{!! Form::text('accesories[0][type]',null,['placeholder' => 'Tipo', 'class' =>'form-control']) !!} 
						</div>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('accesories[0][brand]',null,['placeholder' => 'Marca/Referencia', 'class' =>'form-control']) !!} 
						</div>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('accesories[0][value]',null,['placeholder' => 'Valor', 'class' =>'form-control']) !!} 
						</div>
						<div class="col-md-3 padding-top-1">
							{!! Form::number('accesories[0][amount]',null,['placeholder' => 'Cantidad', 'class' =>'form-control']) !!} 
						</div>
					</div>
					<div class="col-md-12">
						<div id="addAccesoryButton" class="col-md-3 padding-top-1" align="center">
							<a class="btn btn-danger btn-block">Agregar Accesorio</a>
						</div>
					</div>
					<h3 class="col-md-12 padding-top-1" align="center">Novedades</h3>
					@foreach($novelties as $novelty)
						<div class="col-md-9">{{$novelty->name}}</div>
						<div class="col-md-3">{!! Form::checkbox($novelty->id,null) !!}</div>
					@endforeach
					<div class="col-md-12" >
					<div class="col-md-3 padding-top-1" align="center">
						<a class="btn btn-primary btn-block" href="{{route('request/return/',$serviceRequest->id)}}">Regresar</a>
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
		$(document).ready(function(){
			var i = 1;
			$('#addAccesoryButton').click(function(){
				$('#accesoriesContainer').append(''+
					'<div class="col-md-3 padding-top-1">'+
						'<input placeholder="Tipo" class="form-control" name="accesories['+i+'][type]" type="text"> '+
					'</div>'+
					'<div class="col-md-3 padding-top-1">'+
						'<input placeholder="Marca/Referencia" class="form-control" name="accesories['+i+'][brand]" type="text"> '+
					'</div>'+
					'<div class="col-md-3 padding-top-1">'+
						'<input placeholder="Valor" class="form-control" name="accesories['+i+'][value]" type="text"> '+
					'</div>'+
					'<div class="col-md-3 padding-top-1">'+
						'<input placeholder="Cantidad" class="form-control" name="accesories['+i+'][amount]" type="number"> '+
					'</div>');
					// Update counter
					i++;
			});
			
			
			$('#visualValue').change(function(){
				
				// Visual value id
				var visualValueId = $('#visualValue').val();
				var getUrl = window.location;
				var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
				var requestUrl = baseUrl + "/peticion/campos-valoracion-visual/"+visualValueId;
				console.log(requestUrl);
				
				// Get visual value fields
				// $.ajax({
				// 	type: "GET",
				// 	url: requestUrl,
				// 	success: function(visualValueFields) {
				// 		// Clear visual value fields container
				// 		$('#visualValueFieldsContainer').empty();
				// 		for (i = 0; i < visualValueFields.length; ++i) {
				// 			// Add label to value fields
				// 			$('#visualValueFieldsContainer').append('<label class="col-md-3 padding-top-1">'+visualValueFields[i].name+'</label>');
							
				// 			// Add select to value fields
				// 			$('#visualValueFieldsContainer').append('<div class="col-md-3 padding-top-1">');
				// 			$('#visualValueFieldsContainer').append('<select class="form-control" id="data['+visualValueFields[i].id+']" name="data['+visualValueFields[i].id+'][value]">');
				// 			// console.log(visualValueFields[i].visual_value_field_values);
				// 			for (j = 0; j < visualValueFields[i].visual_value_field_values.length; ++j) {
				// 				// $('#data['+visualValueFields[i].id+']').append('<option value="2">defor fuerte</option>');
								
				// 				$('#data['+visualValueFields[i].id+']').append('<option value="'+j+'">xxxx</option>');
				// 			}
							
							
				// 			// <div class="col-md-3 padding-top-1">
				// 			// 	<select class="form-control" name="data['.1.']['.->id.'][value]'"><option value="1">malo</option><option value="2">defor fuerte</option><option value="3">defor media</option><option value="4">repar mala</option><option value="5">repar buena</option><option value="6">sumido</option><option value="7">bueno</option></select>
				// 			// </div>
							
							
				// 		}
						
				// 	},
				// 	error: function(e) {
				// 		console.log('error');
				// 		console.log(e);
				// 	}
				// });
			});
		});
	</script>
@stop