<?php

namespace App\Http\Controllers;

use App\Models\Pizzarawmaterial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PizzarawmaterialRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PizzarawmaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pizzarawmaterials = Pizzarawmaterial::paginate();

        return view('pizzarawmaterial.index', compact('pizzarawmaterials'))
            ->with('i', ($request->input('page', 1) - 1) * $pizzarawmaterials->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pizzarawmaterial = new Pizzarawmaterial();

        return view('pizzarawmaterial.create', compact('pizzarawmaterial'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PizzarawmaterialRequest $request): RedirectResponse
    {
        Pizzarawmaterial::create($request->validated());

        return Redirect::route('pizzarawmaterials.index')
            ->with('success', 'Pizzarawmaterial created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $pizzarawmaterial = Pizzarawmaterial::find($id);

        return view('pizzarawmaterial.show', compact('pizzarawmaterial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pizzarawmaterial = Pizzarawmaterial::find($id);

        return view('pizzarawmaterial.edit', compact('pizzarawmaterial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PizzarawmaterialRequest $request, Pizzarawmaterial $pizzarawmaterial): RedirectResponse
    {
        $pizzarawmaterial->update($request->validated());

        return Redirect::route('pizzarawmaterials.index')
            ->with('success', 'Pizzarawmaterial updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Pizzarawmaterial::find($id)->delete();

        return Redirect::route('pizzarawmaterials.index')
            ->with('success', 'Pizzarawmaterial deleted successfully');
    }
}
