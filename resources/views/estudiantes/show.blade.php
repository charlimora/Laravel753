@extends('layouts.app')

@section('titulo','View details studet')

@section('contenido')
<br>
<h3 class="text-center">Ver detalles del Estudiante</h3>

<h3>Datos de expedición</h3>
@foreach ($query1 as $consulta)
    <p>País de Expedición: {{$consulta->nomPais}}</p>
    <p>Departamento de expedición: {{$consulta->NomDepart}}</p>
    <p>Municipio de Expedición: {{$consulta->nomMuni}}</p>

@endforeach

<h3>Datos de nacimiento</h3>
@foreach ($query2 as $consulta)
    <p>País de Nacimiento: {{$consulta->nomPais}}</p>
    <p>Departamento de Nacimiento: {{$consulta->NomDepart}}</p>
    <p>Municipio de Nacimiento: {{$consulta->nomMuni}}</p>

@endforeach

@endsection
