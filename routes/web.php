<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
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
Route::get('/', [HomeController::class, 'dashboard'])->name('/');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('cases', [CaseStudyController::class, 'index'])->name('cases.index');
Route::get('cases/{caseItem}', [CaseStudyController::class, 'show'])->name('cases.show');

Route::get('services', [ServiceController::class, 'index'])->name('services.index');

Route::get('services/{service}', [ServiceController::class, 'show'])->name('services.show');

//Services index pages
Route::get('appalti', [ServiceController::class, 'appalti'])->name('services.appalti');
Route::get('difesa', [ServiceController::class, 'difesa'])->name('services.difesa');
Route::get('partenariato', [ServiceController::class, 'partenariato'])->name('services.partenariato');
Route::get('controversie', [ServiceController::class, 'controversie'])->name('services.controversie');

//Appalti
Route::get('stazioni', [ServiceController::class, 'stazioni'])->name('services.detail.stazioni');
Route::get('professionisti', [ServiceController::class, 'professionisti'])->name('services.detail.professionisti');
Route::get('esecuzione', [ServiceController::class, 'esecuzione'])->name('services.detail.esecuzione');
Route::get('imprese', [ServiceController::class, 'imprese'])->name('services.detail.imprese');

Route::view('/servizi', 'services')->name('services');
Route::view('/faq', 'faq')->name('faq');

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    
    //Admin Indexes    
    Route::get('admindashboard', [AdminController::class, 'index'])->name('admin.admindashboard');
    Route::get('/articles.index', [AdminController::class, 'indexArticles'])->name('admin.articles.index');
    Route::get('/categories.index', [AdminController::class, 'indexCategories'])->name('admin.categories.index');
    Route::get('/cases.index', [AdminController::class, 'indexCases'])->name('admin.cases.index');
    Route::get('/services.index', [AdminController::class, 'indexServices'])->name('admin.services.index');
    Route::get('/testimonials.index', [AdminController::class, 'indexTestimonials'])->name('admin.testimonials.index');

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

    //Cases routes
    Route::get('/cases.create', [CaseStudyController::class, 'create'])->name('admin.cases.create');
    Route::post('/cases/store', [CaseStudyController::class, 'store'])->name('admin.cases.store');
    Route::get('/cases.{case}/edit', [CaseStudyController::class, 'edit'])->name('admin.cases.edit');
    Route::post('/cases/{case_study}', [CaseStudyController::class, 'update'])->name('admin.cases.update');
    Route::delete('/cases/{case}', [CaseStudyController::class, 'destroy'])->name('admin.cases.destroy');
    Route::delete('/cases/{case_study}/{caseId}', [CaseStudyController::class, 'destroyImage'])->name('admin.cases.destroy.image');

    //Services routes
    Route::get('/services.create', [ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('/services/store', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/services.{service}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::post('/services/{service}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');
    Route::delete('/services/{service}/image', [ServiceController::class, 'destroyImage'])->name('admin.services.destroy.image');
    
    //Testimonials routes
    Route::get('/testimonials.create', [TestimonialController::class, 'create'])->name('admin.testimonials.create');
    Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('admin.testimonials.store');
    Route::get('/testimonials.{testimonial}/edit', [TestimonialController::class, 'edit'])->name('admin.testimonials.edit');
    Route::post('/testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('admin.testimonials.update');
    Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('admin.testimonials.destroy');
    Route::delete('/testimonials/{testimonial}/image', [TestimonialController::class, 'destroyImage'])->name('admin.testimonials.destroy.image');
    
    Route::delete('/media/{id}', [MediaController::class, 'destroy'])->name('media.destroy');
});
