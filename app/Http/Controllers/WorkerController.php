<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Worker;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function show(){
        $workersFirstLevel = Worker::select('name', 'position')
                            -> where('hierarchy_level', '=', '1')
                            ->get();

        dump($workersFirstLevel);

        $workersSecondLevel = Worker::select('name', 'position')
        -> where('hierarchy_level', '=', '2')
        ->get();

        dump($workersSecondLevel);
    }
}
