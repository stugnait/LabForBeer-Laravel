<?php

namespace App\Http\Controllers;

use App\Models\Tasks\CancelledTask;
use App\Models\Tasks\DoneTask;
use App\Models\Tasks\NewTask;
use App\Models\Tasks\ProgressTask;

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
}
