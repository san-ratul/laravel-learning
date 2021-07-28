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
        Task::create([
            'title' => $request->title,
        ]);
        return redirect()->route('tasks.index')->with('success', 'Task added successfully');
    }

    public function edit(Task $task){
        return view('tasks.edit', compact('task'));
    }

    public function update(Task $task, Request $request){
        $this->validate($request, [
            'title' => ['required', 'unique:tasks,title,'.$task->id]
        ]);

        $task->update([
            'title' => $request->title,
            'completed' => $request->completed,
        ]);
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }

}
