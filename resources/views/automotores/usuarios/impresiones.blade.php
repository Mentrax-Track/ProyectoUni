<?php use Infraestructura\User; ?>
@extends('automotores.admin')

@section('subtitulo','Usuarios')
@section('content')
<br>
<div class="panel panel-success">
    <div class="panel-heading text-center"><h4><p class="www">Imprimir Usuarios</p></h4></div>
    <div class="panel-body">
        <li class="list-group-item list-group-item-success"> 
            <div class="row">
                <center><h4><p class="www">Viajes</p></h4></center>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <?php $todos = User::count();
                                    //dd($todos); ?>
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $todos }}</div>
                                    <div>Todos los usuarios</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ action('UsersController@getTodos') }}" target="_blank">
                            <div class="panel-footer">
                                <span class="pull-left">Imprimir</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <?php $choferes = User::where('tipo','chofer')->count(); ?>
                                <div class="col-xs-3">
                                    <i class="fa fa-user-circle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $choferes }}</div>
                                    <div>Choferes</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ action('UsersController@getChoferes') }}" target="_blank">
                            <div class="panel-footer">
                                <span class="pull-left">Imprimir</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                            <?php $mecanicos = User::where('tipo','mecanico')->count(); ?>
                                <div class="col-xs-3">
                                    <i class="fa fa-user-circle-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $mecanicos }}</div>
                                    <div>Mecánicos</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ action('UsersController@getMecanicos')}}" target="_blank">
                            <div class="panel-footer">
                                <span class="pull-left">Imprimir</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading ">
                            <div class="row">
                            <?php $encargados = User::where('tipo','encargado')->count(); ?>
                                <div class="col-xs-3">
                                    <i class="fa fa-user-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$encargados}} </div>
                                    <div>Encargados de Viajes</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ action('UsersController@getEncargados')}}" target="_blank">
                            <div class="panel-footer">
                                <span class="pull-left">Imprimir</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            </li>

    </div>
</div>

@stop