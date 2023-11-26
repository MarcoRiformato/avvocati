<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\CaseStudy;
use App\Models\Testimonial;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'prova',
            'email' => 'prova@gmail.com',
            'password' => Hash::make('123456789')
        ]);
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.it',
            'password' => Hash::make('123456789'),
            'is_admin' => '1'
        ]);

        CaseStudy::create([
            'title' => 'Risoluzione Contrattuale',
            'meta_description' => 'IL SOGNO IMPRENDITORIALE SALVATO',
            'slug' => 'Risoluzione Contrattuale',
            'body' => 'Un piccolo imprenditore locale ha affrontato la potenziale rovina quando un grossista non ha rispettato i termini di consegna. La nostra azione legale tempestiva ha assicurato il rispetto del contratto e il risarcimento per i danni subiti, permettendo al nostro cliente di continuare la sua attività senza interruzioni.',
            'status' => 'published', 
            'category_id' => null, 
        ]);

        CaseStudy::create([
            'title' => 'Custodia Condivisa',
            'meta_description' => 'UN NUOVO INIZIO PER LA FAMIGLIA ROSSI',
            'slug' => 'Risoluzione Contrattuale',
            'body' => 'La separazione può mettere a dura prova l\'equilibrio familiare. Abbiamo lavorato con dedizione per garantire che sia la madre che il padre potessero continuare a svolgere un ruolo attivo nella vita dei loro figli, raggiungendo un accordo di custodia condivisa che rispecchia al meglio gli interessi di tutte le parti coinvolte.', 
            'category_id' => null, 
        ]);

        CaseStudy::create([
            'title' => 'Difesa dei Diritti dei Lavoratori',
            'meta_description' => 'GIUSTIZIA PER UN LAVORATORE DILIGENTE',
            'slug' => 'Risoluzione Contrattuale',
            'body' => 'Un dipendente con anni di servizio alle spalle viene improvvisamente licenziato senza giusta causa. La nostra squadra ha lottato per i suoi diritti, assicurandogli una giusta compensazione e la possibilità di tornare al lavoro o di ricominciare con una solida base economica.', 
            'category_id' => null, 
        ]);

        CaseStudy::create([
            'title' => 'Assoluzione da Accusa di Frode',
            'meta_description' => 'L\'INTEGRITÀ DI UN PROFESSIONISTA DIFESA CON SUCCESSO',
            'slug' => 'Risoluzione Contrattuale',
            'body' => 'Un imprenditore rispettato si è trovato ingiustamente al centro di un\'inchiesta per frode fiscale. La nostra difesa meticolosa ha portato alla luce prove decisive per la sua assoluzione, permettendogli di riprendere le redini della sua vita professionale senza l\'ombra di uno scandalo', 
            'category_id' => null, 
        ]);

        Article::factory()->count(2)->create();
        Category::factory()->count(1)->create();
        CaseStudy::factory()->count(2)->create();
        Testimonial::factory()->count(3)->create();
        Service::factory()->count(3)->create();
    }
}
