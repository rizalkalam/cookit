<?php

use App\Models\WeeklyMenu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\DBController;
use App\Http\Controllers\Dashboard\ProductController;
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

Route::get('/weekly_menu', function() {
    return view('weekly_menu');
});

Route::get('/bundling', function() {
    return view('bundling');
});

Route::get('/keranjang', function() {
    return view('keranjang');
});

Route::get('/check_out', function() {
    return view('check-out');
});

Route::get('/alamat_saya', function() {
    return view('address.alamat');
});

Route::get('/tambah_alamat', function() {
    return view('address.form-alamat');
});

Route::get('/profil_saya', function() {
    return view('profile');
});

Route::get('/rincian_pesanan', function() {
    return view('rincian-pesanan');
});

// Route::get('/detail_menu', function() {
//     return view('product');
// });

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

Route::get('/dashboard/product', [ProductController::class, 'dashboard_product'])->name('prefix-dashboard');

Route::get('/dashboard/product/detail_paket', function() {
    return view('dashboard.product.detail-paket',[
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

Route::get('/dashboard/product/live_to_promote', function() {
    return view('dashboard.product.live-to-promote',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

Route::get('/dashboard/product/archived_menu', function() {
    return view('dashboard.product.archived-menu',[
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
    return view('dashboard.customer.customer',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

Route::get('/dashboard/customer/detail', function() {
    return view('dashboard.customer.detail',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

Route::get('/dashboard/database', function() {
    return view('dashboard.database.database',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

// route db-profile-rasa
Route::get('/dashboard/database/profile_rasa', [DBController::class, 'profile_rasa'])->name('prefix-dashboard');
Route::post('dashboard/database/profile_rasa/create', [DBController::class, 'create_profile_rasa']);
Route::delete('/dashboard/database/profile_rasa/{id}', [DBController::class, 'delete_profile_rasa']);
// route db-profile-rasa

Route::get('/dashboard/database/bahan_dikirim', function() {
    return view('dashboard.database.bahan-dikirim',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

Route::get('/dashboard/database/bahan_dikirim/edit_bahan', function() {
    return view('dashboard.database.edit-bahan',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

Route::get('/dashboard/database/satuan_unit', function() {
    return view('dashboard.database.satuan-unit',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

Route::get('/dashboard/database/data_alamat', function() {
    return view('dashboard.database.data-alamat',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

Route::get('/dashboard/database/data_alamat/edit_alamat', function() {
    return view('dashboard.database.edit-alamat',[
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