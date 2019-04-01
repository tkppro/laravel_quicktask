<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Auth;
use App\Http\Requests\CreateTaskRequest;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())->get();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function store(CreateTaskRequest $request)
    {
        $user = Auth::user();
        $task = new Task($request->all());

        if ($user->tasks()->save($task)) {
            return redirect()->route('tasks.index')->with([
                'level' => 'success',
                'message' => trans('common.task.create.success'),
            ]);
        }
    }

    public function destroy()
    {

    }
}
