
<!DOCTYPE html>
<html>
	<head>
<style type="text/css">
	.black{
		 border: 1px solid black;
	}
	.right{
		text-align: right;
	}
	.left{
		text-align: left;
	}
	.float-left{
		float: left;
	}
	.center{
		text-align: center;
	}
	.left-20{
		padding-left: 20px;
	}
	.top-10{
		padding-top: 10px;
	}
	.top-7 {
		padding-top: 7px;
	}
	
	.tiny {
		font-size: 11px;
	}
	.break{
		page-break-after: always;
	}
	.top-50{
		margin-top: 50px;
	}
</style>
	</head>
	<body style="font-size: 14px; line-height: 1.42857143;">
		
		
		@if($serviceRequest->basicData)
			<table class="black center tiny">
				<tr class="black">
					<th colspan="6" class="black center">Datos Basicos</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center">Placa:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->basicData->plate}}</th>
					<th colspan="1" class="black center">Nombre:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->basicData->first_name}} {{$serviceRequest->basicData->last_name}}</th>
					<th colspan="1" class="black center">Marca:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->basicData->brand->name}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center">Modelo:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->basicData->model}}</th>
					<th colspan="1" class="black center">Documento:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->basicData->document}}</th>
					<th colspan="1" class="black center">Lugar Expedición:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->basicData->expedition_place}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center">Teléfono:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->basicData->phone}}</th>
					<th colspan="1" class="black center">Tipo de Usuario:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">@if($serviceRequest->basicData->user_type == 'INTERNAL')Interno @elseif($serviceRequest->basicData->user_type == 'EXTERNAL') Externo @endif</th>
					<th colspan="1" class="black center">Finalización SOAT:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->basicData->finalization_soat}}</th>
				</tr>
			</table>
		@endif
		
		@if($serviceRequest->complementaryData)
			<table class="black center tiny" style="margin-top: 50px;">
				<tr class="black">
					<th colspan="6" class="black center">Datos Complementarios</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center" >Turno:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->turn}}</th>
					<th colspan="1" class="black center" >Linea:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->line}}</th>
					<th colspan="1" class="black center" >Cilindrada:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->cylinder->name}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center" >Servicio:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->vehicleService->name}}</th>
					<th colspan="1" class="black center">Carroceria:</th>
					<th colspan="1" class="black center"style="font-weight: normal;"">{{$serviceRequest->complementaryData->bodywork}}</th>
					<th colspan="1" class="black center" >Tipo Carroceria:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->bodywork_type}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center" >Combustible:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->fuelType->name}}</th>
					<th colspan="1" class="black center" >Capacidad Ks/PSj:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->capacity}}</th>
					<th colspan="1" class="black center" >Color:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->color->name}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center" >Declaración Importación:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->import_declaration}}</th>
					<th colspan="1" class="black center" >Número Motor:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->engine_number}}</th>
					<th colspan="1" class="black center" >Número Serie:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->serial_number}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center" >Número Chasis:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->chassis_number}}</th>
					<th colspan="1" class="black center" >Fecha Importación:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->import_date}}</th>
					<th colspan="1" class="black center" >Fecha Matricula:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->plate_date}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center" >Observaciones:</th>
					<th colspan="5" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->observation}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center" >Sede:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->headquarters}}</th>
					<th colspan="1" class="black center" >Intermediario:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->intermediary}}</th>
					<th colspan="1" class="black center" >Solicitado por:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->requested_by}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center" >Asegurado:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->insured}}</th>
					<th colspan="4" class="black center"></th>
				</tr>
			</table>
		@endif
		
		@if($serviceRequest->inspection)
			
			<table class="black center tiny" style="margin-top: 50px;">
				<tr class="black">
					<th colspan="6" class="black center">Inspección</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center">Descuento:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->inspection->discount}}</th>
					<th colspan="1" class="black center">Kilometraje:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->inspection->mileage}}</th>
					<th colspan="1" class="black center">Aprobación:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->inspection->approval}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center">Referencia:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->inspection->fasecolda->firstReference->name}}</th>
					<th colspan="1" class="black center">Referencia2:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->inspection->fasecolda->secondReference->name}}</th>
					<th colspan="1" class="black center">Valor Fasecolda:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->inspection->fasecoldaYearValue->value}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center">Código Fasecolda:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->inspection->fasecolda->code}}</th>
					<th colspan="4" class="black center"></th>
				</tr>
		</table>
		
		<div>
				
				@foreach($serviceRequest->inspection->visualValues as $i => $visualValue)
					@if($i>2)
					@if($i == 7)
						</div>
						</div>
						<div>
						<div> 
					@endif
						@if($i%2>0)
							
						@endif
						
						<table class="black center tiny" style="margin-top: 20px;">
							<tr class="black center">
								<th colspan="10" class="black center">{{$visualValue->name}}</th>
							</tr>
							<tr style="" class="black center">
							@foreach($visualValue->visualValueFields as $j => $visualValueField)
								@if($j%5 == 0 && $j>1 || $j == 5)
									</tr>
									<tr>
								@endif
								<td style="" class="black center">
									<b>{{$visualValueField->name}}</b>
								</td>
								<td style="" class="black center">
									{{$visualValueField->valueName}}
									<!-- -{{$visualValueField->value}} -->
								</td>
							@endforeach
							</tr>
							<tr>
								<td class="black">TOTAL</td>
								<td class="black" colspan="11">{{$visualValue->total}}</td>
							</tr>
						</table>
					@endif
				@endforeach
			</div>
			<div style="margin-top: 50px;">
				<table class="black tiny float-left" style="margin-right: 50px;">
					<tr class="black">
						<th class="black">OBSERVACIONES</th>
					</tr>
					@foreach($serviceRequest->inspection->novelties as $novelty)
						<tr class="black">
							<td class="black">{{$novelty->name}}</td>
						</tr>
					@endforeach
				</table>
				<table class="black tiny float-left">
					<tr class="black">
						<th colspan="5" class="black">ACCESORIOS</th>
					</tr>
					<tr>
						<td class="black">TIPO</td>
						<td class="black">MARCA/REFERENCIA</td>
						<td class="black">VALOR</td>
						<td class="black">CANTIDAD</td>
						<td class="black">TOTAL</td>
					</tr>
					@foreach($serviceRequest->inspection->accessories as $accessory)
						<tr class="black">
							<td class="black">{{$accessory->type}}</td>
							<td class="black">{{$accessory->reference}}</td>
							<td class="black">{{$accessory->value}}</td>
							<td class="black">{{$accessory->amount}}</td>
							<td class="black">{{$accessory->total}}</td>
						</tr>
					@endforeach
						<tr>
							<th class="black">TOTAL</th>
							<td colspan="4" class="black">{{$serviceRequest->inspection->totalAccesories}}</td>
						</tr>
				</table>
			</div>
		</div>
		@endif
		
		@if($serviceRequest->recording)		
			<table class="black center tiny top-50">
				<tr class="black">
					<th colspan="6" class="black center">Regrabación</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center">Clase:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->recording->vehicleClass->name}}</th>
					<th colspan="1" class="black center">Parte regrabada:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->recording->re_recorded_part}}</th>
					<th colspan="1" class="black center">Ciudad Revisión:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->complementaryData->serial_number}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center">Ciudad:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->recording->city}}</th>
					<th colspan="1" class="black center">Tec. Identificaciones:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->recording->inspector->name}}</th>
					<th colspan="1" class="black center">Observaciones:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->recording->notes}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center">Expide Secretaria:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->recording->secretary_expedition}}</th>
					<th colspan="1" class="black center">Descripcion:</th>
					<th colspan="3" class="black center" style="font-weight: normal;">{{$serviceRequest->recording->description}}</th>
				</tr>
			</table>
		@endif
		<!-- @if($serviceRequest->rtc)
			<table class="black center tiny top-50" style="margin-top: 200px;">
				<tr class="black">
					<th colspan="6" class="black center">RTC</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center">No Radicación:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->rtc->radication_number}}</th>
					<th colspan="1" class="black center">Clase:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->rtc->vehicleClass->name}}</th>
					<th colspan="1" class="black center">Datos de Revisión:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->rtc->review_data}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center">Lineas 1:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->rtc->line1}}</th>
					<th colspan="1" class="black center">Lineas 2:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->rtc->line2}}</th>
					<th colspan="1" class="black center">Lineas 3:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->rtc->line3}}</th>
				</tr>
				<tr class="black">
					<th colspan="1" class="black center">Tec. Identificaciones:</th>
					<th colspan="1" class="black center" style="font-weight: normal;">{{$serviceRequest->rtc->inspector->name}}</th>
					<th colspan="1" class="black center">Motivo:</th>
					<th colspan="3" class="black center" style="font-weight: normal;">{{$serviceRequest->rtc->reason}}</th>
				</tr>
			</table>
		@endif -->
				
		<div class="row padding-top-1">
				<!-- <label class="col-md-2 padding-top-1">Fotos</label> -->
				<div class="col-md-9 padding-top-1">
					<div class="row">
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->complementaryData->main_image)}}" target="_blank"><img style="max-width: 500px;" src="{{asset($serviceRequest->complementaryData->main_image)}}" class="img-responsive thumbnail"></a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->complementaryData->secondary_image)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->complementaryData->secondary_image)}}" class="img-responsive thumbnail">
							</a>
						</div>
					</div>
					@if($serviceRequest->inspection)
					<div class="row">
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->inspection->image1)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->inspection->image1)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->inspection->image2)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->inspection->image2)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->inspection->image3)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->inspection->image3)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->inspection->image4)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->inspection->image4)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->inspection->image5)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->inspection->image5)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->inspection->image6)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->inspection->image6)}}" class="img-responsive thumbnail">
							</a>
						</div>
					</div>
					@endif
					<!-- @if($serviceRequest->rtc)
					<div class="row">
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->image1)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->rtc->image1)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->image2)}}" target="_blank">
							<img  style="max-width: 500px;"src="{{asset($serviceRequest->rtc->image2)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->image3)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->rtc->image3)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->image4)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->rtc->image4)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->image5)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->rtc->image5)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->image6)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->rtc->image6)}}" class="img-responsive thumbnail">
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->back_card)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->rtc->back_card)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->front_card)}}" target="_blank">
							<img  style="max-width: 500px;"src="{{asset($serviceRequest->rtc->front_card)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->engine_file)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->rtc->engine_file)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->serial_file)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->rtc->serial_file)}}" class="img-responsive thumbnail">
							</a>
						</div>
						<div class="col-md-2">
							<a href="{{asset($serviceRequest->rtc->chassis_file)}}" target="_blank">
							<img style="max-width: 500px;" src="{{asset($serviceRequest->rtc->chassis_file)}}" class="img-responsive thumbnail">
							</a>
						</div>
					</div>
					@endif -->
				</div>
			</div>
		
		
		
<!-- 		<table class="black center tiny top-50">
			<tr class="black">
				<th colspan="6" class="black center">Inspección</th>
			</tr>
			<tr class="black">
				<th colspan="1" class="black center"></th>
				<th colspan="1" class="black center" style="font-weight: normal;"></th>
				<th colspan="1" class="black center"></th>
				<th colspan="1" class="black center" style="font-weight: normal;"></th>
				<th colspan="1" class="black center"></th>
				<th colspan="1" class="black center" style="font-weight: normal;"></th>
			</tr>
		</table> -->
		
		
		
		
		
		
		
		
	@if($serviceRequest->rtc)
			<table style="width: 100%; margin-left: 10%;">
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr>
					<td></td>
					<td class="left-20">
						Bogota D.C {{$serviceRequest->now}}<
					</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class="left-20 top-10">
						{{$serviceRequest->rtc->radication_number}}<
					</td>
					<td></td>
				</tr>
				<tr><td colspan="3"><p style="color: white;" style="color: white;">.</p></td></tr>
				<tr>
					<td colspan="2" class="right top-7">{{$serviceRequest->basicData->first_name}} {{$serviceRequest->basicData->last_name}}</td>
					
					<td class="right top-7">{{$serviceRequest->rtc->vehicleClass->name}}</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td class="right top-7">
						{{$serviceRequest->basicData->brand->name}}</tr>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td class="right top-7">{{$serviceRequest->complementaryData->line}}</td>
				</tr>
				<tr>
					<td class="right top-7">{{$serviceRequest->basicData->document}}</td>
					<td class="right top-7">BOGOTA D.C</td>
					<td class="right top-7">{{$serviceRequest->complementaryData->bodywork_type}}</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td class="right top-7">{{$serviceRequest->basicData->model}}</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td class="right top-7">{{$serviceRequest->complementaryData->color->name}}</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td class="right top-7">{{$serviceRequest->basicData->plate}}</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td class="right top-7">{{$serviceRequest->complementaryData->engine_number}}</td>
				</tr>
				<tr>
					<td>{{$serviceRequest->basicData->phone}}</td>
					<td></td>
					<td class="right top-7" >{{$serviceRequest->complementaryData->serial_number}}</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td class="right top-7">{{$serviceRequest->complementaryData->chassis_number}}</td>
				</tr>
				
				<tr><td colspan="3"><p style="color: white;" style="color: white;">.</p></td></tr>
				<tr><td colspan="3">{{$serviceRequest->rtc->review_data}}</td></tr>
				<tr><td colspan="3"><p style="color: white;" style="color: white;">.</p></td></tr>
				<tr><td colspan="3"><p style="color: white;" style="color: white;">.</p></td></tr>
				<tr><td colspan="3" style="text-align: left !important;">NO REGISTRA ANOTACIONES</td></tr>
				<tr><td colspan="3"><p style="color: white;" style="color: white;">.</p></td></tr>
				<tr>
					<td style="color: white;" style="color: white;">.</td>
					<td style="text-align: left !important;">PERSONAL</td>
					<td style="color: white;" style="color: white;">.</td>
				</tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr>
				<td>{{$serviceRequest->rtc->inspector->name}}</td>
				<td style="color: white;">.</td>
				<td style="text-align: center !important;">Jose D. Ibarra</td>
				</tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
			
			</table>
			<table  style="width: 100%; margin-left: 10%;">
				<tr>
					<td><img src="{{asset($serviceRequest->rtc->chassis_file)}}" style="max-width: 300px; max-height: 300px;"></td>
					<td><img src="{{asset($serviceRequest->rtc->serial_file)}}" style="max-width: 300px; max-height: 300px;"></td>
				</tr>
				<tr>
					<td><img src="{{asset($serviceRequest->rtc->engine_file)}}" style="max-width: 300px; max-height: 300px;"></td>
					<td><img src="{{asset($serviceRequest->rtc->front_card)}}" style="max-width: 300px; max-height: 300px;"></td>
				</tr>
			</table>
	@endif
	
	@if(isset($serviceRequest->recording))
			
			
			
		<table style="width: 100%; padding-left:15%; padding-right: 15%; text-align: left !important;">
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>

			<tr>
				<td colspan="4" style="text-align: left !important;">
					<p>Bogota D.C {{$serviceRequest->now}}</p>
				</td>
				
			</tr>
			<tr>
				<td colspan="4" style="text-align: left !important;">No. SCL 2853 -R</td>
				
			</tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr>
				<td colspan="4" style="text-align: left !important;">Señores:</td>
				
			</tr>
			<tr>
				<td colspan="4" style="text-align: left !important;">{{$serviceRequest->basicData->first_name}} {{$serviceRequest->basicData->last_name}}</td>
				
			</tr>
			<tr>
				<td colspan="4" style="text-align: left !important;">BOGOTA</td>
				
			</tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			
			<tr><td style="text-align: left !important;" colspan="4">Con toda atención me permito informarles que en nuestras instalaciones se efectuó la regrabación de {{$serviceRequest->recording->re_recorded_part}} del vehículo que a continuación se relaciona.</td></tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr>
				<th style="text-align: left !important;">CLASE:</th>
				<td style="text-align: left !important;">{{$serviceRequest->recording->vehicleClass->name}}</td>
				<th style="text-align: left !important;">COLOR:</th>
				<td style="text-align: left !important;">{{$serviceRequest->complementaryData->color->name}}</td>
			</tr>
			<tr>
				<th style="text-align: left !important;">MARCA</th>
				<td style="text-align: left !important;">{{$serviceRequest->basicData->brand->name}}</td>
				<th style="text-align: left !important;">PLACA</th>
				<td style="text-align: left !important;">{{$serviceRequest->basicData->plate}}</td>
			</tr>
			<tr>
				<th style="text-align: left !important;">LINEA</th>
				<td style="text-align: left !important;">{{$serviceRequest->complementaryData->line}}</td>
				<th style="text-align: left !important;">MOTOR</th>
				<td style="text-align: left !important;">{{$serviceRequest->complementaryData->engine_number}}</td>
			</tr>
			<tr>
				<th style="text-align: left !important;">SERIE</th>
				<td style="text-align: left !important;">{{$serviceRequest->complementaryData->serial_number}}</td>
				<th style="text-align: left !important;">MODELO</th>
				<td style="text-align: left !important;">{{$serviceRequest->basicData->model}}</td>
			</tr>
			<tr>
				<th style="text-align: left !important;">CHASIS</th>
				<td style="text-align: left !important;" colspan="3">{{$serviceRequest->complementaryData->chassis_number}}</td>
				
			</tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			
			<tr>
				<th style="text-align: left !important;" colspan="4">OBSERVACIONES:</th>
				
			</tr>
			<tr>
				<td style="text-align: left !important;" colspan="4">{{$serviceRequest->recording->notes}}</td>
			</tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			
			<tr>
				<td style="text-align: left !important;" colspan="4">La regrabación se efectúa a solicitud del interesado: {{$serviceRequest->basicData->first_name}} {{$serviceRequest->basicData->last_name}} Identificado con Cedula numero {{$serviceRequest->basicData->document}} reside en la dirección {{$serviceRequest->basicData->expedition_place}}, Telefono {{$serviceRequest->basicData->document}}, Motivo: {{$serviceRequest->recording->description}} </td>
			</tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
			
			<tr>
				<td colspan="2" style="text-align: center !important;"> {{$serviceRequest->recording->inspector->name}}</td>
				<td colspan="2" style="text-align: center !important;">JOSE D. IBARRA</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center !important;">Técnico en indentificación de automotores</td>
				<td colspan="2" style="text-align: center !important;">Gerente General</td>
			</tr>
		
		</table>
	@endif
	
	@if($serviceRequest->inspection)
		<div class="break">
			<table>
				<tr><td colspan="2" style="color: white;">.</td></tr>
				<tr><td colspan="2" style="color: white;">.</td></tr>
				<tr><td colspan="2" style="color: white;">.</td></tr>
				<tr><td colspan="2" style="color: white;">.</td></tr>
				<tr><th colspan="2" class="right"><h2>{{$serviceRequest->basicData->plate}}</h2></th></tr>
				<tr><td colspan="2" style="color: white;">.</td></tr>
				<tr><td colspan="2" style="color: white;">.</td></tr>
				<tr><td colspan="2" style="color: white;">.</td></tr>
				<tr><td colspan="2" style="color: white;">.</td></tr>
			</table>
			<div style="width: 50%;">
				<table class="black float-left tiny">
					<tr>
						<td colspan="2" class="black center">Marca</td>
						<th colspan="2" class="black center">{{$serviceRequest->basicData->brand->name}}</th>
					</tr>
					<tr style="" class="black center">
						<td colspan="2" class="black center">Linea</td>
						<th colspan="2" class="black center">{{$serviceRequest->complementaryData->line}}</th>
					</tr>
					<tr style="" class="black center">
						<td colspan="2" class="black center">Clase</td>
						<th colspan="2" class="black center">
							@if($serviceRequest->rtc)
								{{$serviceRequest->rtc->vehicleClass->name}}
							@endif
							@if(!$serviceRequest->rtc)
								N/A
							@endif
						</th>
					</tr>
					<tr style="" class="black center">
						<td class="black center">Modelo</td>
						<th class="black center">{{$serviceRequest->basicData->model}}</th>
						<td class="black center">Kilometraje</td>
						<th class="black center">{{$serviceRequest->inspection->mileage}}</th>
					</tr>
					<tr style="" class="black center">
						<td class="black center">Cilindraje</td>
						<th class="black center">{{$serviceRequest->complementaryData->cylinder->name}}</th>
						<td class="black center">Servicio</td>
						<th class="black center">{{$serviceRequest->complementaryData->vehicleService->name}}</th>
					</tr>
					<tr style="" class="black center">
						<td class="black center">Tipo Caja</td>
						<th class="black center">N/A</th>
						<td class="black center">Combustible</td>
						<th class="black center">{{$serviceRequest->complementaryData->fuelType->name}}</th>
					</tr>
					<tr style="" class="black center">
						<td class="black center">Color</td>
						<th colspan="3" class="black center">{{$serviceRequest->complementaryData->color->name}}</th>
					</tr>
					<tr style="" class="black center">
						<td class="black center">No. Motor</td>
						<th colspan="3" class="black center">{{$serviceRequest->complementaryData->engine_number}}</th>
					</tr>
					<tr style="" class="black center">
						<td class="black center">No. Serial</td>
						<th colspan="3" class="black center">{{$serviceRequest->complementaryData->serial_number}}</th>
					</tr>
					<tr style="" class="black center">
						<td class="black center">No. Chasis</td>
						<th colspan="3" class="black center">{{$serviceRequest->complementaryData->chassis_number}}</th>
					</tr>
					<tr style="" class="black center">
						<td colspan="2" class="black center">Código Fasecolda</td>
						<th colspan="2" class="black center">{{$serviceRequest->inspection->fasecolda->code}}</th>
					</tr>
					<tr style="" class="black center">
						<td colspan="2" class="black center">Valor Fasecolda</td>
						<th colspan="2" class="black center">{{$serviceRequest->inspection->fasecoldaYearValue->value}}</th>
					</tr>
					<tr style="" class="black center">
						<td colspan="2" class="black center">Valor Seipro</td>
						<th colspan="2" class="black center">{{$serviceRequest->inspection->fasecolda->code}}</th>
					</tr>
				</table>
			</div>
			<div style="width: 50%; padding-left: 400px;">
				<table class="float-left black tiny">
					<tr>
						<td class="black center">No. Inspección</td>
						<th class="black center">{{$serviceRequest->inspection->id}}</th>
						<td class="black center">No. Turno</td>
						<th class="black center">{{$serviceRequest->complementaryData->turn}}</th>
					</tr>
					<tr>
						<td class="black center">Aseguradora</td>
						<th colspan="3" class="black center">{{$serviceRequest->complementaryData->insured}}</th>
					</tr>
					<tr>
						<td class="black center">Sede</td>
						<th class="black center">{{$serviceRequest->complementaryData->headquarters}}</th>
						<td class="black center">Sucursal</td>
						<th class="black center">Bogota</th>
					</tr>
					<tr>
						<td class="black center">Intermediario</td>
						<th colspan="3" class="black center">{{$serviceRequest->complementaryData->intermediary}}</th>
					</tr>
					<tr>
						<td class="black center">Nombre Cliente</td>
						<th colspan="3" class="black center">{{$serviceRequest->basicData->first_name}} {{$serviceRequest->basicData->last_name}}</th>
					</tr>
					<tr>
						<td class="black center">Solicitado Por</td>
						<th colspan="3" class="black center">{{$serviceRequest->complementaryData->requested_by}}</th>
					</tr>
					<tr>
						<td class="black center">Identificación</td>
						<th class="black center">{{$serviceRequest->basicData->document}}</th>
						<td class="black center">Telefono</td>
						<th class="black center">{{$serviceRequest->basicData->phone}}</th>
					</tr>
					<tr>
						<td class="black center">Dirección</td>
						<th colspan="3" class="black center">N/A</th>
					</tr>
					<tr>
						<th class="black center">RESULTADO</th>
						<th colspan="3" class="black center">ESTANDAR</th>
					</tr>
				</table>
				
				<table style="width: 100%; padding-top:250px; padding-left: -400px;">
							
					<tr><td colspan="2" style="color: white;">.</td></tr>
					<tr><td colspan="2" style="color: white;">.</td></tr>
					<tr>
						<td><img  style="max-width: 300px; max-height: 200px;" src="{{asset($serviceRequest->complementaryData->main_image)}}"></td>
						<td><img  style="max-width: 300px; max-height: 200px;" src="{{asset($serviceRequest->complementaryData->secondary_image)}}"></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="break"> 
			@foreach($serviceRequest->inspection->visualValues as $i => $visualValue)
				@if($i<2)
				
					<table class="black center float-left tiny">
						<tr class="black center">
							<th colspan="4" class="black center">{{$visualValue->name}}</th>
						</tr>
						<tr style="" class="black center">
						@foreach($visualValue->visualValueFields as $j => $visualValueField)
							@if($j%2 == 0 && $j>1 || $j == 2)
								</tr>
								<tr>
							@endif
							<td style="" class="black center">
								{{$visualValueField->name}}
							</td>
							<td style="" class="black center">
								{{$visualValueField->valueName}}-{{$visualValueField->value}}
							</td>
						@endforeach
						</tr>
						<tr>
							<td class="black">TOTAL</td>
							<td class="black" colspan="3">{{$visualValue->total}}</td>
						</tr>
					</table>
				@endif
			@endforeach
		</div>
		<div class="break">
			<table style="width: 100%;">
				<tr>
					<td><img  style="max-width: 350px; max-height: 350px;" src="{{asset($serviceRequest->inspection->image1)}}"></td>
					<td><img  style="max-width: 350px; max-height: 350px;" src="{{asset($serviceRequest->inspection->image2)}}"></td>
				</tr>
				<tr>
					<td><img  style="max-width: 350px; max-height: 350px;" src="{{asset($serviceRequest->inspection->image3)}}"></td>
					<td><img  style="max-width: 350px; max-height: 350px;" src="{{asset($serviceRequest->inspection->image4)}}"></td>
				</tr>
				<tr>
					<td><img  style="max-width: 350px; max-height: 350px;" src="{{asset($serviceRequest->inspection->image5)}}"></td>
					<td><img  style="max-width: 350px; max-height: 350px;" src="{{asset($serviceRequest->inspection->image6)}}"></td>
				</tr>
			</table>
		</div>
		<div class="break">
			<table>
				<tr><td colspan="2" style="color: white;">.</td></tr>
				<tr><td colspan="2" style="color: white;">.</td></tr>
				<tr><td colspan="2" style="color: white;">.</td></tr>
				<tr><td colspan="2" style="color: white;">.</td></tr>
				<tr><th colspan="2" class="center"><h2>{{$serviceRequest->basicData->plate}}</h2></th></tr>
			</table>
			<div style="margin-top: -350px">
				
				@foreach($serviceRequest->inspection->visualValues as $i => $visualValue)
					@if($i>2)
					@if($i == 7)
						</div>
						</div>
						<div class="break">
						<div style="padding-top: -200px;"> 
					@endif
						@if($i%2>0)
							<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
						@endif
						
						<table class="black center float-left tiny">
							<tr class="black center">
								<th colspan="4" class="black center">{{$visualValue->name}}</th>
							</tr>
							<tr style="" class="black center">
							@foreach($visualValue->visualValueFields as $j => $visualValueField)
								@if($j%2 == 0 && $j>1 || $j == 2)
									</tr>
									<tr>
								@endif
								<td style="" class="black center">
									{{$visualValueField->name}}
								</td>
								<td style="" class="black center">
									{{$visualValueField->valueName}}-{{$visualValueField->value}}
								</td>
							@endforeach
							</tr>
							<tr>
								<td class="black">TOTAL</td>
								<td class="black" colspan="3">{{$visualValue->total}}</td>
							</tr>
						</table>
					@endif
				@endforeach
			</div>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			
			<table class="black tiny float-left">
				<tr class="black">
					<th class="black">OBSERVACIONES</th>
				</tr>
				@foreach($serviceRequest->inspection->novelties as $novelty)
					<tr class="black">
						<td class="black">{{$novelty->name}}</td>
					</tr>
				@endforeach
			</table>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			
			<table class="black tiny float-left">
				<tr class="black">
					<th colspan="5" class="black">ACCESORIOS</th>
				</tr>
				<tr>
					<td class="black">TIPO</td>
					<td class="black">MARCA/REFERENCIA</td>
					<td class="black">VALOR</td>
					<td class="black">CANTIDAD</td>
					<td class="black">TOTAL</td>
				</tr>
				@foreach($serviceRequest->inspection->accessories as $accessory)
					<tr class="black">
						<td class="black">{{$accessory->type}}</td>
						<td class="black">{{$accessory->reference}}</td>
						<td class="black">{{$accessory->value}}</td>
						<td class="black">{{$accessory->amount}}</td>
						<td class="black">{{$accessory->total}}</td>
					</tr>
				@endforeach
					<tr>
						<th class="black">TOTAL</th>
						<td colspan="4" class="black">{{$serviceRequest->inspection->totalAccesories}}</td>
					</tr>
			</table>
		</div>
	@endif
</body> 
</html>
 