<?php

namespace App\Http\Controllers;

use App\Paquetes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaquetesController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      $datos['paquetes'] = Paquetes::paginate(10);
        return view('paquetes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('paquetes.create');
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
        $datospaquetes=request()->except('_token');
        if ($request->hasFile('Foto1')) {
            $datospaquetes['Foto1']=$request->file('Foto1')->store('uploads','public');
            # code...
        }

         if ($request->hasFile('Foto2')) {
            $datospaquetes['Foto2']=$request->file('Foto2')->store('uploads','public');
            # code...
        }

        if ($request->hasFile('Foto3')) {
            $datospaquetes['Foto3']=$request->file('Foto3')->store('uploads','public');
            # code...
        }

       
      Paquetes::insert($datospaquetes);
      return view('paquetes');

      //response()->json($datospaquetes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function show(Paquetes $paquetes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paquete= Paquetes::findOrFail($id);
        return view('paquetes.edit',compact('paquete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datospaquetes=request()->except(['_token','_method']);

//mod

if ($request->hasFile('Foto1')) {

            $paquete= Paquetes::findOrFail($id);

            Storage::delete('public/.$paquete->foto1');
            $datospaquetes['Foto1']=$request->file('Foto1')->store('uploads','public');
            # code...
            
        }

         if ($request->hasFile('Foto2')) {

              $paquete= Paquetes::findOrFail($id);
             Storage::delete('public/.$paquete->foto2');
            $datospaquetes['Foto2']=$request->file('Foto2')->store('uploads','public');
            # code...
          
        }

        if ($request->hasFile('Foto3')) {


            $paquete= Paquetes::findOrFail($id);
            Storage::delete('public/.$paquete->foto3');
            $datospaquetes['Foto3']=$request->file('Foto3')->store('uploads','public');
            # code...
            
        }







        Paquetes::where('id','=',$id)->update($datospaquetes);

         $paquete= Paquetes::findOrFail($id);
          return view('paquetes.edit',compact('paquete'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //



        Paquetes::destroy($id);
        return redirect('paquetes');
    }
}
