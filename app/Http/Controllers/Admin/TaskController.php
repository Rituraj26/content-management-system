<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('admin.task.list')->with([
            'tasks' => $tasks,
        ]);
    }
}
