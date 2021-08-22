<?php

namespace App\Http\Controllers;
Use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        return Libro::all();
    }

    public function show(Libro $libro)
    {
        return $libro;
    }

    public function store(Request $request)
    {
        $libro = Libro::create($request->all());

        return response()->json($libro, 201);
    }

    public function update(Request $request, Libro $libro)
    {
        $libro->update($request->all());

        return response()->json($libro, 200);
    }

    public function delete(Libro $libro)
    {
        $libro->delete();

        return response()->json(null, 204);
    }
}
