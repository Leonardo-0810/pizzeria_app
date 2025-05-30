<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PizzaSize;
use Illuminate\Http\Request;

class PizzaSizeController extends Controller
{
    public function index()
    {
        return response()->json(PizzaSize::with('pizza')->paginate(20));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pizzas_id' => 'required|exists:pizzas,id',
            'size' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $pizzaSize = PizzaSize::create($request->all());

        return response()->json($pizzaSize, 201);
    }

    public function show($id)
    {
        $pizzaSize = PizzaSize::with('pizza')->findOrFail($id);
        return response()->json($pizzaSize);
    }

    public function update(Request $request, $id)
    {
        $pizzaSize = PizzaSize::findOrFail($id);

        $request->validate([
            'pizzas_id' => 'sometimes|exists:pizzas,id',
            'size' => 'sometimes|string|max:255',
            'price' => 'sometimes|numeric|min:0',
        ]);

        $pizzaSize->update($request->all());

        return response()->json($pizzaSize);
    }

    public function destroy($id)
    {
        $pizzaSize = PizzaSize::findOrFail($id);
        $pizzaSize->delete();

        return response()->json(null, 204);
    }
}
