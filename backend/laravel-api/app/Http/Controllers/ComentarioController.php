<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComentarioController extends Controller
{

    public function index()
    {
        return Comentario::all();
    }

    public function show(Comentario $comentario)
    {
        return $comentario;
    }

    public function store(Request $request)
    {
        $comentario = Comentario::create($request->all());

        return response()->json($comentario, 201);
    }

    public function update(Request $request, Comentario $comentario)
    {
        $comentario->update($request->all());

        return response()->json($comentario, 200);
    }

    public function delete(Comentario $comentario)
    {
        $comentario->delete();

        return response()->json(null, 204);
    }
}
