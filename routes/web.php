<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;

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
    return Inertia::render('Dashboard', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    
    Route::get('admindashboard', [AdminController::class, 'index'])->name('admin.admindashboard');

    Route::get('/articles.index', [AdminController::class, 'indexArticles'])->name('admin.articles.index');
    Route::get('/articles.create', [ArticleController::class, 'create'])->name('admin.articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');

});
