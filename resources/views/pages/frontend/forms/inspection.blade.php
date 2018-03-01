@extends('layouts.frontend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Inspección</h3>
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
			{!!Form::open(array('files'=>true)) !!}
			{!!Form::hidden('serviceRequestId',$serviceRequest->id, array('id' => 'serviceRequestId'))!!}
			{!!Form::hidden('fasecoldaCode',$fasecoldaCode,array('id' => 'fasecoldaCode'))!!}
			{!!Form::hidden('fasecoldaValue',$fasecoldaValue,array('id' => 'fasecoldaValue'))!!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group">
					<div class="row">
						<label class="col-md-3 padding-top-1">Placa</label>
						<div class="col-md-3 padding-top-1">
							{{$serviceRequest->basicData->plate}}
							{!!Form::hidden('plate',$serviceRequest->basicData->plate)!!}
						</div>
						<label class="col-md-3 padding-top-1">Referencia 1</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::select('referenceId1',$firstReferences,$inspection->first_reference_id,array('class' => 'form-control', 'id' =>'firstReference'))!!}
						</div>
					</div>
					<div class="row">
						<label class="col-md-3 padding-top-1">Referencia 2</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::select('referenceId2',$secondReferences,$inspection->second_reference_id,array('class' => 'form-control','id' => 'secondReference'))!!}
						</div>
						<label class="col-md-3 padding-top-1">Valor Fasecolda</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('fasecoldaValueMirror',$fasecoldaValue,['disabled', 'class' =>'form-control', 'id' => 'fasecoldaValueMirror']) !!} 
						</div>
					</div>
					<div class="row">
						<label class="col-md-3 padding-top-1">Código Fasecolda</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('fasecoldaCodeMirror',$fasecoldaCode,['placeholder' => 'Código Fasecolda', 'class' =>'form-control','disabled','id' => 'fasecoldaCodeMirror']) !!} 
						</div>
						<label class="col-md-3 padding-top-1">Descuento</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('discount',$inspection->discount,['placeholder' => 'Descuento', 'class' =>'form-control']) !!} 
							<div class="red">{{$errors->first('discount')}}</div>
						</div>
					</div>
					<div class="row">
						<label class="col-md-3 padding-top-1">Kilometraje</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('mileage',$inspection->mileage,['placeholder' => 'Kilometraje', 'class' =>'form-control']) !!} 
							<div class="red">{{$errors->first('mileage')}}</div>
							
						</div>
						<label class="col-md-3 padding-top-1">Aprobación</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::select('approval',['Aprobado' => 'Aprobado', 'Rechazado' => 'Rechazado'],$inspection->approval,array('class' => 'form-control'))!!}
						</div>
					</div>
					<h3 class="col-md-12 padding-top-1" align="center">Carga Fotos</h3>
					<div class="col-md-3 padding-top-1">{!! Form::file('image1') !!}</div>
					<div class="col-md-3 padding-top-1">{!! Form::file('image2') !!}</div>
					<div class="col-md-3 padding-top-1">{!! Form::file('image3') !!}</div>
					<div class="col-md-3 padding-top-1">{!! Form::file('image4') !!}</div>
					<div class="col-md-3 padding-top-1">{!! Form::file('image5') !!}</div>
					<div class="col-md-3 padding-top-1">{!! Form::file('image6') !!}</div>
					
					<h3 class="col-md-12 padding-top-1" align="center">Valoración visual</h3>
					<ul class="nav nav-tabs">
						@foreach($visualValues as $visualValue)
							<li><a data-toggle="tab" class="black" href="#visual-value-{{$visualValue->id}}">{{$visualValue->name}}</a></li>
						@endforeach
					</ul>
					<div id="visualValueFieldsContainer" class="col-md-12 tab-content">
						@foreach($visualValues as $visualValue)
							<div id="visual-value-{{$visualValue->id}}" class="tab-pane fade">
								<h3 class="col-md-12 padding-top-1" align="center">{{$visualValue->name}}</h3>
								@foreach($visualValue->visualValueFields as $visualValueField)
									<label class="col-md-3 padding-top-1">{{$visualValueField->name}}</label>
									<div class="col-md-3 padding-top-1">
										<select name="{{$visualValue->name}}-{{$visualValueField->name}}">
											@foreach($visualValueField->visualValueFieldValues as $visualValueFieldValue)
												<option value="{{$visualValueFieldValue->id}}">{{$visualValueFieldValue->name}}</option>
											@endforeach
										</select>
									</div>
								@endforeach
							</div>
						@endforeach
					</div>
					<h3 class="col-md-12 padding-top-1" align="center">Accesorios</h3>
					<label class="col-md-3 padding-top-1">Tipo</label>
					<label class="col-md-3 padding-top-1">Marca/Referencia</label>
					<label class="col-md-3 padding-top-1">Valor</label>
					<label class="col-md-3 padding-top-1">Cantidad</label>
					<div id="accessoriesContainer">
					@foreach($accessories as $i => $accessory)
						<div class="col-md-3 padding-top-1">
							{!! Form::text('accessories['.$i.'][type]',$accessory->type,['placeholder' => 'Tipo', 'class' =>'form-control']) !!} 
						</div>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('accessories['.$i.'][brand]',$accessory->reference,['placeholder' => 'Marca/Referencia', 'class' =>'form-control']) !!} 
						</div>
						<div class="col-md-3 padding-top-1">
							{!! Form::text('accessories['.$i.'][value]',$accessory->value,['placeholder' => 'Valor', 'class' =>'form-control']) !!} 
						</div>
						<div class="col-md-3 padding-top-1">
							{!! Form::number('accessories['.$i.'][amount]',$accessory->amount,['placeholder' => 'Cantidad', 'class' =>'form-control']) !!} 
						</div>
					@endforeach
					</div>
					<div class="col-md-12">
						<div id="addAccesoryButton" class="col-md-3 padding-top-1" align="center">
							<a class="btn btn-danger btn-block">Agregar Accesorio</a>
						</div>
					</div>
					<h3 class="col-md-12 padding-top-1" align="center">Novedades</h3>
					<!-- <div class="col-md-12">paginas: {{$noveltiesPages}}
					resto: {{$noveltiesRest}}
					conteo: {{$noveltiesCount}}
					paginacion: {{$noveltiesPagination}}
					</div> -->
					<div id="novelties">
						@foreach($novelties as $novelty)
							<div class="page-row">
								<div class="col-md-9">{{$novelty->name}}</div>
								<div class="col-md-3">{!! Form::checkbox('novelty-'.$novelty->id,null,$novelty->selected) !!}</div>
							</div>
						@endforeach
					</div>
					
					
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
	{!!Html::script('/js/jquery.easyPaginate.js')!!}
	<script type="text/javascript">
		$(document).ready(function(){
			
			$('#firstReference').change(function(){
	            // Visual value id
				var firstReference = $('#firstReference').val();
				var serviceRequestId = $('#serviceRequestId').val();
				var getUrl = window.location;
				var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
				var requestUrl = baseUrl + "/referencia/"+firstReference+"/solicitud/"+serviceRequestId;
				console.log(requestUrl);
				
	            // Get visual value fields
				$.ajax({
					type: "GET",
					url: requestUrl,
					success: function(models) {
						// Clear visual value fields container
						$('#secondReference').empty();
						console.log('xxxx');
						console.log(models);
						models.forEach(function(model){
							$('#secondReference').append(model);
							
						});
						$('#secondReference').trigger('change');	
						
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
            
            $('#firstReference').trigger('change');
			
			
			//Update the fasecolda code and the fasecolda value
			$('#secondReference').change(function(){
	            // Visual value id
	            var firstReference = $('#firstReference').val();
				var secondReference = $('#secondReference').val();
				var serviceRequestId = $('#serviceRequestId').val();
				var getUrl = window.location;
				var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
				var requestUrl = baseUrl + "/fasecolda/referencia1/"+firstReference+"/referencia2/"+secondReference+"/solicitud/"+serviceRequestId;
				console.log(requestUrl);
				
	            // Get visual value fields
				$.ajax({
					type: "GET",
					url: requestUrl,
					success: function(fasecolda) {
						// Clear visual value fields container
						console.log('xxxx');
						console.log(fasecolda);
						document.getElementById('fasecoldaCodeMirror').value = fasecolda['code'];
						document.getElementById('fasecoldaCode').value = fasecolda['code'];
						document.getElementById('fasecoldaValue').value = fasecolda['value'];
						document.getElementById('fasecoldaValueMirror').value = fasecolda['value'];
						
							
						
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
            
            $('#secondReference').trigger('change');
			
			// Pagination
			
			var itemsCount = {{$noveltiesCount }};
			var noveltiesPagination = {{$noveltiesPagination}};
			// var selector = {{$novelties}};
			// $("div.holder").jPages({
			//     containerID : "itemContainer"
			//   });
			
		    $('#novelties').easyPaginate({
		        paginateElement: '.page-row',
		        elementsPerPage: noveltiesPagination,
		        effect: 'climb'
		    });

			
			var i = {{$accessoriesCount}};
			$('#addAccesoryButton').click(function(){
				$('#accessoriesContainer').append(''+
					'<div class="col-md-3 padding-top-1">'+
						'<input placeholder="Tipo" class="form-control" name="accessories['+i+'][type]" type="text"> '+
					'</div>'+
					'<div class="col-md-3 padding-top-1">'+
						'<input placeholder="Marca/Referencia" class="form-control" name="accessories['+i+'][brand]" type="text"> '+
					'</div>'+
					'<div class="col-md-3 padding-top-1">'+
						'<input placeholder="Valor" class="form-control" name="accessories['+i+'][value]" type="text"> '+
					'</div>'+
					'<div class="col-md-3 padding-top-1">'+
						'<input placeholder="Cantidad" class="form-control" name="accessories['+i+'][amount]" type="number"> '+
					'</div>');
					// Update counter
					i++;
			});
			
			
			$('#visualValue').change(function(){
				
				// Visual value id
				var visualValueId = $('#visualValue').val();
				
				// Hide all visual values
				$('[id^=visual-value-]').hide();
				
				// Show selected visual value
				$('#visual-value-'+visualValueId).show();
			});
		});
	</script>
@stop