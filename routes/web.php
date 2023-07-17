<?php

// use App\Models\Todo;
use App\Http\Controllers\todoController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\courseController;

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



/* ---------------------------------- Users ---------------------------------- */

// Login Form
Route::get('/login', [userController::class,'login'] )->name('login');

// Login User

Route::post('/user/authenticate', [userController::class,'authenticate'] );


// Signup
Route::get('/signup', [userController::class,'create'] );

// Create new user
Route::post('/user', [userController::class,'store']);

// Logout
Route::post('/logout', [userController::class,'logout']);

// Only show site if logged in
Route::group(['middleware' => 'auth'], function(){

/* ---------------------------------- Todos --------------------------------- */

// Homepage, show all todos
Route::get('/', [todoController::class, 'index']
);

// Create
Route::get('/todos/create', [todoController::class,'create']);

// Store todo
Route::post('/todos', [todoController::class, 'store']);

// Edit Todo
Route::get('/todos/edit/{todo}', [todoController::class,'edit']);

// Update
Route::put('/todos/edit/{todo}', [todoController::class,'update']);

// Show delete form
Route::get('/todos/delete/{todo}', [todoController::class,'deleteConfirm']);

// Delete Todo
Route::delete('/todos/delete/{todo}', [todoController::class, 'delete']);

/* --------------------------------- Course --------------------------------- */

// Show all courses
Route::get('/courses', [courseController::class, 'showCourses']);


});
// Close authentication route group