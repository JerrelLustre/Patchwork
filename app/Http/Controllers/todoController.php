<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class todoController extends Controller
{
    // Show all todos
    public function index(){
        return view('todos.index', [
            'todos' => Todo::latest()->filter(request(['type']))->get()
        ]);
    }

    // Create Todo
    public function create(){

    }
    // store Todo
    public function store(){

    }
    // show form to edit todo
    public function edit(){

    }
    // Update todo with "edit" info
    public function update(){

    }

    // Delete todo

    public function delete(){

    }
}
