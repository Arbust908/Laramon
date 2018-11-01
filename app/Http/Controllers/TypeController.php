<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function todos()
    {
        $tipos = Type::All();

        return view('Type.index', compact('tipos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function uno(Type $tipo)
    {
        /* $pokemons = $type->pokemon(); */
        return view('Type.show')->with('tipo',$tipo);
    }

}
