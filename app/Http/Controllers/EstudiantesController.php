<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Departamento;
use App\Models\Estudiante;
use App\Models\Municipio;
use App\Models\Paise;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Estudiante::all();
        return view('estudiantes.index', compact('students'));
        //return $students;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Paise::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $cursos = Curso::all();
        return view('estudiantes.create', compact('paises','departamentos', 'municipios','cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Estudiante();

        $student->tipo_doc = $request->input('tipo_doc');
        $student->num_doc = $request->input('num_doc');
        if ($request->hasFile('document_iden')){ //si desde ese campo viene un archivo hacer:
            $student->document_iden = $request->file('document_iden')->store('public/students/documents');
        }
        $student->id_muni_expedi = $request->input('id_muni_expedi');
        $student->fechaExpedi = $request->input('fechaExpedi');
        $student->nombres = $request->input('nombres');
        $student->apellido1 = $request->input('apellido1');
        $student->apellido2 = $request->input('apellido2');
        $student->genero = $request->input('genero');
        $student->estrato = $request->input('estrato');
        $student->id_curso = $request->input('id_curso');
        $student->id_muni_naci = $request->input('id_muni_naci');
        $student->save();
        return 'La información se ha guardado correctamente';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Estudiante::find($id);
        $query1 = Municipio::join(
            'estudiantes', 'estudiantes.id_muni_expedi','municipios.id'
            )
            ->join('departamentos','departamentos.id','municipios.id_departa')
            ->join('paises', 'paises.id', 'departamentos.id_country')
            ->where('estudiantes.id', $id)
            ->select('municipios.nom_muni as nomMuni', 'departamentos.nom_departa as NomDepart', 'paises.nom_pais as nomPais')
            ->get();

        //return $muniExpedi;
        return view('estudiantes.show', compact('query1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
