<?php

use App\Models\Menu;
use App\Models\WeeklyMenu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\WeeklyMenuController;
use App\Http\Controllers\AddressUserController;
use App\Http\Controllers\Dashboard\DBController;
use App\Http\Controllers\Dashboard\AddressController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\RevenueController;
use App\Http\Controllers\Dashboard\CustomerController;
use App\Http\Controllers\Dashboard\OrderListController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Dashboard\LiveProductController;
use App\Http\Controllers\Dashboard\BundlingMenuController;
use App\Http\Controllers\Dashboard\PromotionMenuController;

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

Route::get('/', [Controller::class, 'home']);

Route::get('/home', [Controller::class, 'home']);

Route::get('/weekly_menu', [WeeklyMenuController::class, 'index']);

Route::get('/bundling/{bundling}', [Controller::class, 'bundling']);

Route::get('/keranjang', [CartController::class, 'index']);
Route::post('/cart/create', [CartController::class, 'add_to_cart']);
Route::delete('/cart/delete/{id}', [CartController::class, 'delete_cart']);
Route::post('/cart/bundling_create', [CartController::class, 'bundling_to_cart']);

Route::get('/check_out', [CheckOutController::class, 'index']);
Route::get('/rincian_pesanan/{id}', [CheckOutController::class, 'invoice']);

Route::get('/alamat_saya', [AddressUserController::class, 'index']);
Route::post('/change/my_address', [AddressUserController::class, 'update_selected_address']);

// route profile
Route::get('/profil_saya', [ProfileController::class, 'profile_saya'])->middleware('auth');
Route::post('/update_profile', [ProfileController::class, 'update_profile']);

    // address user
    Route::get('/tambah_alamat', [ProfileController::class, 'add_address']);
    Route::post('/create_address', [ProfileController::class, 'create_address_user']);
    Route::get('/get_districts', [ProfileController::class, 'show_district']);
    Route::get('/ubah_alamat/{id}', [ProfileController::class, 'edit_address']);
    Route::post('/update_address/{id}', [ProfileController::class, 'update_address_user']);
    Route::delete('/delete_address/{id}', [ProfileController::class, 'delete_address_user']);
// route profile

Route::get('/rincian_pesanan', function() {
    return view('rincian-pesanan');
});

// Route::get('/detail_menu', function() {
//     return view('product');
// });

Route::get('/detail/{menu:name}', [Controller::class, 'detail_menu']);

Route::get('/login', [AuthController::class, 'login'])->name('no-partials');
Route::get('/register', [AuthController::class, 'register'])->name('no-partials');

Route::post('/auth', [AuthController::class, 'auth']);
Route::post('/registration', [AuthController::class, 'registration']);
Route::post('/registration', [AuthController::class, 'registration']);
Route::post('/logout', [AuthController::class, 'logout']);

// dashboard

// dashboard-home
Route::get('/dashboard/home', [RevenueController::class, 'index'])->name('prefix-dashboard');
// dashboard-home

// route product
Route::get('/dashboard/product', [ProductController::class, 'dashboard_product'])->name('prefix-dashboard');
Route::get('/dashboard/edit_product', [LiveProductController::class, 'show'])->name('prefix-dashboard');
Route::post('/dashboard/live_product/{id}', [LiveProductController::class, 'update_liveproduct']);

Route::get('/dashboard/product/tambah_menu/{section_number}/{type}', [ProductController::class, 'tambah_menu'])->name('prefix-dashboard');
Route::get('/dashboard/product/menu/{section_number}/{type}/{id}', [ProductController::class, 'edit_menu'])->name('prefix-dashboard');
Route::post('/dashboard/product/menu', [ProductController::class, 'create_menu']);
Route::post('/dashboard/product/menu/{id}', [ProductController::class, 'update_menu']);
Route::delete('/dashboard/product/menu/{id}', [ProductController::class, 'delete_menu']);

Route::post('/further_information/update/{id}', [ProductController::class, 'update_furtherinformation']);

Route::post('/to_sent/create/{id}', [ProductController::class, 'create_tosent']);
Route::post('/to_sent/update/{id}', [ProductController::class, 'update_tosent']);
Route::delete('/to_sent/delete/{id}', [ProductController::class, 'delete_tosent']);

Route::post('/nutrition/update/{id}', [ProductController::class, 'update_nutrition']);

Route::post('/tutorial/create/{id}', [ProductController::class, 'create_tutorial']);
Route::post('/tutorial/update/{id}', [ProductController::class, 'update_tutorial']);
Route::delete('/tutorial/delete/{id}', [ProductController::class, 'delete_tutorial']);

Route::get('/dashboard/product/live_to_promote', [PromotionMenuController::class, 'index'])->name('prefix-dashboard');
Route::post('/change/promotion/{id}', [PromotionMenuController::class, 'change_promotion']);

Route::get('/dashboard/bundling/{bundling}', [BundlingMenuController::class, 'index'])->name('prefix-dashboard');
Route::post('/create/status_bundling', [BundlingMenuController::class, 'create_status_bundling']);
Route::post('/update/status_bundling', [BundlingMenuController::class, 'update_status_bundling']);
Route::post('/update/bundling/{bundling}', [BundlingMenuController::class, 'update_bundling'])->name('menu.updateBundlingStatus');
// route product

// route orderlist
Route::get('/dashboard/order_list', [OrderListController::class, 'index'])->name('prefix-dashboard');
Route::get('/order_list/{id}', [OrderListController::class, 'detail']);
Route::post('/order_list/{id}', [OrderListController::class, 'update_status']);
// route orderlist

Route::get('/dashboard/product/detail_paket', function() {
    return view('dashboard.product.detail-paket',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');




Route::get('/dashboard/product/archived_menu', function() {
    return view('dashboard.product.archived-menu',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

Route::get('/dashboard/review', function() {
    return view('dashboard.review',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');

// customer
Route::get('/dashboard/customer', [CustomerController::class, 'index'])->name('prefix-dashboard');

Route::get('/dashboard/customer/detail', function() {
    return view('dashboard.customer.detail',[
        "menus" => WeeklyMenu::all(),
    ]);
})->name('prefix-dashboard');
// customer

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
    Route::post('/dashboard/database/district_update/{id}', [AddressController::class, 'district_update']);
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
// Route::post('/order', [CheckOutController::class, 'payment']);

// send oreder wa.me
Route::post('/order', [CheckOutController::class, 'payment_link']);


// Route::post('/update_profile/{id}', [AuthController::class, 'update_profile']);
// Route::post('/update_pp/{id}', [AuthController::class, 'update_pp']);
// Route::post('/reset_password/{id}', [AuthController::class, 'reset_password']);