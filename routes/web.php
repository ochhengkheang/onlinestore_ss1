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

Route::post('/admin/articles/deleteAll', [ArticleController::class, 'deleteAll']);

Route::view('/no-permission', 'admin.no-permission');

//Route::resource("/admin/articles", ArticleController::class)->middleware('age.checker');
// Route::resource("/admin/articles", ArticleController::class);
// Route::get('/admin/categories', function () {
//     return view('admin.categories.index');
// });

// Route::get('/admin/users', function () {
//     return view('admin.users.index');
// });

Route::group(['middleware'=>['age.checker']], function (){
    Route::resource("/admin/articles", ArticleController::class);

    Route::get('/admin/categories', function () {
        return view('admin.categories.index');
    });

    Route::get('/admin/users', function () {
        return view('admin.users.index');
    });
});

Route::get('/session/create', [ArticleController::class, 'createUserSession']);
Route::get('/session/show', [ArticleController::class, 'useUserSession']);
Route::get('/session/delete', [ArticleController::class, 'deleteUserSession']);
