<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShelterRequest;
use App\Models\Shelter;
use App\Http\Resources\ShelterCollection;
use App\Http\Resources\ShelterResource;
use Illuminate\Http\Response;

class ShelterController extends Controller
{
    public function index(): ShelterCollection
    {
        return new ShelterCollection(Shelter::paginate());
    }
    
    public function store(ShelterRequest $request): ShelterResource
    {
        return new ShelterResource(Shelter::create($request->validated()));
    }
    
    public function show(Shelter $shelter): ShelterResource
    {
        return new ShelterResource($shelter);
    }
    
    public function update(ShelterRequest $request, Shelter $shelter): ShelterResource
    {
        $shelter->update($request->validated());
        return new ShelterResource($shelter);
    }
    
    public function destroy(Shelter $shelter): Response
    {
        $shelter->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }    
}
