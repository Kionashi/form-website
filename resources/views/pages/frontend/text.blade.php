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
			{!!Form::open(array('id'=> 'basicDataForm','files'=>true,'route' =>'testing')) !!}
				<!-- <legend>Datos Personales</legend> -->
				<div class="form-group">
					
					<div class="row">
						<label class="col-md-3 padding-top-1">Privacidad de datos</label>
						<div class="col-md-3 padding-top-1">
							{!! Form::file('file') !!}
							<div class="red">{{$errors->first('dataPrivacy')}}</div>
						</div>
					</div>
					<div class="col-md-12">
						
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
		
    </script>
@stop  