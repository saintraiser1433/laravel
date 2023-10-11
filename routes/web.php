<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//index - show all students
//show - show single data student
//create - show a form to a new user
//store - Store a data
//edit - Show a form to edit a data
//update - update a data
//destroy - delete a data


Route::get('/', [StudentController::class, 'index'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [UserController::class, 'register']);
Route::post('/login/process', [UserController::class, 'process']);
Route::post('/store', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);
// Route::get('/student/{studId}', [StudentController::class, 'show']);

// Route::get('/studentlist/{id}', [StudentController::class, 'list']);
