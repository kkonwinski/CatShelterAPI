<?php

namespace App\Http\Controllers\Api;

use App\Models\Cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CatCollection;
use App\Http\Resources\CatResource;
use Illuminate\Http\JsonResponse;

class CatController extends Controller
{
    public function index()
{
    return new JsonResponse(new CatCollection(Cat::paginate()));
}

public function store(Request $request)
{
    return Cat::create($request->all());
}

public function show(Cat $cat)
{
    return new CatResource($cat);
}

public function update(Request $request, Cat $cat)
{
    $cat->update($request->all());
    return $cat;
}

public function destroy(Cat $cat)
{
    $cat->delete();
    return response()->json(null, 204);
}

}