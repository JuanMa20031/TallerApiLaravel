<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return Categoria::all();
    }

    public function store(CreateCategoriaRequest $request)
    {
        $categoria = Categoria::create($request->validated());
        return response()->json($categoria, 201);
    }

    public function show(Categoria $categoria)
    {
        $categoria->load('carros');
        return response()->json($categoria);
    }

    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        $categoria->update($request->validated());
        return response()->json($categoria, 200);
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return response()->json('Eliminacion exitosa', 200);
    }
}
