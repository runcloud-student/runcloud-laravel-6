<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\QueueTask;

use App\Jobs\ProcessQueue;

class QueueController extends Controller
{
    public function index(){
        $data = QueueTask::all();
        return view('queue', compact(['data']));
    }

    public function store(Request $request){
        $new = new QueueTask();
        $new->name = $request->name;
        $new->status = 'working';
        $new->save();

        // run queue to make process done
        ProcessQueue::dispatch($new);

        return back();
    }
}
