<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        $todos =  Auth::user()->todos()->with('tasks')->get();

        return View('todo.index', compact('todos'));
    }
}
