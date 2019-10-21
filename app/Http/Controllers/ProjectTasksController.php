<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required']);
        $project->addTask($attributes);

        return back();
    }

    public function update(Task $task)
    {
        if (request()->has('completed')) {
            $task->complete();
        } else {
            $task->incomplete();
        }

        return back();
    }
}
