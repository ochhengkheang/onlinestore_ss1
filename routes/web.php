<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/categories', function () {
    return view('admin.categories.index');
});

Route::get('/admin/users', function () {
    return view('admin.users.index');
});

Route::resource("/admin/articles", ArticleController::class);


