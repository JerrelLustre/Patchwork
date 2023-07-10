<?php

use App\Models\Todo;
use App\Http\Controllers\todoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// dashboard
Route::get('/', [todoController::class, 'index']);

// Show all courses
Route::get('/courses', function () {
    return view('courses');
});

// Login Form
Route::get('/login', function () {
    return view('user.login');
});

// Signup
Route::get('/signup', function () {
    return view('user.signup');
});


// Edit Answer
Route::get('/todos/edit/{todo}', function (Todo $todo) {

        return view('edit', [
            'todo' => $todo
        ]);

    
});

// Delete Todo
Route::get('todos/delete/{id}', function () {
    return view('delete');
});


