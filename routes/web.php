<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginActivityController;
use App\Mail\RegistrationMail;
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

Route::get('/send-email', function () {
});

Route::get('/notify', [\App\Http\Controllers\NotificationController::class, 'notify']);
Route::get('/markasred/{id}', [\App\Http\Controllers\NotificationController::class, 'markasread'])->name('markasred');


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/home', function () {
//     return view('admin::home');
// })->middleware(['auth']);

require __DIR__ . '/auth.php';

Route::get('/redirect', [LoginController::class, 'redirect'])->middleware(['auth']);

Route::middleware(['auth'])->group(function () {
    // User
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/attend-employee', [UserController::class, 'attendEmployee'])->name('users.attend-employee');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::patch('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/login-activity', [LoginActivityController::class, 'index']);
});
