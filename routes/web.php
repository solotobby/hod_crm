<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [GeneralController::class, 'landingPage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user-roles/{name}', [HomeController::class, 'getUserByRoles'])->name('user.roles');
Route::get('/branches', [HomeController::class, 'getAllBranches'])->name('branches');
Route::get('/users-branch/{id}', [HomeController::class, 'getUserByBranches'])->name('user.branches');
