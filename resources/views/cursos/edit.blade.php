@extends('layouts.app')

@section('titulo','Editar curso')

@section('contenido')

<h3>Editar el Curso</h3>
        <form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nombre">Ingrese el nuevo nombre del curso</label>
                <input id="nombre" value="{{$cursito->nombre}}" class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group">
                <label for="descrip">Ingrese la nueva descripción del curso</label>
                <input id="descrip" value="{{$cursito->descripcion}}" class="form-control" type="text" name="descripcion">
            </div>
            <div class="form-group">
                <label for="imagen">Cargue la imagen nueva</label>
                <br>
                <input id="imagen" type="file" name="imagen">
            </div>
            <button class="btn btn-dark" type="submit">Actualizar</button>
        </form>
        <a name="" id="" class="btn btn-dark" href="" role="button">Regresar</a>

@endsection
