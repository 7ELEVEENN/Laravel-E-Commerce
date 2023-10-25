<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/', [HomeController::class, 'index']);

route::get('/product', [AdminController::class, 'product']);

route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);

route::get('/showproduct', [AdminController::class, 'showproduct']);

route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

route::get('/updateview/{id}', [AdminController::class, 'updateview']);

route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);

route::get('/search', [HomeController::class, 'search']);

route::post('/addcart/{id}', [HomeController::class, 'addcart']);

route::get('/showcart', [HomeController::class, 'showcart']);

route::get('/delete/{id}', [HomeController::class, 'deletecart']);


route::get('/showorder', [AdminController::class, 'showorder']);

route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);

route::get('/shiporder/{id}', [AdminController::class, 'shiporder']);

route::get('/allbooks', [HomeController::class, 'allbooks']);

Route::get('/about', [HomeController::class, 'about'])->name('user.about');

Route::get('/contact', [HomeController::class, 'contact'])->name('user.contact');

route::post('/order', [HomeController::class, 'cash_on_delivery']);

route::get('/showmyorder', [HomeController::class, 'showmyorder']);

route::get('/cancel_order/{id}', [HomeController::class, 'cancel_order']);
