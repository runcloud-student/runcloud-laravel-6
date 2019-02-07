<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Scheduling;

class SchedulingController extends Controller
{
    public function index(){

        $data = Scheduling::all();
        return view('scheduling', compact(['data']));
    }
}
