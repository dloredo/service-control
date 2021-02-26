<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified','user.active'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified','user.active'])
        ->resource('/services', ServiceController::class)->names('services');

Route::middleware(['auth:sanctum', 'verified','user.active'])
        ->get('/web_service', [UserController::class, "web_service"])->name('web_service');

Route::middleware(['auth:sanctum', 'verified','user.active'])
        ->get('/users', [UserController::class, "index"])->name('users');

Route::middleware(['auth:sanctum', 'verified','user.active'])
        ->put('/users/change-status/{id}', [UserController::class, "change_status"])->name('users.change_status');

Route::middleware(['auth:sanctum', 'verified','user.active'])
        ->get('/users/{id}/services', [UserController::class, "user_services"])->name('users.services');
