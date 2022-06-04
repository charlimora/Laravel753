@extends('layouts.app')

@section('titulo','Crear curso')

@section('contenido')

<h3>Crear Nuevo Curso</h3>
        <form action="/cursos" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">Ingrese el nombre del curso</label>
                <input id="nombre" class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group">
                <label for="descrip">Ingrese la descripción del curso</label>
                <input id="descrip" class="form-control" type="text" name="descripcion">
            </div>
            <div class="form-group">
                <label for="imagen">Cargue una imagen</label>
                <br>
                <input id="imagen" type="file" name="imagen">
            </div>
            <button class="btn btn-dark" type="submit">Guardar</button>
        </form>

@endsection




{{--
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear curso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="container">

        <h3>Crear Nuevo Curso</h3>
        <form action="/cursos" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Ingrese el nombre del curso</label>
                <input id="nombre" class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group">
                <label for="descrip">Ingrese la descripción del curso</label>
                <input id="descrip" class="form-control" type="text" name="descripcion">
            </div>
            <button class="btn btn-dark" type="submit">Guardar</button>
        </form>
    </div>

</body>
</html>
--}}
