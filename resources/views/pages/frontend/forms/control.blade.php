@extends('layouts.frontend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center">Control</h3>
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
		
			@if($serviceRequest->basicData)
			<h3>Datos Basicos</h3>
				<div class="row">
					<label class="col-md-2 padding-top-1">Placa:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->basicData->plate}}</div> 
					<label class="col-md-2 padding-top-1">Nombre:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->basicData->first_name}} {{$serviceRequest->basicData->last_name}}</div>
					<label class="col-md-2 padding-top-1">Marca:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->basicData->brand->name}}</div> 
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Modelo:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->basicData->model}}</div> 
					<label class="col-md-2 padding-top-1">Documento:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->basicData->document}}</div> 
					<label class="col-md-2 padding-top-1">Lugar Expedición:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->basicData->expedition_place}}</div>
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Teléfono:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->basicData->phone}}</div> 
					<label class="col-md-2 padding-top-1">Tipo de Usuario:</label>
					<div class="col-md-2 padding-top-1">@if($serviceRequest->basicData->user_type == 'INTERNAL')Interno @elseif($serviceRequest->basicData->user_type == 'EXTERNAL') Externo @endif</div> 
					<label class="col-md-2 padding-top-1">Finalización SOAT:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->basicData->finalization_soat}}</div> 
				</div>
			@endif
			@if($serviceRequest->complementaryData)
			<h3>Datos Complementarios</h3>
				<div class="row">
					<label class="col-md-2 padding-top-1">Turno:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->turn}}</div> 
					<label class="col-md-2 padding-top-1">Linea:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->line}}</div> 
					<label class="col-md-2 padding-top-1">Cilindrada:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->cylinder->name}}</div> 
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Servicio:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->vehicleService->name}}</div> 
					<label class="col-md-2 padding-top-1">Carroceria:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->bodywork}}</div> 
					<label class="col-md-2 padding-top-1">Tipo Carroceria:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->bodywork_type}}</div> 
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Combustible:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->fuelType->name}}</div> 
					<label class="col-md-2 padding-top-1">Capacidad Ks/PSj:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->capacity}}</div>
					<label class="col-md-2 padding-top-1">Color:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->color->name}}</div>
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Declaración Importación:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->import_declaration}}</div>
					<label class="col-md-2 padding-top-1">Número Motor:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->engine_number}}</div>
					<label class="col-md-2 padding-top-1">Número Serie:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->serial_number}}</div>
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Número Chasis:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->chassis_number}}</div>
					<label class="col-md-2 padding-top-1">Fecha Importación:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->import_date}}</div>
					<label class="col-md-2 padding-top-1">Fecha Matricula:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->plate_date}}</div>
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Observaciones:</label>
					<div class="col-md-9 padding-top-1">{{$serviceRequest->complementaryData->observation}}</div>
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Sede:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->headquarters}}</div>
					<label class="col-md-2 padding-top-1">Solicitado por:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->requested_by}}</div>
					<label class="col-md-2 padding-top-1">Asegurado:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->insured}}</div>
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Intermediario:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->intermediary}}</div>
				</div>
			@endif
			
			@if($serviceRequest->inspection)
				<h3>Inspección</h3>
				<div class="row">
					<label class="col-md-2 padding-top-1">Descuento:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->inspection->discount}}</div> 
					<label class="col-md-2 padding-top-1">Kilometraje:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->inspection->mileage}}</div> 
					<label class="col-md-2 padding-top-1">Aprobación:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->inspection->approval}}</div> 
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Referencia:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->inspection->fasecolda->firstReference->name}}</div>
					<label class="col-md-2 padding-top-1">Referencia2:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->inspection->fasecolda->secondReference->name}}</div>
					<label class="col-md-2 padding-top-1">Valor Fasecolda:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->inspection->fasecoldaYearValue->value}}</div>
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Código Fasecolda:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->inspection->fasecolda->code}}</div>
				</div>
				<h3>Valoración visual</h3>
				@foreach($visualValues as $visualValue)
					<div class="row">
						<h4 class="col-md-12">{{$visualValue->name}}</h4>
					</div>
						<div class="row"> 
						@foreach($visualValue->visualValueFields as $i => $visualValueField)
							@if($i%3 == 0)
								</div>
								<div class="row">
							@endif
							<label class="col-md-2">{{$visualValueField->name}}</label> 
							<div class="col-md-2"> {{$visualValueField->valueName}}</div>
							@if($i%3 == 0)
							@endif
						@endforeach
					</div>
				@endforeach
				
			@endif
			
			@if($serviceRequest->recording)
				<h3>Regrabación</h3>
				<div class="row">
					<label class="col-md-2 padding-top-1">Clase:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->recording->vehicleClass->name}}</div> 
					<label class="col-md-2 padding-top-1">Parte regrabada:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->recording->re_recorded_part}}</div>
					<label class="col-md-2 padding-top-1">Ciudad Revisión:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->complementaryData->serial_number}}</div>
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Ciudad:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->recording->city}}</div>
					<label class="col-md-2 padding-top-1">Tec. Identificaciones:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->recording->inspector->name}}</div>
					<label class="col-md-2 padding-top-1">Observaciones:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->recording->notes}}</div>
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Expide Secretaria:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->recording->secretary_expedition}}</div>
					<label class="col-md-2 padding-top-1">Descripcion:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->recording->description}}</div>
				</div>
				<div class="row">
				</div>
			@endif
			
			@if($serviceRequest->rtc)
				<h3>RTC</h3>
				<div class="row">
					<label class="col-md-2 padding-top-1">No Radicación:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->rtc->radication_number}}</div> 
					<label class="col-md-2 padding-top-1">Clase:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->rtc->vehicleClass->name}}</div>
					<label class="col-md-2 padding-top-1">Datos de Revisión:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->rtc->review_data}}</div>
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Lineas 1:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->rtc->line1}}</div>
					<label class="col-md-2 padding-top-1">Lineas 2:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->rtc->line2}}</div>
					<label class="col-md-2 padding-top-1">Lineas 3:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->rtc->line3}}</div>
				</div>
				<div class="row">
					<label class="col-md-2 padding-top-1">Tec. Identificaciones:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->rtc->inspector->name}}</div>
					<label class="col-md-2 padding-top-1">Motivo:</label>
					<div class="col-md-2 padding-top-1">{{$serviceRequest->rtc->reason}}</div>
				</div>
				<div class="row">
				</div>
			@endif
			<div class="row padding-top-1">
				<label class="col-md-2 padding-top-1">Fotos</label>
				<div class="col-md-9 padding-top-1">
					<div class="row">
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->complementaryData->main_image)}}" target="_blank"><img src="{{asset($serviceRequest->complementaryData->main_image)}}" class="img-responsive thumbnail"></a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->complementaryData->secondary_image)}}" target="_blank">
							<img src="{{asset($serviceRequest->complementaryData->secondary_image)}}" class="img-responsive thumbnail">
							</a>
						</div>
					</div>
					@if($serviceRequest->inspection)
					<div class="row">
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->inspection->image1)}}" target="_blank">
							<img src="{{asset($serviceRequest->inspection->image1)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->inspection->image2)}}" target="_blank">
							<img src="{{asset($serviceRequest->inspection->image2)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->inspection->image3)}}" target="_blank">
							<img src="{{asset($serviceRequest->inspection->image3)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->inspection->image4)}}" target="_blank">
							<img src="{{asset($serviceRequest->inspection->image4)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->inspection->image5)}}" target="_blank">
							<img src="{{asset($serviceRequest->inspection->image5)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->inspection->image6)}}" target="_blank">
							<img src="{{asset($serviceRequest->inspection->image6)}}" class="img-responsive thumbnail">
							</a>
						</div>
					</div>
					@endif
					@if($serviceRequest->rtc)
					<div class="row">
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->image1)}}" target="_blank">
							<img src="{{asset($serviceRequest->rtc->image1)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->image2)}}" target="_blank">
							<img src="{{asset($serviceRequest->rtc->image2)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->image3)}}" target="_blank">
							<img src="{{asset($serviceRequest->rtc->image3)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->image4)}}" target="_blank">
							<img src="{{asset($serviceRequest->rtc->image4)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->image5)}}" target="_blank">
							<img src="{{asset($serviceRequest->rtc->image5)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->image6)}}" target="_blank">
							<img src="{{asset($serviceRequest->rtc->image6)}}" class="img-responsive thumbnail">
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->back_card)}}" target="_blank">
							<img src="{{asset($serviceRequest->rtc->back_card)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->front_card)}}" target="_blank">
							<img src="{{asset($serviceRequest->rtc->front_card)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->engine_file)}}" target="_blank">
							<img src="{{asset($serviceRequest->rtc->engine_file)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->serial_file)}}" target="_blank">
							<img src="{{asset($serviceRequest->rtc->serial_file)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->chassis_file)}}" target="_blank">
							<img src="{{asset($serviceRequest->rtc->chassis_file)}}" class="img-responsive thumbnail">
							</a>
						</div>
					</div>
					@endif
				</div>
			</div>
			{!!Form::open(array('files'=>true)) !!}
			{!!Form::hidden('serviceRequestId',$serviceRequest->id)!!}
					<div class="row">
						<label class="col-md-2 padding-top-1">Estado</label>
						<div class="col-md-2 padding-top-1">
							{!! Form::select('status',['APPROVED'=> 'Aprobado','REJECTED' => 'Rechazado'],null,array('class' => 'form-control','id' => 'status'))!!}
						</div>
					</div>
					<div class="row" id ="rejectReasonContainer">
						<label class="col-md-2 padding-top-1">Motivo del rechazo</label>
						<div class="col-md-9 padding-top-1" >
							{!! Form::textarea('rejectReason',null,['placeholder' => 'Motivo del rechazo', 'class' =>'form-control','id' =>'rejectReason']) !!}
						</div>
					</div>
					<div class="row" >
						<div class="col-md-2 offset-6 padding-top-1" align="center">
							<a class="btn btn-primary btn-block" href="{{route('request/return/',$serviceRequest->id)}}">Regresar</a>
						</div>
						<div class="col-md-2 padding-top-1" align="center">
							<input class="btn btn-success btn-block" type="submit" name="" value="Imprimir">
						</div>
						<div class="col-md-3 offset-6 padding-top-1" align="center">
							<a class="btn btn-warning btn-block" href="{{route('/')}}">Volver al Centro de Solicitudes</a>
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
			
			$('#status').change(function(){
				// Visual value id
				var status = $('#status').val();
				if(status == 'APPROVED'){
					
					$('#rejectReasonContainer').hide();
					$('#rejectReason').val('');
				}else{
					$('#rejectReasonContainer').show();
					
				}
				
			});
			$('#status').trigger('change');
		});
	</script>
@stop