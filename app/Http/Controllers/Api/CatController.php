<?php

namespace App\Http\Controllers\Api;

use App\Models\Cat;
use App\Http\Controllers\Controller;
use App\Http\Requests\CatRequest;
use App\Http\Resources\CatCollection;
use App\Http\Resources\CatResource;

class CatController extends Controller
{
    public function index()
{
    return new CatCollection(Cat::paginate());
}

public function store(CatRequest $request)
{
    return new CatResource(Cat::create($request->validated()));
}

public function show(Cat $cat)
{
    return new CatResource($cat);
}

public function update(CatRequest $request, Cat $cat)
{
    $cat->update($request->validated());
    return new CatResource($cat);
}

public function destroy(Cat $cat)
{
    $cat->delete();
    return response()->json(null, 204);
}

}