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

    // Show Create form
    public function create(){
        return view('todos.create', []);
    }

    // store Todo from create form
    public function store(Request $request){
        $formFields = $request->validate([
            "type" => "required",
            "course" => "required",
            "title" => "required",
            "date" => "required",
            "time" => "required",
        ]);

        Todo::create($formFields);
        // elstu
        return redirect('/');
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
