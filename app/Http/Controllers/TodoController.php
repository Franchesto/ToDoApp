<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use MongoDB\BSON\UTCDateTime;

class TodoController extends Controller
{
    public function index()
    {
        $todos =  Auth::user()->todos()->with('tasks')->get();

        return View('todo.index', compact('todos'));
    }

    public function create()
    {
        return View('todo.create');
    }
    public function store(Request $request)
    {
        $todo = Todo::create([
            'date' => $request->date,
            'created_at' => Date("Y-m-d H:i:s"),
            'updated_at' => Date("Y-m-d H:i:s"),
            'user_id' => Auth::id()
        ]);
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Date("Y-m-d H:i:s"),
            'updated_at' => Date("Y-m-d H:i:s"),
            'todo_id' => $todo->id
        ]);

        return redirect(route('todos.index'));
    }
}
