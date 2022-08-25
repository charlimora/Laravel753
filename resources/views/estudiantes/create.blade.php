@extends('layouts.app')

@section('titulo','Crear estudiante')

@section('contenido')

<h3>Crear Estudiante nuevo</h3>
<h4>Información básica</h4>
<p>Debes ingresar información básica de identificación. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus accusantium et quo saepe molestiae, quisquam, officiis facere consequatur illo beatae eaque quas corporis sunt dolore officia omnis! Odit, id vero.</p>
<form action="/cursos" method="POST" enctype="multipart/form-data">
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
                @foreach ($paises as $pais)
                    @foreach ($pais->departamentos as $depto)
                        <p>a</p>
                    @endforeach

                @endforeach
                <select name="paises" id="paises">
                    @foreach ($departamentos as $depart)
                        <option value="">{{$depart->nom_departa }}</option>
                        {{-- <option value="{{$count->id}}">{{$count->nom_pais}}</option> --}}
                    @endforeach
                </select>
            </div>
            <div>
                {{-- <label for="deptos">País de expedición*</label>
                <select name="deptos" id="deptos">
                    @foreach ($paises as $country)
                       @foreach ($country->departamentos as $departamento)
                           <option value="">{{$departamento->nom_departa}}</option>
                       @endforeach
                    @endforeach
                </select> --}}
            </div>

        </div>

        <div class="col">
            <p>Columna 2</p>
            <button class="btn btn-dark" type="submit">Guardar</button>
        </div>
    </div>
</form>

@endsection
