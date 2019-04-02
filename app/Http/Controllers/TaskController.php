<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Auth;

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

    public function store()
    {

    }

    public function destroy()
    {

    }
}
