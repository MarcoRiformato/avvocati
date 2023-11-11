<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
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
Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::view('/servizi', 'services')->name('services');
Route::view('/testimonianze', 'testimonials')->name('testimonials');
Route::view('/faq', 'faq')->name('faq');

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    
    //Admin Indexes    
    Route::get('admindashboard', [AdminController::class, 'index'])->name('admin.admindashboard');
    Route::get('/articles.index', [AdminController::class, 'indexArticles'])->name('admin.articles.index');
    Route::get('/categories.index', [AdminController::class, 'indexCategories'])->name('admin.categories.index');

    //Articles routes
    Route::get('/articles.create', [ArticleController::class, 'create'])->name('admin.articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles.{article}/edit', [ArticleController::class, 'edit'])->name('admin.articles.edit');
    Route::post('/articles/{article}', [ArticleController::class, 'update'])->name('admin.articles.update');
    Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('admin.articles.destroy');
    Route::delete('/articles/{article}/image', [ArticleController::class, 'destroyImage'])->name('admin.articles.destroy.image');

    //Categories
    Route::get('/categories.create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories.{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::post('/categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    Route::delete('/categproes/{category}/image', [CategoryController::class, 'destroyImage'])->name('admin.categproes.destroy.image');

    
    Route::delete('/media/{id}', [MediaController::class, 'destroy'])->name('media.destroy');
});
