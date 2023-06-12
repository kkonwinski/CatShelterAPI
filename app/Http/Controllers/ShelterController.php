<?php

namespace App\Http\Controllers;

use App\Models\Shelter;
use Illuminate\Http\Request;

class ShelterController extends Controller
{
    public function index()
    {
        return Shelter::all();
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
        ]);

        return Shelter::create($validated);
    }
    
    public function show(Shelter $shelter)
    {
        return $shelter;
    }
    
    public function update(Request $request, Shelter $shelter)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
        ]);

        $shelter->update($validated);
        return $shelter;
    }
    
    public function destroy(Shelter $shelter)
    {
        $shelter->delete();
        return response()->json(null, 204);
    }
    
}
