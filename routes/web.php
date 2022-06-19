<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
//登入
Route::get('/admin', [AdminController::class, 'get_login_page'])->name('get_login_page');
Route::post('/admin', [AdminController::class, 'post_login_page'])->name('post_login_page');
//通知
Route::get('/admin/notiHome', [AdminController::class, 'get_notiHome_page'])->name('get_notiHome_page');
Route::get('/admin/notiDetail', [AdminController::class, 'get_notiDetail_page'])->name('get_notiDetail_page');
Route::post('/admin/notiDetail', [AdminController::class, 'post_notiDetail_page'])->name('post_notiDetail_page');

//現有店家
Route::get('/admin/storeHome', [AdminController::class, 'get_storeHome_page'])->name('get_storeHome_page');
Route::post('/admin/storeHome', [AdminController::class, 'get_storeHome_data'])->name('get_storeHome_data');
Route::post('/admin/storeHome_insert', [AdminController::class, 'insert_storeHome_data'])->name('insert_storeHome_data');

Route::get('/admin/storeDetail', [AdminController::class, 'get_storeDetail_page'])->name('get_storeDetail_page');
Route::post('/admin/storeDetail', [AdminController::class, 'get_storeDetail_data'])->name('get_storeDetail_data');
Route::post('/admin/storeDetail_insert', [AdminController::class, 'insert_storeDetail_data'])->name('insert_storeDetail_data');

//熱門餐廳功能
Route::post('/admin/getStoreData', [AdminController::class, 'get_store_data'])->name('get_store_data');

//主畫面
Route::get('/', [HomeController::class, 'get_home_page'])->name('get_home_page');
Route::post('/insert_problem_data', [HomeController::class, 'insert_problem_data'])->name('insert_problem_data');
Route::post('/insert_comment_data', [HomeController::class, 'insert_comment_data'])->name('insert_comment_data');
Route::post('/insert_recommend_data', [HomeController::class, 'insert_recommend_data'])->name('insert_recommend_data');

