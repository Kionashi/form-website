@extends('layouts.frontend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2">
		<h3 align="center"> Consulta por placa</h3>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li> $error </li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<fieldset>
		@if($serviceRequests)
					<div class="form-group padding-2">
					<div class="row">
						<label class="col-md-2 padding-top-1">Datos Basicos</label>
						<label class="col-md-3 padding-top-1">Datos Complementarios</label>
						<label class="col-md-2 padding-top-1">Regrabación</label>
						<label class="col-md-2 padding-top-1">Inspección</label>
						<label class="col-md-1 padding-top-1">RTC</label>
						<label class="col-md-2 padding-top-1">Control</label>
					</div>
			@foreach($serviceRequests as $serviceRequest)
				<div class="row">
					<div class="col-md-2 padding-top-1">
						@if($serviceRequest->basic_data_id)
							<h2><a href="{{route('request/basic-data/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
						@endif
						@if(!$serviceRequest->basic_data_id)
							<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
						@endif
					</div>
					<div class="col-md-3 padding-top-1">
						@if($serviceRequest->complementary_data_id)
							<h2><a href="{{route('request/complementary-data/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
						@endif
						@if(!$serviceRequest->complementary_data_id)
							<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
						@endif
					</div>
					<div class="col-md-2 padding-top-1">
						@if($serviceRequest->recording_id)
							<h2><a href="{{route('request/recording/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
						@endif
						@if(!$serviceRequest->recording_id)
							<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
						@endif
					</div>
					<div class="col-md-2 padding-top-1">
						@if($serviceRequest->inspection_id)
							<h2><a href="{{route('request/inspection/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
						@endif
						@if(!$serviceRequest->inspection_id)
							<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
						@endif
					</div>
					<div class="col-md-1 padding-top-1">
						@if($serviceRequest->rtc_id)
							<h2><a href="{{route('request/rtc/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
						@endif
						@if(!$serviceRequest->rtc_id)
							<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
						@endif
					</div>
					<div class="col-md-2 padding-top-1">
						@if($serviceRequest->progress == 'COMPLETED')
							<h2><a href="{{route('request/control/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
						@endif
						@if($serviceRequest->progress == 'PENDING')
							<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
						@endif
					</div>
				</div>
			@endforeach
		@endif
		@if(!$serviceRequests)
			<h2>No se encontraron servicios</h2>
		@endif
		</fieldset>
	</div>
@endsection
