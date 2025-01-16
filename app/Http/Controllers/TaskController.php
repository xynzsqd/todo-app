<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::query()->select('id', 'title', 'isCompleted')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:50'],
        ]);

        Task::query()->create($validatedData);

        return redirect()->route('task.index');
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function delete(string $id)
    {
        //
    }
}
