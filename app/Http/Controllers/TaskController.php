<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::latest()->get();
//        return view('tasks.index')->with('tasks', $tasks);
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'unique:tasks']
        ]);
        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task added successfully');
    }

}
