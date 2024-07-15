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
use App\Http\Controllers\EmailController;
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

Route::get('/lo-studio', function () {
    return Inertia::render('About');
})->name('about');
Route::get('/contatti', function () {
    return Inertia::render('Contacts');
})->name('contacts');

Route::post('/send-email', [EmailController::class, 'send'])->name('send.email');

//Services index pages
Route::get('appalti', [ServiceController::class, 'appalti'])->name('services.appalti');
Route::get('difesa', [ServiceController::class, 'difesa'])->name('services.difesa');
Route::get('partenariato', [ServiceController::class, 'partenariato'])->name('services.partenariato');
Route::get('controversie', [ServiceController::class, 'controversie'])->name('services.controversie');
Route::get('altriServizi', [ServiceController::class, 'altriServizi'])->name('services.altri');

//Appalti
Route::get('stazioni', [ServiceController::class, 'stazioni'])->name('services.detail.stazioni');
Route::get('professionisti', [ServiceController::class, 'professionisti'])->name('services.detail.professionisti');
Route::get('esecuzione', [ServiceController::class, 'esecuzione'])->name('services.detail.esecuzione');
Route::get('imprese', [ServiceController::class, 'imprese'])->name('services.detail.imprese');

//Difesa
Route::get('/difesa_tar', function () {
    return Inertia::render('Services/Detail/Difesa/DifesaTar', [
        'meta' => [
            'title' => 'Contenzioso TAR e Consiglio di Stato | Studio Legale Giuseppe Inglese',
            'description' => 'Assistenza legale specializzata in contenziosi presso TAR e Consiglio di Stato. Consulenza su legittimità degli atti di gara, ammissioni, esclusioni e aggiudicazioni di appalti e concessioni a Genova.',
            'keywords' => 'TAR, Consiglio di Stato, contenzioso amministrativo, appalti, concessioni, atti di gara, Genova, assistenza legale',
        ],
    ]);
})->name('difesa_tar');

Route::get('/contenziosi-civili', function () {
    return Inertia::render('Services/Detail/Difesa/ContenziosiCivili', [
        'meta' => [
            'title' => 'Contenziosi Civili in Appalti | Studio Legale Giuseppe Inglese',
            'description' => 'Assistenza legale in contenziosi civili relativi all\'esecuzione di appalti pubblici e privati. Gestione di controversie su adempimento, riserve, risoluzione contrattuale e risarcimento danni a Genova.',
            'keywords' => 'contenziosi civili, appalti pubblici, appalti privati, risoluzione contrattuale, risarcimento danni, Tribunale, Corte d\'Appello, Cassazione, Genova',
        ],
    ]);
})->name('contenziosi_civili');

Route::get('/arbitrati', function () {
    return Inertia::render('Services/Detail/Difesa/Arbitrati', [
        'meta' => [
            'title' => 'Arbitrato in Appalti e Lavori Pubblici | Studio Legale Giuseppe Inglese',
            'description' => 'Servizi di arbitrato per appalti e lavori pubblici. Assistenza in controversie arbitrali e incarichi di Arbitro presso Camere Arbitrali di Milano, Roma e Camera Arbitrale dei Lavori Pubblici.',
            'keywords' => 'arbitrato, appalti, lavori pubblici, controversie arbitrali, Camera Arbitrale, Milano, Roma, Genova, assistenza legale',
        ],
    ]);
})->name('arbitrati');

Route::get('/proc_anac', function () {
    return Inertia::render('Services/Detail/Difesa/ProcedimentiAnac', [
        'meta' => [
            'title' => 'Assistenza Legale nei Procedimenti ANAC | Studio Legale Giuseppe Inglese',
            'description' => 'Consulenza e assistenza legale specializzata nei procedimenti davanti all\'Autorità Nazionale Anticorruzione (ANAC) a Genova. Supporto in tutte le fasi del procedimento.',
            'keywords' => 'ANAC, Autorità Nazionale Anticorruzione, procedimenti amministrativi, anticorruzione, appalti pubblici, Genova, assistenza legale',
        ],
    ]);
})->name('proc_anac');

//Controversie
Route::get('/stragiudiziali-appalti', function () {
    return Inertia::render('Services/Detail/Controversie/StragiudizialiAppalti', [
        'meta' => [
            'title' => 'Risoluzione Stragiudiziale delle Controversie negli Appalti Pubblici | Studio Legale Giuseppe Inglese',
            'description' => 'Assistenza legale specializzata nella definizione stragiudiziale delle controversie relative all\'esecuzione di appalti pubblici a Genova. Soluzioni rapide ed efficienti attraverso accordi bonari e mediazione.',
            'keywords' => 'risoluzione stragiudiziale, controversie appalti pubblici, accordo bonario, mediazione, Genova, assistenza legale, appalti',
        ],
    ]);
})->name('stragiudiziali_appalti');

Route::get('/collegio-consultivo-tecnico', function () {
    return Inertia::render('Services/Detail/Controversie/CCT', [
        'meta' => [
            'title' => 'Collegio Consultivo Tecnico per Appalti Pubblici | Studio Legale Giuseppe Inglese',
            'description' => 'Servizi di componenti di Collegi Consultivi Tecnici per appalti di lavori pubblici a Genova. Supporto decisionale specializzato nella fase di esecuzione del contratto.',
            'keywords' => 'Collegio Consultivo Tecnico, CCT, appalti pubblici, lavori pubblici, esecuzione contratto, Genova, assistenza legale',
        ],
    ]);
})->name('cct');

//Altri servizi ++++++++++++++++++++++++++++++++++++++++++++
Route::get('/altri-servizi', function () {
    return Inertia::render('Services/Detail/Controversie/CCT');
})->name('cct');

//Partenariato ++++++++++++++++++++++++++++++++++++++++++++++++++++++
Route::get('/gestione-contenziosi-tar-consiglio-di-stato', function () {
    return Inertia::render('Services/Detail/Partenariati/ContenziosiTar', [
        'meta' => [
            'title' => 'Contenziosi TAR e Consiglio di Stato | Studio Legale Giuseppe Inglese',
            'description' => 'Assistenza legale specializzata in contenziosi presso TAR e Consiglio di Stato a Genova. Gestione di controversie su legittimità degli atti di gara, ammissioni, esclusioni e aggiudicazioni di appalti e concessioni.',
            'keywords' => 'TAR, Consiglio di Stato, contenziosi amministrativi, appalti, concessioni, atti di gara, Genova, assistenza legale',
        ],
    ]);
})->name('contenziosi_tar');

Route::get('/contenziosi-civili', function () {
    return Inertia::render('Services/Detail/Partenariati/ContenziosiCivili', [
        'meta' => [
            'title' => 'Contenziosi Civili in Appalti | Studio Legale Giuseppe Inglese',
            'description' => 'Assistenza legale in contenziosi civili relativi all\'esecuzione di appalti pubblici e privati a Genova. Gestione di controversie su adempimento, riserve, risoluzione contrattuale e risarcimento danni.',
            'keywords' => 'contenziosi civili, appalti pubblici, appalti privati, risoluzione contrattuale, risarcimento danni, Tribunale, Corte d\'Appello, Cassazione, Genova',
        ],
    ]);
})->name('contenziosi_civili');

Route::get('/arbitrato-appalti', function () {
    return Inertia::render('Services/Detail/Partenariati/ArbitratoAppalti', [
        'meta' => [
            'title' => 'Arbitrato in Appalti e Lavori Pubblici | Studio Legale Giuseppe Inglese',
            'description' => 'Servizi di arbitrato per appalti e lavori pubblici a Genova. Assistenza in controversie arbitrali e incarichi di Arbitro presso Camere Arbitrali di Milano, Roma e Camera Arbitrale dei Lavori Pubblici.',
            'keywords' => 'arbitrato, appalti, lavori pubblici, controversie arbitrali, Camera Arbitrale, Milano, Roma, Genova, assistenza legale',
        ],
    ]);
})->name('arbitrato-appalti');

Route::get('/procedimenti-anac', function () {
    return Inertia::render('Services/Detail/Partenariati/ProcedimentiAnac', [
        'meta' => [
            'title' => 'Assistenza Legale nei Procedimenti ANAC | Studio Legale Giuseppe Inglese',
            'description' => 'Consulenza e assistenza legale specializzata nei procedimenti davanti all\'Autorità Nazionale Anticorruzione (ANAC) a Genova. Supporto in tutte le fasi del procedimento.',
            'keywords' => 'ANAC, Autorità Nazionale Anticorruzione, procedimenti amministrativi, anticorruzione, appalti pubblici, Genova, assistenza legale',
        ],
    ]);
})->name('procedimenti_anac');

// Altri servizi

Route::get('/altri-servizi', function () {
    return Inertia::render('Services/Detail/Altri/Altri', [
        'meta' => [
            'title' => 'Altri Servizi di Diritto Amministrativo | Studio Legale Giuseppe Inglese',
            'description' => 'Consulenza e assistenza legale in vari settori del diritto amministrativo a Genova. Specializzati in edilizia, urbanistica, servizi pubblici, sanità, enti locali e pubblico impiego.',
            'keywords' => 'diritto amministrativo, edilizia, urbanistica, servizi pubblici, sanità, enti locali, pubblico impiego, Genova, assistenza legale',
        ],
    ]);
})->name('altri');

Route::get('/contratti-obbligazioni', function () {
    return Inertia::render('Services/Detail/Altri/Contratti', [
        'meta' => [
            'title' => 'Contratti, Obbligazioni e Responsabilità Civile | Studio Legale Giuseppe Inglese',
            'description' => 'Assistenza legale specializzata in contrattualistica, responsabilità civile e recupero crediti a Genova. Consulenza su redazione, interpretazione e adempimento di contratti, azioni per inadempimento e risarcimento danni.',
            'keywords' => 'contratti, obbligazioni, responsabilità civile, recupero crediti, risarcimento danni, inadempimento, Genova, assistenza legale',
        ],
    ]);
})->name('contratti_obbligazioni');

Route::get('/diritti-reali', function () {
    return Inertia::render('Services/Detail/Altri/Reali', [
        'meta' => [
            'title' => 'Diritti Reali, Condominio e Locazioni | Studio Legale Giuseppe Inglese',
            'description' => 'Assistenza legale in materia di diritti reali, problematiche condominiali e locatizie a Genova. Gestione di controversie sulla proprietà, possesso, sfratti e relative procedure esecutive.',
            'keywords' => 'diritti reali, condominio, locazioni, proprietà, possesso, sfratto, procedure esecutive, Genova, assistenza legale',
        ],
    ]);
})->name('diritti_reali');


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
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
