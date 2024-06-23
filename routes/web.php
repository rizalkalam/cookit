<?php

use App\Models\WeeklyMenu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\DBController;
use App\Http\Controllers\Dashboard\AddressController;
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

// route profile
Route::get('/profil_saya', [ProfileController::class, 'profile_saya']);
Route::post('/update_profile', [ProfileController::class, 'update_profile']);
Route::get('/tambah_alamat', [ProfileController::class, 'add_address']);
Route::post('/create_address', [ProfileController::class, 'create_address_user']);
Route::get('/get_districts', [ProfileController::class, 'show_district']);
Route::get('/ubah_alamat/{id}', [ProfileController::class, 'edit_address']);
Route::post('/update_address/{id}', [ProfileController::class, 'update_address_user']);
// route profile

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

// route db-bahan-dikirim
    Route::get('/dashboard/database/bahan_dikirim', [DBController::class, 'bahan_dikirim'])->name('prefix-dashboard');
    Route::get('/dashboard/database/tambah_bahan', [DBController::class, 'add_bahan'])->name('prefix-dashboard');
    Route::post('/dashboard/database/bahan_dikirim/create', [DBController::class, 'create_bahan_dikirim']);
    Route::get('/dashboard/database/bahan_dikirim/{id}', [DBController::class, 'detail_bahan'])->name('prefix-dashboard');
    Route::post('/dashboard/database/bahan_dikirim/{id}', [DBController::class, 'update_bahan_dikirim']);
    Route::delete('/dashboard/database/bahan_dikirim/{id}', [DBController::class, 'delete_bahan_dikirim']);
// route db-bahan-dikirim

// route db-satuan-unit
Route::get('/dashboard/database/satuan_unit', [DBController::class, 'satuan_unit'])->name('prefix-dashboard');
Route::post('/dashboard/database/satuan_unit/create', [DBController::class, 'create_satuan_unit']);
Route::delete('/dashboard/database/satuan_unit/{id}', [DBController::class, 'delete_satuan_unit']);
// route db-satuan-unit

// route db-data-alamat
Route::get('/dashboard/database/data_alamat', [AddressController::class, 'data_alamat'])->name('prefix-dashboard');
Route::post('/dashboard/database/data_alamat/create', [AddressController::class, 'create_data_alamat']);
Route::get('/dashboard/database/data_alamat/{id}', [AddressController::class, 'edit_alamat'])->name('prefix-dashboard');
Route::post('/dashboard/database/data_alamat/{id}', [AddressController::class, 'update_data_alamat']);
Route::delete('/dashboard/database/data_alamat/{id}', [AddressController::class, 'delete_data_alamat']);

    // district
    Route::post('/dashboard/database/district/{id}', [AddressController::class, 'district_add']);
    Route::delete('/dashboard/database/district/{id}', [AddressController::class, 'district_del']);

// route db-data-alamat

// end-dashboard

Route::get('/email/verify', function() {
    return redirect('/register')->with('success', 'Please check your email to complete the registration.');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/verified');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/verified', function() {
    return 'Email registered, login now';
})->middleware(['auth', 'verified']);

// payment
Route::post('/order', [PaymentController::class, 'create']);


// Route::post('/update_profile/{id}', [AuthController::class, 'update_profile']);
// Route::post('/update_pp/{id}', [AuthController::class, 'update_pp']);
// Route::post('/reset_password/{id}', [AuthController::class, 'reset_password']);