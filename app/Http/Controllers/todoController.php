<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class todoController extends Controller
{



    // Show all todos
    public function index()
    {
        // Specify the target date
        $targetDate = date('Y-m-d');

        // Find all upcoming todos within 5 days
        $endDate = date('Y-m-d', strtotime('+5 days', strtotime($targetDate)));

        // Query the database
        $count = Todo::latest()
            ->whereBetween('date', [$targetDate, $endDate])
            ->count();
            
        return view('todos.index', [
            'todos' => Todo::latest()->filter(request(['type']))->get(),
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
            "title" => "required",
            "date" => "required",
            "time" => "required",
        ]);

        Todo::create($formFields);
        return redirect('/');
    }
    // show form to edit todo
    public function edit(Todo $todo)
    {
        return view('todos.edit', ['todo' => $todo]);
    }
    // Update todo with "edit" info
    public function update(Request $request, Todo $todo)
    {
        $formFields = $request->validate([
            "type" => "required",
            "course" => "required",
            "title" => "required",
            "date" => "required",
            "time" => "required",
        ]);

        $todo->update($formFields);

        return redirect('/');
    }

    // Show delete form
    public function deleteConfirm(Todo $todo)
    {
        return view('todos.delete', ['todo' => $todo]);
    }

    // Delete todo
    public function delete(Request $request, Todo $todo)
    {
        $todo->delete();
        return redirect('/');
    }
}