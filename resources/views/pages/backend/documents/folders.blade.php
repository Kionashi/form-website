@extends('layouts.backend.master.index')
@section('content')

<!-- Modal -->
<div class="modal fade" id="addFolder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Carpeta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!!Form::open(array('route' => 'admin/documents/add-folder')) !!}
			{!!Form::hidden('userId',$parent->user_id)!!}
			{!!Form::hidden('parentId',$parent->id)!!}
			<div class="form-group">
				<label class="padding-top-1">Nombre</label>
					{!! Form::text('name',null,array('class' => 'form-control','placeholder' => 'Nombre'))!!}
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input class="btn btn-primary" type="submit" name="" value="Enviar">
      </div>
    </div>
		{!!Form::close()!!}
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Carpeta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		{!!Form::open(array('route' => 'admin/documents/add-file','files' => true)) !!}
			{!!Form::hidden('userId',$parent->user_id)!!}
			{!!Form::hidden('parentId',$parent->id)!!}
			{!!Form::hidden('path',$path)!!}
			<div class="form-group">
				<label class="padding-top-1">Nombre</label>
					{!! Form::text('name',null,array('class' => 'form-control','placeholder' => 'Nombre'))!!}
					{!! Form::file('file') !!}
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input class="btn btn-primary" type="submit" name="" value="Enviar">
      </div>
    </div>
		{!!Form::close()!!}
  </div>
</div>


	<div class="col-md-6">
		<button type= "button" data-toggle= "modal" data-target="#addFile" class="btn btn-danger btn-block">Agregar Archivo</button>
	</div>
	<div class="col-md-6">
		<button type= "button" data-toggle= "modal" data-target="#addFolder" class="btn btn-warning btn-block">Agregar Carpeta</button>
	</div>
	@if($parent->parent_id == null)
	<div class="col-md-2 centered size-70">
		<a class="blue undecorated" href="{{route('admin/documents')}}">
			<i class="fa fa-level-up"></i>
			<h2  class="icon-text">Subir un nivel</h2>
		</a>
	</div>
	@else 
	<div class="col-md-2 centered size-70">
		<a class="blue undecorated" href="{{route('admin/documents/',['id' => $parent->user_id, 'parentId' => $parent->parent_id])}}">
			<i class="fa fa-level-up"></i>
			<h2  class="icon-text">Subir un nivel</h2>
		</a>
	</div>
	@endif
	
	@foreach($folders as $folder)
		<div class="col-md-2 centered size-70">
			<a class="yellow undecorated" href="{{route('admin/documents/',['id' => $parent->user_id, 'parentId' => $folder->id])}}">
				<i class="fa fa-folder"></i>
				<h2 class="icon-text">{{$folder->name}}</h2>
			</a>
		</div>
	@endforeach
	@foreach($files as $file)
		<div class="col-md-2 centered size-70">
			<a class="red undecorated" href="{{asset($file->path)}}" target="_blank">
				<i class="fa fa-file-pdf-o" ></i>
				<h2 class="icon-text">{{$file->name}}</h2>
			</a>
		</div>
	@endforeach
@endsection

