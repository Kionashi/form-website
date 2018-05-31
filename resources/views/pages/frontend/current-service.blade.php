@extends('layouts.frontend.master.index')
@section('content')
	<div class="rounded clear-bg padding-2" style="min-width: 850px;">
		<h3 align="center">Servicios Actuales</h3>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li> $error </li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<fieldset style="min-width: 800px;">
			@if($serviceRequest)
			<div class="form-group padding-2" style="min-width: 800px;">
			<div class="row" style="min-width: 800px;">
				<label class="col-md-2 col-lg-2 col-xs-2 col-sm-2 padding-top-1">Datos Basicos</label>
				<label class="col-md-2 col-lg-2 col-xs-2 col-sm-2 padding-top-1">Datos Complementarios</label>
				<label class="col-md-2 col-lg-2 col-xs-2 col-sm-2 padding-top-1">Regrabaci&oacute;n</label>
				<label class="col-md-2 col-lg-2 col-xs-2 col-sm-2 padding-top-1">Inspecci&oacute;n</label>
				<label class="col-md-2 col-lg-2 col-xs-2 col-sm-2 padding-top-1">RTC</label>
				<label class="col-md-2 col-lg-2 col-xs-2 col-sm-2 padding-top-1">Control</label>
			</div>
			<div class="row" style="min-width: 800px;">
				<div class="col-md-2 col-lg-2 col-xs-2 col-sm-2 padding-top-1">
					@if($serviceRequest->basic_data_id)
						<h2><a href="{{route('request/basic-data/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
					@endif
					@if(!$serviceRequest->basic_data_id)
						<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
					@endif
				</div>
				<div class="col-md-2 col-lg-2 col-xs-2 col-sm-2 padding-top-1">
					@if($serviceRequest->basic_data_id)
						<h2><a href="{{route('request/complementary-data/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
					@endif
					@if(!$serviceRequest->basic_data_id)
						<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
					@endif
				</div>
				<div class="col-md-2 col-lg-2 col-xs-2 col-sm-2 padding-top-1">
					@if($serviceRequest->service->id == 1)
						@if($serviceRequest->complementary_data_id)
							<h2><a href="{{route('request/recording/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
						@endif
						@if(!$serviceRequest->complementary_data_id)
							<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
						@endif
					@else 
						<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
					@endif
				</div>
				<div class="col-md-2 col-lg-2 col-xs-2 col-sm-2 padding-top-1">
					@if($serviceRequest->service->id == 2 || $serviceRequest->service->id == 4)
						@if($serviceRequest->complementary_data_id)
							<h2><a href="{{route('request/inspection/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
						@endif
						@if(!$serviceRequest->inspection_id)
							<h2><i class="fa fa-complementary_data_id-o" aria-hidden="true"></i></h2>
						@endif
					@else
						<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
					@endif
				</div>
				<div class="col-md-2 col-lg-2 col-xs-2 col-sm-2 padding-top-1">
					@if($serviceRequest->service->id == 2)
					
						@if($serviceRequest->inspection_id)
							<h2><a href="{{route('request/rtc/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
						@endif
						@if(!$serviceRequest->inspection_id)
							<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
						@endif
					@endif
					@if($serviceRequest->service->id == 3)
						@if($serviceRequest->complementary_data_id)
							<h2><a href="{{route('request/rtc/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
						@endif
						@if(!$serviceRequest->complementary_data_id)
							<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
						@endif
					@endif
					@if($serviceRequest->service->id != 2 || $serviceRequest->service->id != 3 ) 
						<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
					@endif
				</div>
				<div class="col-md-2 col-lg-2 col-xs-2 col-sm-2 padding-top-1">
					@if($serviceRequest->service->id == 1)
						@if($serviceRequest->recording_id)
							<h2><a href="{{route('request/control/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
						@endif
						@if(!$serviceRequest->recording_id)
							<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
						@endif
					@endif
					@if($serviceRequest->service->id == 3 || $serviceRequest->service->id == 2)
						@if($serviceRequest->rtc_id)
							<h2><a href="{{route('request/control/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
						@endif
						@if(!$serviceRequest->rtc_id)
							<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
						@endif
					@endif
					@if($serviceRequest->service->id == 4)
						@if($serviceRequest->inspection_id)
							<h2><a href="{{route('request/control/',$serviceRequest->id)}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h2>
						@endif
						@if(!$serviceRequest->inspection_id)
							<h2><i class="fa fa-square-o" aria-hidden="true"></i></h2>
						@endif
					@endif
				</div>
			</div>
		@endif
		@if(!$serviceRequest)
			<h2>No se encontraron servicios</h2>
		@endif
		<div class="col-md-3 offset-6 padding-top-1" align="center">
			<a class="btn btn-primary btn-block" href="{{route('/')}}">Regresar</a>
		</div>
		</fieldset>
	</div>
@endsection
