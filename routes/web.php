<?php

use App\Models\Todo;
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
Route::get('/', function () {
    return view('home', [
        'todos' => Todo::all()
    ]);
});

// Show all courses
Route::get('/courses', function () {
    return view('courses');
});

// Login Form
Route::get('/login', function () {
    return view('login');
});

// Signup
Route::get('/signup', function () {
    return view('signup');
});

// Show upcoming exams and assignments
Route::get('/todos', function () {
    return view('todos');
});


