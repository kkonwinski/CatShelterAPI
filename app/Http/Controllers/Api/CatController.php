<?php

namespace App\Http\Controllers\Api;

use App\Models\Cat;
use App\Http\Controllers\Controller;
use App\Http\Requests\CatRequest;
use App\Http\Resources\CatCollection;
use App\Http\Resources\CatResource;
use Illuminate\Http\Response;

class CatController extends Controller
{
    public function index(): CatCollection
    {
        return new CatCollection(Cat::paginate());
    }

    public function store(CatRequest $request): CatResource
    {
        return new CatResource(Cat::create($request->validated()));
    }

    public function show(Cat $cat): CatResource
    {
        return new CatResource($cat);
    }

    public function update(CatRequest $request, Cat $cat): CatResource
    {
        $cat->update($request->validated());
        return new CatResource($cat);
    }

    public function destroy(Cat $cat): Response
    {
        $cat->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
