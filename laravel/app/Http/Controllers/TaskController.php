<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        /** @var User $user */
        $user = Auth::user();
        $tasks = $user->tasks()->with('category')->latest()->paginate(10);
        
        return view('tasks.index', compact('tasks'));
    }

    public function store()
    {
    }

    public function create()
    {
    }

    public function edit()
    {
    }
    public function update()
    {
    }

    public function destroy()
    {
    }
}
