@extends('layouts.app')

@section('titulo','Ver students')

@section('contenido')
<br>
<h3>Listado de estudiantes</h3>

@foreach ($students as $student)
    <p>{{$student->nombres}}</p>
@endforeach

@endsection
