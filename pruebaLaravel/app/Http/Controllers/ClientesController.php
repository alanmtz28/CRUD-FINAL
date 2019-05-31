<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['clientes'] = Clientes::paginate(2);

        return view('clientes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Agregar empleado


        $campos=[
            'Nombre' => 'required|string|max:100',
            'ApellidoPaterno' => 'required|string|max:100',
            'ApellidoMaterno' => 'required|string|max:100',
            'Telefono' => 'required|string|max:100',
            'Correo' => 'required|email'



        ];

        $Mensaje=["required" => 'El :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);

        $datosClientes = request()->all();

        $datosClientes = request()->except('_token');

        Clientes::insert($datosClientes);

        return redirect('clientes')->with('Mensaje','Cliente agregado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $cliente= Clientes::findOrFail($id);

        return view('clientes.edit', compact('cliente'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        //
        $datosClientes = request()->except(['_token', '_method']);

        Clientes::where('id', '=', $request->id)->update($datosClientes);
        
        //$cliente= Clientes::findOrFail($id);

        //return view('clientes.edit', compact('cliente'));
        
        return redirect('clientes')->with('Mensaje', 'Cliente modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        //
        $cliente= Clientes::findOrFail($id);
        Clientes::destroy($id);

        return redirect('clientes')->with('Mensaje', 'Cliente eliminado con exito');
    }
}