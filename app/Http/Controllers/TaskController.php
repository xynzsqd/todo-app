<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class TaskController extends Controller
{
    public function index(Request $request)
    {

        // TODO: либо оставить как есть, либо сделать сохранение инпутов через сессию (попробовать хотя бы)
        $validated = $request->validate([
            'search' => ['nullable', 'string'],
            'filter' => ['nullable', 'string', 'in:all,incompleted,completed'],
        ]);

        session()->put('search', $validated['search']  ?? null);
        session()->put('filter', $validated['filter']  ?? null);

        $tasks = Task::query()
            ->when($validated['search'] ?? null, function (Builder $query, $search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->when($validated['filter'] ?? null, function (Builder $query, $filter) {
                switch ($filter) {
                    case 'incompleted':
                        $query->where('isCompleted', false);
                        break;
                    case 'completed':
                        $query->where('isCompleted', true);
                        break;
                }
            })
            ->get();


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


    public function update(Request $request, Task $task)
    {
        $task->isCompleted = !$task->isCompleted;
        $task->save();
        return 'succes!';
    }
    public function delete(Request $request, Task $task = null)
    {
        if ($task) {
            $task->delete();
        } else {
            Task::query()->where('isCompleted', true)->delete();
        }
        return 'success';
    }
}
