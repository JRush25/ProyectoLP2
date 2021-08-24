<?php

namespace App\Http\Controllers;
Use App\Models\Obra;
use Illuminate\Http\Request;

class ObraController extends Controller
{

    public function index()
    {
        return Obra::all();
    }

    public function show(Obra $obra)
    {
        return $obra;
    }

    public function store(Request $request)
    {
        $obra = Obra::create($request->all());

        return response()->json($obra, 201);
    }

    public function update(Request $request, Obra $obra)
    {
        $obra->update($request->all());

        return response()->json($obra, 200);
    }

    public function delete(Obra $obra)
    {
        $obra->delete();

        return response()->json(null, 204);
    }
}
