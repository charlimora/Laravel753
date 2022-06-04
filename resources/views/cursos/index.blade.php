@extends('layouts.app')

@section('titulo', 'Listado Cursos')

@section('contenido')

<h3 class="text-center">Listado de Cursos Disponibles</h3>
    <br>

    {{--foreach es un ciclo o bucle especial para trabajar con arrays--}}
    {{--recorderis: existen ciclos como while, for, do while, foreach--}}
    <div class="row"> {{--ya tenemos la fila--}}
    @foreach ($cursito as $alias )
        <div class="col-sm"> {{--abrimos columna--}}
            <div class="card text-center" style="width: 18rem; margin-top:30px">
                <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($alias->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$alias->nombre}}</h5>
                {{--se necesita el id para ver un registro en particular--}}
                <a href="/cursos/{{$alias->id}}" class="btn btn-dark">Ver más</a>
                </div>
            </div>
        </div>
    @endforeach
    </div> {{--cierro el div row--}}

@endsection
