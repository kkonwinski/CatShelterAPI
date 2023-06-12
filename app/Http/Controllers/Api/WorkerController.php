<?php

namespace App\Http\Controllers\Api;

use App\Models\Worker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\WorkerCollection;
use App\Http\Resources\WorkerResource;
use Illuminate\Http\JsonResponse;

class WorkerController extends Controller
{
    public function index()
    {
        return new JsonResponse(Worker::paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Worker::create($request->all());
    }
    
    public function show(Worker $worker)
    {
        return new WorkerResource($worker);
    }
    
    public function update(Request $request, Worker $worker)
    {
        $worker->update($request->all());
        return $worker;
    }
    
    public function destroy(Worker $worker)
    {
        $worker->delete();
        return response()->json(null, 204);
    }
}
