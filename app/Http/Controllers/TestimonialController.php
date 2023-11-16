<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Media;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Testimonials/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation Rules
        $validatedData = $request->validate([
            'clientName' => 'nullable|string|max:255',
            'body' => 'nullable|string',
            'organization' => 'nullable|string|max:255',
            'filepath' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,mp4,mp3,pdf|max:10240',
        ]);
    
        //dd($validatedData);

        $filepath = null;
        if ($request->hasFile('filepath')) {
            //dd('theres an image');
            $file = $request->file('filepath');
            $filepath = $file->store('media', 'public');
        }
    
        // Create New Testimonial
        Testimonial::create([
            'clientName' => $validatedData['clientName'],
            'body' => $validatedData['body'],
            'organization' => $validatedData['organization'],
            'filepath' => $filepath, 
        ]);
    
        return redirect()->route('admin.testimonials.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return Inertia::render('Admin/Testimonials/Edit', [
            'testimonial' => $testimonial
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
{
    // Validation Rules
    $validatedData = $request->validate([
        'clientName' => 'nullable|string|max:255',
        'body' => 'nullable|string',
        'organization' => 'nullable|string|max:255',
        'filepath' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,mp4,mp3,pdf|max:10240',
    ]);

    // Check if a new image file is uploaded
    if ($request->hasFile('filepath')) {
        // Delete the old image file if it exists
        if ($testimonial->filepath) {
            Storage::disk('public')->delete($testimonial->filepath);
        }

        // Store the new image file
        $file = $request->file('filepath');
        $filepath = $file->store('media', 'public');

        // Update the testimonial with the new image filepath and other data
        $testimonial->update([
            'clientName' => $validatedData['clientName'] ?? $testimonial->clientName,
            'body' => $validatedData['body'],
            'organization' => $validatedData['organization'],
            'filepath' => $filepath,
        ]);
    } else {
        // Update the testimonial without changing the image filepath
        $testimonial->update([
            'clientName' => $validatedData['clientName'] ?? $testimonial->clientName,
            'body' => $validatedData['body'],
            'organization' => $validatedData['organization'],
        ]);
    }

    return redirect()->route('admin.testimonials.index');
}

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($testimonial_id)
    {
        $testimonial = Testimonial::find($testimonial_id);
        
        $testimonial->delete();
        
        return redirect()->route('admin.testimonials.index');
    }

    public function destroyImage(Request $request, Testimonial $testimonial)
    {
        if ($testimonial->filepath) {
            // Delete the image file
            Storage::disk('public', 'media')->delete($testimonial->filepath);

            // Empty the filepath column in the database
            $testimonial->update(['filepath' => null]);
        }

        return redirect()->route('admin.testimonials.edit', $testimonial);
    }

}
