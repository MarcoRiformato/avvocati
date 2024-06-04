<?php

namespace Database\Factories;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CaseStudy>
 */
class CaseStudyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Risoluzione Contrattuale',
            'meta_description' => 'IL SOGNO IMPRENDITORIALE SALVATO',
            'slug' => 'IL SOGNO IMPRENDITORIALE SALVATO', 
            'body' => 'Un piccolo imprenditore locale ha affrontato la potenziale rovina quando un grossista non ha rispettato i termini di consegna. La nostra azione legale tempestiva ha assicurato il rispetto del contratto e il risarcimento per i danni subiti, permettendo al nostro cliente di continuare la sua attività senza interruzioni.',
            'status' => null,
            'category_id' => null,
        ];        
    }
}
