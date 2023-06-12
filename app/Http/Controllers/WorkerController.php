<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        return Worker::all();
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
        return $worker;
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
