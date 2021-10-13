<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use App\Models\Tag;
use App\Models\StatusList;
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
            'tags' => $this->getTags(),
            'status' => $this->getStatus()
        ]);
    }

    public function getTags() {
        $tags = Tag::all();
        return $tags;
    }

    public function getStatus() {
        $status = StatusList::all();
        return $status;
    }
}
