<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\Client;  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $clients = Client::with('user')->paginate();

        return response()->json($clients);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
        'address' => 'required|string|max:255',
        'phone' => 'required|string|unique:clients,phone',
        'users_id' => 'required|exists:users,id',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }
        
         $client = Client::create($request->all()); 
         return response()->json([
            'message' => 'Client created successfully.', 
            'client' => $client                          
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
          $client = Client::with('user')->findOrFail($id);
          return response()->json(['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $client = Client::findOrFail($id);

         $client->update($request->all()); 
        return response()->json([
            'message' => 'Client updated successfully.', 
            'client' => $client        
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          Client::destroy($id); 

        $clients = Client::with('user')->paginate();
        return response()->json([
            'message' => 'Client deleted successfully.' 
        ]);
    }
}
