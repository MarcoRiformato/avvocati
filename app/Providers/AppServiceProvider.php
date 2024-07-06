<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use App\Models\Categories;
use App\Models\Category;
use Illuminate\Support\Facades\Request;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Inertia::share('meta', function () {
            return [
                'title' => 'Studio Legale Giuseppe Inglese | Genova',
                'description' => 'Studio legale specializzato in appalti pubblici e privati, partenariati pubblico-privati e contenziosi amministrativi a Genova.',
                'keywords' => 'appalti pubblici, appalti privati, diritto amministrativo, Genova, studio legale, contenziosi, partenariato pubblico-privato',
                'author' => 'Avv. Giuseppe Inglese',
            ];
        });
    }
}
