<?php

namespace App\Http\Controllers\Api;

use App\Models\Worker;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkerRequest;
use App\Http\Resources\WorkerCollection;
use App\Http\Resources\WorkerResource;

class WorkerController extends Controller
{
    public function index()
    {
        return new WorkerCollection(Worker::paginate());
    }

    public function store(WorkerRequest $request)
    {
        return new WorkerResource(Worker::create($request->validated()));
    }
    
    public function show(Worker $worker)
    {
        return new WorkerResource($worker);
    }
    
    public function update(WorkerRequest $request, Worker $worker)
    {
        $worker->update($request->validated());
        return new WorkerResource($worker);
    }
    
    public function destroy(Worker $worker)
    {
        $worker->delete();
        return response()->json(null, 204);
    }
}
