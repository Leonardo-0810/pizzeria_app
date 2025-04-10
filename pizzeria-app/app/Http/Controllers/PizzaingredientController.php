<?php

namespace App\Http\Controllers;

use App\Models\Pizzaingredient;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PizzaingredientRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PizzaingredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pizzaingredients = Pizzaingredient::paginate();

        return view('pizzaingredient.index', compact('pizzaingredients'))
            ->with('i', ($request->input('page', 1) - 1) * $pizzaingredients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pizzaingredient = new Pizzaingredient();

        return view('pizzaingredient.create', compact('pizzaingredient'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PizzaingredientRequest $request): RedirectResponse
    {
        Pizzaingredient::create($request->validated());

        return Redirect::route('pizzaingredients.index')
            ->with('success', 'Pizzaingredient created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $pizzaingredient = Pizzaingredient::find($id);

        return view('pizzaingredient.show', compact('pizzaingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pizzaingredient = Pizzaingredient::find($id);

        return view('pizzaingredient.edit', compact('pizzaingredient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PizzaingredientRequest $request, Pizzaingredient $pizzaingredient): RedirectResponse
    {
        $pizzaingredient->update($request->validated());

        return Redirect::route('pizzaingredients.index')
            ->with('success', 'Pizzaingredient updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Pizzaingredient::find($id)->delete();

        return Redirect::route('pizzaingredients.index')
            ->with('success', 'Pizzaingredient deleted successfully');
    }
}
