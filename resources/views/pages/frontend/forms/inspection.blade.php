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
			{!!Form::hidden('fasecoldaCode',$fasecoldaCode,array('id' => 'fasecoldaCode'))!!}
			{!!Form::hidden('fasecoldaValue',$fasecoldaValue,array('id' => 'fasecoldaValue'))!!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group">
					<label class="col-md-3 padding-top-1">Placa</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('plate',$serviceRequest->basicData->plate,['placeholder' => 'Placa', 'class' =>'form-control']) !!}
					</div>
					<label class="col-md-3 padding-top-1">Referencia 1</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('referenceId1',$firstReferences,$inspection->first_reference_id,array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Referencia 2</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('referenceId2',$secondReferences,$inspection->second_reference_id,array('class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Valor Fasecolda</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('fasecoldaValueMirror',$fasecoldaValue,['disabled', 'class' =>'form-control', 'id' => 'fasecoldaValueMirror']) !!} 
					</div>
					<label class="col-md-3 padding-top-1">Código Fasecolda</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('fasecoldaCodeMirror',$fasecoldaCode,['placeholder' => 'Código Fasecolda', 'class' =>'form-control','disabled','id' => 'fasecoldaCodeMirror']) !!} 
					</div>
					<label class="col-md-3 padding-top-1">Valoración Visual</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::select('visualValueId',$visualValueSelect,null,array('id'=>'visualValue','class' => 'form-control'))!!}
					</div>
					<label class="col-md-3 padding-top-1">Descuento</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('discount',$inspection->discount,['placeholder' => 'Descuento', 'class' =>'form-control']) !!} 
					</div>
					<label class="col-md-3 padding-top-1">Kilometraje</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('mileage',$inspection->mileage,['placeholder' => 'Kilometraje', 'class' =>'form-control']) !!} 
					</div>
					<label class="col-md-3 padding-top-1">Aprobación</label>
					<div class="col-md-3 padding-top-1">
						{!! Form::text('approval',$inspection->approval,['placeholder' => 'Aprobación', 'class' =>'form-control']) !!} 
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
						@foreach($visualValues as $visualValue)
							<div id="visual-value-{{$visualValue->id}}" style="display: none;">
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
					@foreach($novelties as $novelty)
						<div class="col-md-9">{{$novelty->name}}</div>
						<div class="col-md-3">{!! Form::checkbox('novelty-'.$novelty->id,null,$novelty->selected) !!}</div>
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