<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CouponController;

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
Route::get('category', function(){
    return view('backend.pages.category.index');
})->name('admin.categories');

Route::group(['prefix' => 'admin'], function() {

    Route::group(['prefix' => 'coupon'], function(){
        Route::get('/create',[CouponController::class, 'create'])->name('coupon.create');
        Route::post('/add',[CouponController::class, 'store'])->middleware(['auth'])->name('coupon.add');
    });
 });
// Route::group(['prefix' => 'coupon'], function() {

//     Route::get('/create',[CouponController::class, 'create'])->name('create');
//     Route::get('/manage',[CouponController::class, 'index'])->name('manage');
//     Route::post('/add',[CouponController::class, 'store'])->middleware(['auth'])->name('add');
//     Route::get('/edit/{id}',[CouponController::class, 'edit'])->name('edit');
//     Route::post('/update/{id}',[CouponController::class, 'update'])->name('update');
//     Route::get('/delete/{id}',[CouponController::class, 'destroy'])->name('delete');
// });



Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
