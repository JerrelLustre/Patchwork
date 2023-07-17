<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class todoController extends Controller
{



    // Show all todos
    public function index()
    {
        $user = auth()->user();
        // Specify the target date
        $targetDate = date('Y-m-d');

        // Find all upcoming todos within 5 days
        $endDate = date('Y-m-d', strtotime('+5 days', strtotime($targetDate)));

        // Query the database
        $count = Todo::latest()
            ->whereBetween('date', [$targetDate, $endDate])
            ->where('user_id', $user->id)
            ->count();
            
        return view('todos.index', [
            'todos' => Todo::latest()
            ->where('user_id', $user->id)
            ->with('user')
            ->filter(request(['type']))
            ->get(),
            'count' => $count
        ]);
    }


    // Show Create form
    public function create()
    {
        return view('todos.create', []);
    }

    // store Todo from create form
    public function store(Request $request)
    {
        $formFields = $request->validate([
            "type" => "required",
            "course" => "required",
            "title" => ["required", "max:100"],
            "date" => ["required", "date"],
            "time" => "required",
        ]);

        $formFields['user_id'] = auth()->id();

        Todo::create($formFields);
        return redirect('/');
    }

    // show form to edit todo
    public function edit(Todo $todo)
    {
        // Only show form if the todo's user id is equal to the logged in user id
        // Prevents accessing different ids from the url
        if ($todo->user_id == Auth::id()){
        return view('todos.edit', ['todo' => $todo]);
        }else {
        return redirect('/');
        }
    }
    // Update todo with "edit" info
    public function update(Request $request, Todo $todo)
    {
        $formFields = $request->validate([
            "type" => "required",
            "course" => "required",
            "title" => ["required", "max:100"],
            "date" => "required",
            "time" => "required",
        ]);

        $todo->update($formFields);

        return redirect('/');
    }

    // Show delete form
    public function deleteConfirm(Todo $todo)
    {
        // Only show form if the todo's user id is equal to the logged in user id
        // Prevents accessing different ids from the url
        if ($todo->user_id == Auth::id()){
            return view('todos.delete', ['todo' => $todo]);
            }else {
            return redirect('/');
            }
    }

    // Delete todo
    public function delete(Request $request, Todo $todo)
    {
        $todo->delete();
        return redirect('/');
    }
}