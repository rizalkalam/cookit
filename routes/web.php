<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/weekly-menu', function() {
    return view('weekly_menu');
});

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);

// dashboard-profile-user
Route::get('/myaccount', [ProfileController::class, 'myaccount'])->name('authenticated');
Route::get('/member', [ProfileController::class, 'member'])->name('authenticated');
Route::get('/reset-password', [ProfileController::class, 'reset_password'])->name('authenticated');

Route::post('/auth', [AuthController::class, 'auth']);
Route::post('/registration', [AuthController::class, 'registration']);
Route::post('/registration', [AuthController::class, 'registration']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::post('/update_profile/{id}', [AuthController::class, 'update_profile']);
Route::post('/update_pp/{id}', [AuthController::class, 'update_pp']);
Route::post('/reset_password/{id}', [AuthController::class, 'reset_password']);