@extends('layouts.app')

@section('titulo', 'Detalle Curso')
@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($cursito->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$cursito->descripcion}}</p>
    </div>
    <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-dark">Editar curso</a>
</div>

@endsection
