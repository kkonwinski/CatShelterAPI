<?php

namespace App\Http\Controllers\Api;

use App\Models\Worker;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkerRequest;
use App\Http\Resources\WorkerCollection;
use App\Http\Resources\WorkerResource;
use Illuminate\Http\Response;

class WorkerController extends Controller
{
    public function index(): WorkerCollection
    {
        return new WorkerCollection(Worker::paginate());
    }

    public function store(WorkerRequest $request): WorkerResource
    {
        return new WorkerResource(Worker::create($request->validated()));
    }

    public function show(Worker $worker): WorkerResource
    {
        return new WorkerResource($worker);
    }

    public function update(WorkerRequest $request, Worker $worker): WorkerResource
    {
        $worker->update($request->validated());
        return new WorkerResource($worker);
    }

    public function destroy(Worker $worker): Response
    {
        $worker->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
