<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubcategoryController;

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
        Route::get('/manage',[CouponController::class, 'index'])->name('coupon.manage');
        Route::get('/edit/{id}',[CouponController::class, 'edit'])->name('coupon.edit');
        Route::post('/update/{id}',[CouponController::class, 'update'])->name('coupon.update');
        Route::get('/delete/{id}',[CouponController::class, 'destroy'])->name('coupon.delete');
    });
    Route::group(['prefix' => 'category'], function(){
        Route::get('/manage', [CategoryController::class, 'index'])->name('admin.category');
    });
    Route::group(['prefix' => 'subcategory'], function(){
        Route::get('/manage', [SubcategoryController::class, 'index'])->name('admin.subcategory');
    });

 });


Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
