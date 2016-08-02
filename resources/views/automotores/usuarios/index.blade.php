@extends('automotores.admin')

@section('subtitulo','Usuarios')
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-default">
    <div class="panel-heading text-center"><h4>Lista de Usuarios</h4></div>
    <div class="panel-body">
    <form class="form-inline">
        <div class="form-group">
            <label>Busqueda</label> 
            @include('automotores.usuarios.forms.busqueda')
        </div>
    </form><br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                 <tr class="info">
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Cedula</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Institución</th>
                    <th>Activo</th>
                    <th>Operación</th>
                </tr>
                @foreach($users as $user)
                    <tbody>
                        <tr>
                            <td  class="info text-center">{{ $user->id }}</td>
                            <td>{{ $user->full_name }}</td>
                            <td>{{ $user->cedula }}</td>
                            <td>{{ $user->celular }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->tipo }}</td>
                            <td>{{ $user->full_institucion }}</td>
                            <td>{{ $user->active }}</td>
                            <td class="btns"><center>
                                {!!link_to_route('users.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                                    </center>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <p class="text-center">Hay {{ $users->total() }} registros</p>
        </div>
    </div>
</div>
{!! $users->appends(Request::only(['name','tipo']))->render() !!}

@stop