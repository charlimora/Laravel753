<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*con all() accedemos a toda la información de la tabla.
        Se almacenerá en el array $cursito
        */
        $cursito = Curso::all();
        //return $cursito;
        //adjuntamos el array u objeto a la vista
        return view('cursos.index', compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*solo quiero modelar la tabla Cursos */
        $cursito = new Curso();

        $cursito->nombre = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');
        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $cursito->imagen = $request->file('imagen')->store('public/cursos');
        }
        $cursito->save();
        return 'La información se ha guardado correctamente';
    //retorno toda la información que viene en el request
        //return $request->all();
        //return $request->input('descripcion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursito = Curso::find($id);
        return view('cursos.show', compact('cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*creamos una instancia del modelo para poder acceder a los datos
        de la tabla, y en este caso consultar solamente por id*/
        $cursito = Curso::find($id);
        //return $cursito;
        return view('cursos.edit', compact('cursito'));
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
        $cursito = Curso::find($id);

//como la imagen se procesa diferente se debe exceputar al hacer el llenado
       // $cursito->fill($request->all());
        $cursito->fill($request->except('imagen'));
//exceptuamos el campo imagen porque guardaremos ese cambio de otra manera:
            if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
                $cursito->imagen = $request->file('imagen')->store('public/cursos');
            }
        $cursito->save();
        return 'Actualizado';

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
