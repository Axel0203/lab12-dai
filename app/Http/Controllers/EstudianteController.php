<?php

namespace App\Http\Controllers;

use App\Models\estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['estudiantes'] = estudiante::paginate(5);
        return view('estudiante.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosEstudiante = request()->except('_token');
        estudiante::insert($datosEstudiante);
        // return response()->json($datosEstudiante);
        return redirect('estudiante')->with('mensaje','Estudiante agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $estudiante=estudiante::findOrFail($id);
        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEstudiante=request()->except(['_token','_method']);
        estudiante::where('id','=',$id)->update($datosEstudiante);
        $estudiante=estudiante::findOrFail($id);
        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        estudiante::destroy($id);
        return redirect('estudiante')->with('mensaje','Estudiante eliminado con éxito');
    }
}
