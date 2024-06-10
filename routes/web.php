<?php

use App\Models\WeeklyMenu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
    return view('home', [
        "menus" => WeeklyMenu::all(),
    ]);
});

Route::get('/home', function() {
    return view('home', [
        "menus" => WeeklyMenu::all(),
    ]);
});

Route::get('/weekly-menu', function() {
    return view('weekly_menu');
});

Route::get('/detail/{menu:menu_name}', [Controller::class, 'detail_menu']);

Route::get('/login', [AuthController::class, 'login'])->name('no-partials');
Route::get('/register', [AuthController::class, 'register'])->name('no-partials');

Route::post('/auth', [AuthController::class, 'auth']);
Route::post('/registration', [AuthController::class, 'registration']);
Route::post('/registration', [AuthController::class, 'registration']);
Route::post('/logout', [AuthController::class, 'logout']);

// dashboard
Route::get('/dashboard/home', function() {
    return view('dashboard.home');
})->name('prefix-dashboard');

Route::get('/dashboard/product', function() {
    return view('dashboard.product.product',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

Route::get('/dashboard/product/edit_product', function() {
    return view('dashboard.product.edit-product',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

Route::get('/dashboard/product/edit_menu', function() {
    return view('dashboard.product.edit-menu',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

Route::get('/dashboard/order_list', function() {
    return view('dashboard.order-list',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

Route::get('/dashboard/review', function() {
    return view('dashboard.review',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

Route::get('/dashboard/customer', function() {
    return view('dashboard.customer',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');
// end-dashboard

Route::get('/email/verify', function() {
    return redirect('/register')->with('success', 'Please check your email to complete the registration.');
})->middleware('auth')->name('verification.notice');

Route::post('/update_profile/{id}', [AuthController::class, 'update_profile']);
Route::post('/update_pp/{id}', [AuthController::class, 'update_pp']);
Route::post('/reset_password/{id}', [AuthController::class, 'reset_password']);

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/verified');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/verified', function() {
    return 'Email registered, login now';
})->middleware(['auth', 'verified']);

// payment
Route::post('/order', [PaymentController::class, 'create']);