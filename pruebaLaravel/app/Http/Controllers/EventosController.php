<?php

namespace App\Http\Controllers;

use App\Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['eventos'] = Eventos::paginate(2);


        return view('eventos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     

        return view('eventos.create');
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
        $campos=[
            'Fecha' => 'required|string|max:100',
            'Tipo' => 'required|string|max:100',
            //'clientes_id' => $request->get('clientes_id')



        ];

        $Mensaje=["required" => 'El :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);

        $datosEventos = request()->all();

        $datosEventos = request()->except('_token');

        Eventos::insert($datosEventos);

        return redirect('eventos')->with('Mensaje','Evento agregado con éxito!');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show(Eventos $eventos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $evento= Eventos::findOrFail($id);

        return view('eventos.edit', compact('evento'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $datosEventos = request()->except(['_token', '_method']);

        Eventos::where('id', '=', $id)->update($datosEventos);
        return redirect('eventos')->with('Mensaje', 'Evento modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento= Eventos::findOrFail($id);
        Eventos::destroy($id);

        return redirect('eventos')->with('Mensaje', 'Evento eliminado con exito');
        //
    }
}