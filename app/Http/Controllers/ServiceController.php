<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $services = Service::orderBy('created_at', 'desc')->get();

        return Inertia::render('Services/Index', [
            'services' => $services
        ]);
    }

    public function secondaryIndex()
    {
        return Inertia::render('Services/SecondaryIndex');
    }

    public function appalti()
    {
        return Inertia::render('Services/IndexAppalti', [
            'meta' => [
                'title' => 'Servizi Appalti Pubblici e Privati | Studio Legale Giuseppe Inglese',
                'description' => 'Consulenza legale specializzata in appalti pubblici e privati. Assistenza per enti pubblici, imprese e professionisti in gare, affidamenti e partenariati pubblico-privati a Genova.',
                'keywords' => 'appalti pubblici, appalti privati, gare, affidamenti, partenariato pubblico privato, Genova, consulenza legale',
            ],
        ]);
    }
    
    public function difesa()
    {
        return Inertia::render('Services/IndexDifesa', [
            'meta' => [
                'title' => 'Assistenza e Difesa Legale | Studio Legale Giuseppe Inglese',
                'description' => 'Assistenza e difesa qualificata per enti pubblici, imprese e operatori economici in contenziosi legati agli appalti. Rappresentanza legale davanti a TAR, Consiglio di Stato, e altri tribunali a Genova.',
                'keywords' => 'difesa legale, contenziosi appalti, TAR, Consiglio di Stato, tribunali civili, Genova, assistenza legale',
            ],
        ]);
    }
    
    public function partenariato()
    {
        return Inertia::render('Services/IndexPartenariato', [
            'meta' => [
                'title' => 'Partenariato Pubblico-Privato e Project Financing | Studio Legale Giuseppe Inglese',
                'description' => 'Consulenza legale specializzata in Partenariato Pubblico Privato (PPP) e project financing. Assistenza nella strutturazione, negoziazione e gestione di progetti di opere pubbliche e servizi a Genova.',
                'keywords' => 'partenariato pubblico privato, PPP, project financing, leasing in costruendo, opere pubbliche, Genova, consulenza legale',
            ],
        ]);
    }
    
    public function controversie()
    {
        return Inertia::render('Services/IndexControversie', [
            'meta' => [
                'title' => 'Risoluzione Stragiudiziale delle Controversie | Studio Legale Giuseppe Inglese',
                'description' => 'Soluzioni stragiudiziali per controversie negli appalti pubblici. Assistenza specializzata con Collegio Consultivo Tecnico e accordi bonari per la risoluzione efficace dei conflitti a Genova.',
                'keywords' => 'controversie appalti, risoluzione stragiudiziale, Collegio Consultivo Tecnico, accordo bonario, Genova, assistenza legale',
            ],
        ]);
    }
    
    public function altriServizi()
    {
        return Inertia::render('Services/IndexAltri', [
            'meta' => [
                'title' => 'Consulenza Legale Generale | Studio Legale Giuseppe Inglese',
                'description' => 'Consulenza legale generale in diritto amministrativo, contratti, responsabilità civile, recupero crediti, diritti reali e problematiche condominiali a Genova. Supporto legale completo e personalizzato.',
                'keywords' => 'consulenza legale, diritto amministrativo, contratti, responsabilità civile, recupero crediti, diritti reali, condominio, Genova',
            ],
        ]);
    }

    public function stazioni()
    {
        return Inertia::render('Services/Detail/Appalti/StazioniAppaltanti', [
            'meta' => [
                'title' => 'Consulenza alle Stazioni Appaltanti | Studio Legale Giuseppe Inglese',
                'description' => 'Supporto legale al RUP, assistenza nella programmazione, progettazione e gestione di gare d\'appalto. Consulenza su esclusione, ammissione dei concorrenti, verifica dell\'anomalia dell\'offerta e aggiudicazione a Genova.',
                'keywords' => 'stazioni appaltanti, RUP, gare d\'appalto, atti di gara, anomalia offerta, aggiudicazione, Genova, consulenza legale',
            ],
        ]);
    }
    
    public function imprese()
    {
        return Inertia::render('Services/Detail/Appalti/ConsulenzaImprese', [
            'meta' => [
                'title' => 'Consulenza Legale per Imprese e Operatori Economici | Studio Legale Giuseppe Inglese',
                'description' => 'Assistenza legale specializzata per imprese e operatori economici nelle procedure di gara, partecipazione, soccorso istruttorio e giustificazioni per la congruità dell\'offerta a Genova.',
                'keywords' => 'imprese, operatori economici, procedure di gara, soccorso istruttorio, congruità offerta, Genova, assistenza legale',
            ],
        ]);
    }
    
    public function professionisti()
    {
        return Inertia::render('Services/Detail/Appalti/ConsulenzaProfessionisti', [
            'meta' => [
                'title' => 'Consulenza Legale per Professionisti Tecnici | Studio Legale Giuseppe Inglese',
                'description' => 'Assistenza legale per professionisti tecnici nelle procedure di gara, esecuzione dell\'appalto, programmazione, progettazione, direzione lavori, sicurezza e collaudo a Genova.',
                'keywords' => 'professionisti tecnici, procedure di gara, esecuzione appalto, direzione lavori, sicurezza, collaudo, Genova, consulenza legale',
            ],
        ]);
    }
    
    public function esecuzione()
    {
        return Inertia::render('Services/Detail/Appalti/Esecuzione', [
            'meta' => [
                'title' => 'Consulenza Legale nella Fase di Esecuzione degli Appalti | Studio Legale Giuseppe Inglese',
                'description' => 'Assistenza legale completa nella fase di esecuzione degli appalti per RUP, stazioni appaltanti, imprese e professionisti. Gestione di varianti, subappalti, riserve, revisione prezzi, CCT e altro a Genova.',
                'keywords' => 'esecuzione appalti, varianti, subappalti, riserve, revisione prezzi, CCT, accordi bonari, Genova, assistenza legale',
            ],
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Services/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation Rules
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'slug' => 'nullable|string|unique:services,slug',
            'body' => 'nullable|string',
            'status' => 'nullable|in:draft,published',
            'category_id' => 'nullable|exists:categories,id'
        ]);

        if ($validatedData['category_id'] !== null) {
            $serviceData['category_id'] = $validatedData['category_id'];
        }
    
        // Create New Service
        $service = Service::create([
            'title' => $validatedData['title'],
            'meta_description' => $validatedData['meta_description'],
            'slug' => $validatedData['slug'],
            'body' => $validatedData['body'],
            'status' => $validatedData['status'],
            'category_id' => $validatedData['category_id']
        ]);
    
        return redirect()->route('admin.services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($service_id)
    {
        $service = Service::find($service_id);
    
        // Fetch 3 random services, excluding the current one and with media
        $randomServices = Service::where('id', '!=', $service_id)
            ->inRandomOrder()
            ->limit(3)
            ->get();
    
        return Inertia::render('Services/Show', [
            'service' => $service,
            'randomServices' => $randomServices
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return Inertia::render('Admin/Services/Edit', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'slug' => 'nullable|string|unique:services,slug,' . $service->id,
            'body' => 'nullable|string',
            'status' => 'nullable|in:draft,published',
            'category_id' => 'nullable|exists:categories,id'
        ]);
    
        $service->title = $request->input('title');
        $service->meta_description = $request->input('meta_description');
        $service->slug = $request->input('slug');
        $service->body = $request->input('body');
        $service->status = $request->input('status');
        $service->category_id = $request->input('category_id');
        $service->save();
        
        return redirect()->route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($service_id)
    {
        $service = Service::find($service_id);
        
        $service->delete();
        
        return redirect()->route('admin.services.index');
    }
}
