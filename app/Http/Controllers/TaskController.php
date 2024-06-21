<?php

namespace App\Http\Controllers;

use App\Models\Tasks\CancelledTask;
use App\Models\Tasks\DoneTask;
use App\Models\Tasks\NewTask;
use App\Models\Tasks\ProgressTask;
use App\Models\Tasks\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {

    }
    public function loadAll()
    {

        $progressTasks = ProgressTask::all();
        $newTasks = NewTask::all();
        $doneTasks = DoneTask::all();
        $cancelledTasks = CancelledTask::all();
        $tasks = $progressTasks->merge($newTasks)->merge($doneTasks)->merge($cancelledTasks);


        return view('admin.tasks',compact('tasks'));
    }
    public function loadProgress()
    {

        $tasks = ProgressTask::all();

        return view('admin.tasks',compact('tasks'));
    }

    public function loadDone()
    {
        $tasks = DoneTask::all();

        return view('admin.tasks',compact('tasks'));
    }

    public function loadNew()
    {

        $tasks = NewTask::all();

        return view('admin.tasks',compact('tasks'));

    }

    public function loadCancelled()
    {

        $tasks = CancelledTask::all();

        return view('admin.tasks',compact('tasks'));
    }

    public function show($id)
    {
        $task = ProgressTask::find($id)
            ?? NewTask::find($id)
            ?? DoneTask::find($id)
            ?? CancelledTask::find($id);

        if ($task) {
            return view('admin.show_task', compact('task'));
        } else {
            abort(404, 'Task not found');
        }
    }

    public function updateStatus(Request $request, $id)
    {
        $task = ProgressTask::find($id)
            ?? NewTask::find($id)
            ?? DoneTask::find($id)
            ?? CancelledTask::find($id);

        // Оновлюємо статус
        $task->status = $request->status;
        $task->save();

        return response()->json(['success' => 'Status updated successfully']);
    }

    public function create()
    {
        return view('admin.create_task');
    }

    public function storeNewTask(Request $request)
    {
        // Валідація даних
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'deadline' => 'required|date',
            'created_at' => 'nullable|timestamp',
            'updated_at' => 'nullable|timestamp',
            'client_id' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        NewTask::create($validated);

        return redirect()->route('tasks.new')->with('success', 'Task created successfully.');
    }
}
