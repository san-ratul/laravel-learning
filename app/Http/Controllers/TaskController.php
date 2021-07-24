<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {

    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
       Task::create($request->all());
       return "Task Stored";
    }

}
