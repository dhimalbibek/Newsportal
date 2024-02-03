<?php
namespace App\Http\Controllers;


// use App\Http\Controllers\HomePageController;
// use App\Http\Controllers\ListingPageController;
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

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ListingPageController;
// use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardPageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\DbController;

Route::get('/', [HomePageController::class, 'index']);
Route::get('front/listing', [ListingPageController::class, 'index']);
Route::get('front/details', [DetailsPageController::class, 'index']);
// Route::get('admin/details', [DashboardController::class, 'index']);
// Route::get('admin/details', [DashboardPageController::class, 'bca']);
Route::get('admin/details', [DashboardPageController::class, 'bca'])->name('admin.dashboard');
// Route::get('/category', 'Admin\CategoryController@index');
Route::get('admin/category', [CategoryController::class, 'index'])->name('admin.category.listing');
Route::get('admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::get('admin/category/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');

Route::get('front/master', function () {
    return view('front.master');
});
Route::get('front/details', function () {
    return view('front.details');
});
Route::get('admin/abc', function () {
    return view('admin.abc');
});
Route::get('/query', [DbController::class, 'index']);
Route::get('/joining', [DbController::class, 'joining']);
Route::get('/model', [DbController::class, 'modal']);

// Route::group(['prefix' => 'back'], function () {
//     Route::get('/', 'Admin\DashboardController@index');
// });

// Route::group(['prefix' => 'back', 'namespace' => 'Admin'], function () {
//     Route::get('/', 'DashboardPageController@bca');
// });

