<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarroStoreRequest;
use App\Http\Requests\CarroUpdateRequest;
use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::all();
        return response()->json($carros);
    }

    public function show($id)
    {
        $carro = Carro::with('categoria')->findOrFail($id);
        return response()->json($carro);
    }

    public function store(CarroStoreRequest $request)
    {
        $carro = Carro::create($request->validated());
        return response()->json($carro, 201);
    }

    public function update(CarroUpdateRequest $request, $id)
    {
        $carro = Carro::findOrFail($id);
        $carro->update($request->validated());
        return response()->json($carro, 200);
    }

    public function destroy($id)
    {
        $carro = Carro::findOrFail($id);
        $carro->delete();
        return response()->json('Eliminacion exitosa', 200);
    }
}
