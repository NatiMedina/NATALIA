<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    

    public function store(Request $request)
    {
     
        return view("usuario")->with('nombre',$request->get('nombre'));
    }

    public function storePedido(Request $request)
    {
     
        return view("catalogo")->with($request->all());
        
    }
}