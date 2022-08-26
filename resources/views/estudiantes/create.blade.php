@extends('layouts.app')

@section('titulo','Crear estudiante')

@section('contenido')

<h3>Crear Estudiante nuevo</h3>
<h4>Información básica</h4>
<p>Debes ingresar información básica de identificación. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus accusantium et quo saepe molestiae, quisquam, officiis facere consequatur illo beatae eaque quas corporis sunt dolore officia omnis! Odit, id vero.</p>
<form action="/estudiantes" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
            <p>Columna 1</p>
            <div>
                <label for="tipo_doc">Tipo de documento*</label>
                <select name="tipo_doc" id="tipo_doc">
                    <option value="Cedula">CC</option>
                    <option value="Tarjeta de identidad">TI</option>
                </select>
            </div>
            <div>
                <label for="num_doc">No. de Documento*</label>
                <input type="number" name="num_doc" id="num_doc">
            </div>
            <div>
                <label for="document_iden">Cargue Docum. Identificación*</label>
                <input type="file" name="document_iden" id="document_iden">
            </div>
            <div>
                <label for="paises">País de expedición*</label>
                <select name="paises" id="paises">
                    @foreach ($paises as $pais)
                        <option value="">{{$pais->nom_pais }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="deptos">Departamento de expedición*</label>
                <select name="deptos" id="deptos">
                    @foreach ($departamentos as $depart)
                        <option value="">{{$depart->nom_departa }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="id_muni_expedi">Municipio de expedición*</label>
                <select name="id_muni_expedi" id="id_muni_expedi">
                    @foreach ($municipios as $muni)
                        <option value="{{$muni->id}}">{{$muni->nom_muni }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="">Fecha de expedición</label>
                <input type="date" name="fechaExpedi" id="">
            </div>

         </div> {{--cierro div col --}}

        <div class="col">
            <p>Columna 2</p>
            <div>
                <label for="nombres">Nombres*</label>
                <input type="text" name="nombres" id="nombres">
            </div>
            <div>
                <label for="apellido1">Primer apellido*</label>
                <input type="text" name="apellido1" id="apellido1">
            </div>
            <div>
                <label for="apellido2">Segundo apellido</label>
                <input type="text" name="apellido2" id="apellido2">
            </div>
            <div>
                <label for="">Género</label>
                <select name="genero" id="genero">
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                </select>
            </div>
            <div>
                <label for="estrato">Estrato</label>
                <select name="estrato" id="estrato">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div>
                <label for="">Seleccione un curso</label>
                <select name="id_curso" id="id_curso">
                    @foreach ($cursos as $course)
                        <option value="{{$course->id}}">{{$course->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="paises">País de nacimiento*</label>
                <select name="paises" id="paises">
                    @foreach ($paises as $pais)
                        <option value="">{{$pais->nom_pais }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="deptos">Departamento de nacimiento*</label>
                <select name="deptos" id="deptos">
                    @foreach ($departamentos as $depart)
                        <option value="">{{$depart->nom_departa }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="id_muni_naci">Municipio de nacimiento*</label>
                <select name="id_muni_naci" id="id_muni_naci">
                    @foreach ($municipios as $muni)
                        <option value="{{$muni->id}}">{{$muni->nom_muni }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-dark" type="submit">Guardar</button>
        </div>
    </div>
</form>

@endsection
