<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
{
    return Cat::all();
}

public function store(Request $request)
{
    return Cat::create($request->all());
}

public function show(Cat $cat)
{
    return $cat;
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