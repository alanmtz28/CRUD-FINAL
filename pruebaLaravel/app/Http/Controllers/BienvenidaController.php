<?php

namespace App\Http\Controllers;

use App\bienvenida;
use Illuminate\Http\Request;

class BienvenidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bienvenida  $bienvenida
     * @return \Illuminate\Http\Response
     */
    public function show(bienvenida $bienvenida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bienvenida  $bienvenida
     * @return \Illuminate\Http\Response
     */
    public function edit(bienvenida $bienvenida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bienvenida  $bienvenida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bienvenida $bienvenida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bienvenida  $bienvenida
     * @return \Illuminate\Http\Response
     */
    public function destroy(bienvenida $bienvenida)
    {
        //
    }
}
