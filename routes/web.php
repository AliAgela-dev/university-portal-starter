<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Authentication (PROVIDED — you don't need to change this)
|--------------------------------------------------------------------------
| A simple login system is wired up for you:
|     GET  /login      shows the login form
|     POST /login      signs the user in
|     GET  /register   shows the sign-up form
|     POST /register   creates an account
|     POST /logout     signs them out
|     GET  /dashboard  the page you land on after logging in
|
| The whole portal is protected: every controller requires a logged-in user
| (see app/Http/Controllers/Controller.php). Sign in with the seeded account
| created by the database seeder:   admin@uni.edu  /  password
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::view('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| YOUR TASK — register the portal routes
|--------------------------------------------------------------------------
| The five controllers above are written for you. Register a full set of
| CRUD routes for each. The resource names must be:
|     departments, students, courses, professors, enrollments
|
| One worked example — write the other four yourself:
|     // Route::resource('departments', DepartmentController::class)->except('show');
*/

// TODO: write your routes below this line.
Route::get("/courses",[CourseController::class,'index']);
