<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Cyberia Tech Lab">
    <!-- <link rel="icon" href="{!!URL::asset('/images/sgm.ico')!!}"> -->

    <title></title>

    <!-- Bootstrap -->
    {!!Html::style('/css/bootstrap.min.css')!!}

    <!-- Font awesome -->
    {!!Html::style('/css/font-awesome.min.css')!!}

    <!-- Datepicker -->
    {!!Html::style('/css/bootstrap-datetimepicker.min.css')!!}

    <!-- Custom CSS -->
    {!!Html::style('/css/style.css')!!}
    
    <!-- Paginator -->
    {!!Html::style('/css/jPages.css')!!}
    
</head>
<body>
    <div class="container"><!-- NAVBAR -->
        <nav class="navbar navbar-inverse navbar-static-top " role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     
                    <a class="navbar-brand" href="{{route('/')}}">Inicio</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="navbar" style="color: white" >
                            @if(Auth::check())
                            <a href="{{route('admin')}}">
                                @if(Auth::user()->role->name == 'ADMIN')
                                    Administrador
                                @else 
                                    {{Auth::user()->role->name}}
                                @endif
                              {{Auth::user()->name}} 
                             </a> 
                             @endif
                        </li>
                        
                        @if(Auth::check())
                                <li class="navbar-right"><a href="{{route('logout')}}">Cerrar Sesión</a></li>
                        @else
                                <li class="navbar-right"><a data-toggle="modal" href="#login"">Iniciar Sesión</a></li>
                        @endif
                    </ul>
            
                </div>
            </div>
        </nav>
        
    </div> <!-- FIN Navbar-->
    <div class="container">
        @if(isset($success))
            <h1 class="green">{{$success}}</h1>
            @elseif (isset($alert)) 
            <h1 class="red">{{$alert}}</h1>
            @elseif (isset($message))
            <h1>{{$message}}</h1>
        @endif
        @if(\Session::has('alert'))
            <h2 class="red">{!! \Session::get('alert') !!}</h2>
        @endif      
        <!-- Modal -->
        <div class="carousel modal" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" >Inicio de sesión</h4>
                    </div>
                    {!!Form::open(array('route' => 'login','class' => 'form-horizontal')) !!}
                        <div class="modal-body">
                            <div>
                                <div class="form-group">
                                    <label for="inputUser" class="col-sm-2 control-label">Correo</label>
                                    <div class="col-sm-6">
                                        {!! Form::text('email',null,['placeholder' => 'Correo', 'class' =>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
                                    <div class="col-sm-6">
                                        {!! Form::password('password',[ 'class' =>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <input class="btn btn-primary" type="submit" name="" value="Iniciar sesión">
                            <div style="text-align: left;"><a href="{{route('login')}}">Crear Cuenta</a></div>
                        </div>
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
        @yield('content')
                    
    </div>
    <!-- Modal para inicio de sesion
    ================================================== -->
             
                
    <!-- Funciones
    ================================================== -->


    <!-- Bootstrap core JavaScript
    ================================================== 
    <script src="../librerias/bootstrap-3.3.7/js/tests/vendor/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../librerias/bootstrap-3.3.7/docs/dist/js/bootstrap.min.js"></script>-->
    <!-- Just to make our placeholder images work. Don't actually copy the next line! 
    <script src="../librerias/bootstrap-3.3.7/docs/assets/js/vendor/holder.min.js"></script>-->

    <!-- FOOTER -->
    <footer class="container">
        
    </footer>   
        
     <!-- JQuery -->
    {!!Html::script('/js/jquery.min.js')!!}

    <!-- Boostrap -->
    {!!Html::script('/js/bootstrap.min.js')!!}
    
    <!-- Moment JS -->
    {!!Html::script('/js/moment.min.js')!!}

    <!-- Datepicker -->
    {!!Html::script('/js/bootstrap-datetimepicker.min.js')!!}
    
    <!-- Paginator -->
    {!!Html::script('/js/jPages.min.js')!!}
    
    <!-- Main script -->
    {!!Html::script('/js/main.js')!!}
    
    <!-- Custom scripts -->
    @yield('custom_script')
</body>
</html>
