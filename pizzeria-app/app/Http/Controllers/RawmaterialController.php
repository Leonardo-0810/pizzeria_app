<?php

namespace App\Http\Controllers;

use App\Models\Rawmaterial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RawmaterialRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RawmaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $rawmaterials = Rawmaterial::paginate();

        return view('rawmaterial.index', compact('rawmaterials'))
            ->with('i', ($request->input('page', 1) - 1) * $rawmaterials->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $rawmaterial = new Rawmaterial();

        return view('rawmaterial.create', compact('rawmaterial'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RawmaterialRequest $request): RedirectResponse
    {
        Rawmaterial::create($request->validated());

        return Redirect::route('rawmaterials.index')
            ->with('success', 'Rawmaterial created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $rawmaterial = Rawmaterial::find($id);

        return view('rawmaterial.show', compact('rawmaterial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $rawmaterial = Rawmaterial::find($id);

        return view('rawmaterial.edit', compact('rawmaterial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RawmaterialRequest $request, Rawmaterial $rawmaterial): RedirectResponse
    {
        $rawmaterial->update($request->validated());

        return Redirect::route('rawmaterials.index')
            ->with('success', 'Rawmaterial updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Rawmaterial::find($id)->delete();

        return Redirect::route('rawmaterials.index')
            ->with('success', 'Rawmaterial deleted successfully');
    }
}
