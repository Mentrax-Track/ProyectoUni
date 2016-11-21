<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Automotores</title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}

    @yield('css')
    
</head>

<body class="letra">

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('auto') }}">Automotores | @yield('subtitulo')</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {!! Auth::user()->full_name !!}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="/Salir"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <br><p class="centered text-center"><img class="img-circle" width="85" src="{!! URL::to('/img/infrax.jpeg') !!}"><br><a>U.A.T.F.</a></p>
                            <li>
                                <a href="#"><i class="fa fa-users fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{!! URL::to('/users/create') !!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                    </li>
                                    <li>
                                        <a href="{!! URL::to('/users') !!}"><i class='fa fa-list-ol fa-fw'></i> Listar</a>
                                    </li>
                                </ul>
                            </li>
                        <li>
                            <a href="#"><i class='glyphicon glyphicon-list-alt'></i> Reservas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/reservas/create') !!}"><i class='glyphicon glyphicon-pencil'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/reservas') !!}"><i class='glyphicon glyphicon-align-justify'></i> Listar</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class='glyphicon glyphicon-globe'></i> Viajes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/calendario') !!}"><i class='glyphicon glyphicon-calendar'></i> Calendario</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/viajes/create') !!}"><i class='glyphicon glyphicon-edit'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/viajes') !!}"><i class='glyphicon glyphicon-list-alt'></i> Listar</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon fa fa-bus"></i> Vehiculos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/vehiculos/create') !!}"><i class='glyphicon glyphicon-ok'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/vehiculos') !!}"><i class='fa fa-list-ol fa-fw'></i> Mostrar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-road"></i> Destinos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/destinos/create') !!}"><i class='glyphicon glyphicon-ok'></i> Insertar</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/destinos') !!}"><i class='fa fa-list-ol fa-fw'></i> Listar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon fa fa-file-pdf-o"></i> Presupuestos de Viajes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/presupuestos') !!}"><i class='fa fa fa-usd'></i> Tipo A (Cheque)</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/presupuestosDia') !!}"><i class='fa fa-money'></i> Tipo B (Caja)</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon fa fa-sign-in"></i> Autorización de Salidas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/salidas/create') !!}"><i class='fa fa-file-text-o'></i> Crear</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/salidas') !!}"><i class='fa fa-sort-numeric-asc'></i> Listar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon fa fa-share-alt"></i> Rol de Viajes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/roles') !!}"><i class='fa fa-sliders'></i> Mostrar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-list-alt"></i> Informes de Viajes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/informes') !!}"><i class='fa fa-sliders'></i> Mostrar</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
            @yield('content')
            @include('automotores.tablero')
        </div>

    </div>
    
    
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}
    @yield('javascript')
</body>

</html>
