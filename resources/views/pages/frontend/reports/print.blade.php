
<!DOCTYPE html>
<html>
	<head>
		<style>
		table, th, td {
		    border: 1px solid white;
		    border-collapse: collapse;
		    padding: 0px;
		}
		th, td {
		    padding: 0em;
		    text-align: right !important;
		   
		}
		</style>
	</head>
	<body style="font-size: 14px; line-height: 1.42857143;">
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
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr>
					<td></td>
					<td style="text-align: left !important;">
						Bogota D.C {{$serviceRequest->now}}<
					</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td style="text-align: left !important;">
						{{$serviceRequest->rtc->radication_number}}<
					</td>
					<td></td>
				</tr>
				<tr><td colspan="3"><p style="color: white;" style="color: white;">.</p></td></tr>
				<tr>
					<td></td>
					<td>{{$serviceRequest->basicData->first_name}} {{$serviceRequest->basicData->last_name}}</td>
					<td>{{$serviceRequest->rtc->vehicleClass->name}}</td>
				</tr>
				<tr><td colspan="3" style="color: white;">.</td></tr>
				<tr>
					<td></td>
					<td></td>
					<td style="padding: 5px;">
						{{$serviceRequest->basicData->brand->name}}</tr>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td style="padding: 5px;">{{$serviceRequest->complementaryData->line}}</td>
				</tr>
				<tr>
					<td>{{$serviceRequest->basicData->document}}</td>
					<td>BOGOTA D.C</td>
					<td style="padding: 5px;">{{$serviceRequest->complementaryData->bodywork_type}}</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td style="padding: 5px;">{{$serviceRequest->basicData->model}}</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td style="padding: 5px;">{{$serviceRequest->complementaryData->color->name}}</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td style="padding: 5px;">{{$serviceRequest->basicData->plate}}</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td style="padding: 5px;">{{$serviceRequest->complementaryData->engine_number}}</td>
				</tr>
				<tr>
					<td>{{$serviceRequest->basicData->phone}}</td>
					<td></td>
					<td style="padding: 5px;">{{$serviceRequest->complementaryData->serial_number}}</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td style="padding: 5px;">{{$serviceRequest->complementaryData->chassis_number}}</td>
				</tr>
				
				<tr><td colspan="3"><p style="color: white;" style="color: white;">.</p></td></tr>
				<tr><td colspan="3" style="text-align: center !important;">{{$serviceRequest->rtc->review_data}}</td></tr>
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
			
			
			
		<table style="width: 100%; margin-left: 20%; text-align: left !important;">
			<tr><td colspan="4" style="color: white;">.</td></tr>
			<tr><td colspan="4" style="color: white;">.</td></tr>
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
				<td style="text-align: left !important;" colspan="4">La regrabación se efectúa a solicitud del interesado: {{$serviceRequest->basicData->first_name}} {{$serviceRequest->basicData->last_name}} Identificado con Cedula numero {{$serviceRequest->basicData->document}} reside en la dirección {{$serviceRequest->basicData->expedition_place}}, Telefono {{$serviceRequest->basicData->document}}, Motivo: POR PERDIDA </td>
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
		<table>
			<tr><td colspan="2" style="color: white;">.</td></tr>
			<tr><td colspan="2" style="color: white;">.</td></tr>
			<tr><td colspan="2" style="color: white;">.</td></tr>
			<tr><td colspan="2" style="color: white;">.</td></tr>
			<tr><th colspan="2"><h2>{{$serviceRequest->basicData->plate}}</h2></th></tr>
			<tr><td colspan="2" style="color: white;">.</td></tr>
			<tr><td colspan="2" style="color: white;">.</td></tr>
			<tr><td colspan="2" style="color: white;">.</td></tr>
			<tr><td colspan="2" style="color: white;">.</td></tr>
		</table>
		
		<table style=" border: 1px solid black !important; float: left;">
			<tr style=" border: 1px solid black !important;">
				<td style=" border: 1px solid black !important;">names</td>
				<td style=" border: 1px solid black !important;">salary</td>
			</tr>
			<tr style=" border: 1px solid black !important;">
				<td style=" border: 1px solid black !important;">Pedro</td>
				<td style=" border: 1px solid black !important;">1500</td>
			</tr>
			<tr style=" border: 1px solid black !important;">
				<td style=" border: 1px solid black !important;">Jhon</td>
				<td style=" border: 1px solid black !important;">450</td>
			</tr>
		</table>
		
		<table style=" border: 1px solid black !important; float: left; margin-bottom: 500px;">
			<tr style=" border: 1px solid black !important;">
				<td style=" border: 1px solid black !important;">Brand</td>
				<td style=" border: 1px solid black !important;">Color</td>
			</tr>
			<tr style=" border: 1px solid black !important;">
				<td style=" border: 1px solid black !important;">Ferrari</td>
				<td style=" border: 1px solid black !important;">Green</td>
			</tr>
			<tr style=" border: 1px solid black !important;">
				<td style=" border: 1px solid black !important;">Daewoo</td>
				<td style=" border: 1px solid black !important;">Blue</td>
			</tr>
			<tr style=" border: 1px solid black !important;">
				<td style=" border: 1px solid black !important;">Chevrolet</td>
				<td style=" border: 1px solid black !important;">Gray</td>
			</tr>
		</table>
		
				
	@endif
</body>
</html>
 