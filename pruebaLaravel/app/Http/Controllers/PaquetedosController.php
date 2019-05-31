<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaquetedosController extends Controller
{
    //
      public function index()
    {
        //
      $datos['PaquetesDos'] = PaquetesDos::paginate(10);
        return view('index', $datos);
    }



}
