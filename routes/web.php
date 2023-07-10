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




// Login Form
Route::get('/login', function () {
    return view('user.login');
});

// Signup
Route::get('/signup', function () {
    return view('user.signup');
});

// Homepage, show all todos
Route::get('/', [todoController::class, 'index']);

// Create
Route::get('/todos/create', [todoController::class,'create']);

// Store todo
Route::post('/todos', [todoController::class, 'store']);

// Edit Todo


// Delete Todo
Route::get('todos/delete/{id}', function () {
    return view('delete');
});


// Show all courses
Route::get('/courses', function () {
    return view('courses');
});