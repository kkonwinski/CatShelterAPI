<?php

namespace App\Http\Controllers\Api;

use App\Models\Shelter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ShelterCollection;
use App\Http\Resources\ShelterResource;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\JsonResponse;

class ShelterController extends Controller
{
    public function index()
    {
        return new JsonResponse(Shelter::paginate()); 
        // new ShelterCollection(Shelter::paginate());
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
        return new ShelterResource($shelter);
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
