@extends('layouts.backend.master.index')
@section('content')
<div class="row">
	@foreach($folders as $i => $folder)
	@if($i % 4 == 0)
		</div>
		<div class="row">
	@endif
		<div class="col-md-3" style="text-align: center;">
			<a class="undecorated" href="{{route('admin/documents/',['id' => $folder->user_id, 'parentId' => $folder->id])}}">
				<i class="fa fa-address-book" style="font-size: 90px;"></i>
				<h1>{{$folder->name}}</h1>
			</a>
		</div>
	@endforeach
	</div>
@endsection