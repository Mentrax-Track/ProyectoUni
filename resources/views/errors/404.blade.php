@extends('automotores.admin')

@section('subtitulo','Página 404')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>Página 404</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
    <li class="list-group-item list-group-item-danger">
        <div class="container">
            <div class="content">
                <div class="title">Acceso Denegado...</div>
            </div>
        </div>
    </li>
    </body>
</html>
@endsection