<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articlecontroller;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('articles', [ArticleController::class, 'index']);

Route::get('articles/new', [ArticleController::class, 'create']);

Route::get('articles/{id}', [ArticleController::class, 'show']);

Route::post('articles', [ArticleController::class, 'store']);
