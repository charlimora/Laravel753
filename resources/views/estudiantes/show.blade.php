@extends('layouts.app')

@section('titulo','View details studet')

@section('contenido')
<br>
<h3>Ver detalles del Estudiante</h3>

<p>{{$query1}}</p>
@foreach ($query1 as $consulta)
    <p>País de Expedición: {{$consulta->nomPais}}</p>
    <p>Departamento de expedición: {{$consulta->NomDepart}}</p>
    <p>Municipio de Expedición: {{$consulta->nomMuni}}</p>

@endforeach

@endsection
