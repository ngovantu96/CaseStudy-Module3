<?php


use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SendMailController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});

    //trang chu
    Route::get('/', [HomeController::class,'getProductNew'])->name('home');
    Route::get('/shop', [HomeController::class,'viewShop'])->name('shop');
    Route::get('/banh-cake-baker', [HomeController::class,'getCakeBaker'])->name('cake-baker');
    Route::get('/banh-sinh-nhat', [HomeController::class,'getBirthDay'])->name('birth-day');
    Route::get('/cac-loai-banh', [HomeController::class,'getChopped'])->name('chopped');
    Route::get('/chi-tiet/{id}', [HomeController::class,'productDetail'])->name('product-detail');
    Route::get('/them-vao-gio-hang/{id}',[CartController::class,'addCart'])->name('add.cart');
    Route::get('/update-gio-hang/{id}',[CartController::class,'minusCart'])->name('minus.cart');
    Route::get('/chi-tiet-gio-hang',[CartController::class,'showCart'])->name('show.cart');
    Route::get('/delete-gio-hang/{id}',[CartController::class,'removeCart'])->name('delete.cart');

//    check out
    Route::get('/thong-tin-mua-hang',[CheckOutController::class,'showCheckOut'])->name('show.check-out');
    Route::post('/thanh-toan',[CheckOutController::class,'createOrder'])->name('order.payment');
    //search
    Route::post('/tim-kiem-san-pham', [HomeController::class,'search'])->name('search');




//

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'checkLogin'])->name('admin.login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    //user
    Route::prefix('user')->group(function(){
        Route::get('/',[UserController::class,'index'])->name('user.list');
        Route::get('/show-create',[UserController::class,'showCreate'])->name('user.create');
        Route::post('/create',[UserController::class,'store'])->name('user.store');
        Route::get('/edit/{id}',[UserController::class,'edit'])->name('user.edit');
        Route::post('/update/{id}',[UserController::class,'update'])->name('user.update');
        Route::get('/delete/{id}',[UserController::class,'delete'])->name('user.delete');
    });

//    customer
    Route::prefix('customer')->group(function(){
        Route::get('/',[CustomerController::class,'index'])->name('customer.list');
        Route::get('/show-create',[CustomerController::class,'showCreate'])->name('customer.create');
        Route::post('/create',[CustomerController::class,'store'])->name('customer.store');
        Route::get('/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
        Route::post('/update/{id}',[CustomerController::class,'update'])->name('customer.update');
        Route::get('/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
    });

//category
    Route::prefix('category')->group(function(){
        Route::get('/',[CategoryController::class,'index'])->name('category.list');
        Route::post('/create',[CategoryController::class,'store'])->name('category.store');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        Route::post('/update/{id}',[CategoryController::class,'update'])->name('category.update');
        Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
    });
//role
    Route::prefix('role')->group(function(){
        Route::get('/',[RoleController::class,'index'])->name('role.list');
        Route::post('/create',[RoleController::class,'store'])->name('role.store');
        Route::get('/edit/{id}',[RoleController::class,'edit'])->name('role.edit');
        Route::post('/update/{id}',[RoleController::class,'update'])->name('role.update');
        Route::get('/delete/{id}',[RoleController::class,'delete'])->name('role.delete');
    });
//    product
    Route::prefix('product')->group(function(){
        Route::get('/',[ProductController::class,'index'])->name('product.list');
        Route::get('/show-create',[ProductController::class,'create'])->name('product.create');
        Route::post('/create',[ProductController::class,'store'])->name('product.store');
        Route::get('/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
        Route::post('/update/{id}',[ProductController::class,'update'])->name('product.update');
        Route::get('/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
    });

//order
    Route::prefix('order')->group(function(){
        Route::get('/',[OrderController::class,'index'])->name('order.list');
        Route::get('/create',[OrderController::class,'create'])->name('order.create');
        Route::get('/detail/{id}',[OrderController::class,'orderDetails'])->name('order.detail');
        Route::get('delete-order/{id}',[OrderController::class,'orderDelete'])->name('order.delete');
        Route::post('/order-status/{id}',[OrderController::class,'statusOrder'])->name('order.status');
        Route::get('wait',[OrderController::class,'waiting'])->name('order.waiting');
        Route::get('ship',[OrderController::class,'ship'])->name('order.ship');
        Route::get('success',[OrderController::class,'success'])->name('order.success');
        Route::get('cancel',[OrderController::class,'cancel'])->name('order.cancel');
    });

    //send mail
    Route::post('/send-mail',[SendMailController::class,'sendMail'])->name('send-mail');

});

