<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Media;
use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cases = CaseStudy::with(['media', 'user'])->orderBy('created_at', 'desc')->get();
        return Inertia::render('Cases/Index', [
            'cases' => $cases
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Cases/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation Rules
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'slug' => 'nullable|string|unique:case_studies,slug',
            'body' => 'nullable|string',
            'status' => 'nullable|in:draft,published',
            'category_id' => 'nullable|exists:categories,id',
            'media_file' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,mp4,mp3,pdf',
        ]);

        if ($validatedData['category_id'] !== null) {
            $caseData['category_id'] = $validatedData['category_id'];
        }
    
        // Create New Case study
        $case_study = CaseStudy::create([
            'title' => $validatedData['title'],
            'meta_description' => $validatedData['meta_description'],
            'slug' => $validatedData['slug'],
            'body' => $validatedData['body'],
            'status' => $validatedData['status'],
            'category_id' => $validatedData['category_id']
        ]);
    
        // Corrected media upload handling
        if ($request->hasFile('media_file')) {
            $file = $request->file('media_file');
            $path = $file->store('media', 'public');

            $media = new Media([
                'filepath' => $path,
                'filetype' => $this->determineFileType($file->getClientMimeType()),
                'filename' => $file->getClientOriginalName(),
                'case_study_id' => $file->getClientOriginalName(),
                'case_study_id' => $case_study->id,
            ]);

            $media->save();
            $case_study->media()->attach($media);
        }

    
        return redirect()->route('admin.cases.index');
    }

    private function determineFileType($mimeType) {
        if (in_array($mimeType, ['image/jpeg', 'image/png', 'image/gif'])) {
            return 'image';
        } elseif (in_array($mimeType, ['video/mp4'])) {
            return 'video';
        } else {
            return 'document';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($case_id)
    {
        $case_study = CaseStudy::with('media')->find($case_id);
    
        return Inertia::render('Cases/Show', [
            'case_study' => $case_study
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CaseStudy $case_study)
    {
        $case_study->load('media');
        return Inertia::render('Admin/Cases/Edit', [
            'case_study' => $case_study
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
