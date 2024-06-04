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
        return Inertia::render('Services/IndexAppalti');
    }

    public function difesa()
    {
        return Inertia::render('Services/IndexDifesa');
    }

    public function partenariato()
    {
        return Inertia::render('Services/IndexPartenariato');
    }

    public function controversie()
    {
        return Inertia::render('Services/IndexControversie');
    }

    public function stazioni()
    {
        return Inertia::render('Services/Detail/Appalti/StazioniAppaltanti');
    }

    public function imprese()
    {
        return Inertia::render('Services/Detail/Appalti/ConsulenzaImprese');
    }

    public function professionisti()
    {
        return Inertia::render('Services/Detail/Appalti/ConsulenzaProfessionisti');
    }

    public function esecuzione()
    {
        return Inertia::render('Services/Detail/Appalti/Esecuzione');
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
