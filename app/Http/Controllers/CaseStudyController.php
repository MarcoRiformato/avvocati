<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Media;
use App\Models\Category;
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
        $cases = CaseStudy::with(['media', 'category'])->orderBy('created_at', 'desc')->get();
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
    
        if ($request->hasFile('media_file')) {
            $file = $request->file('media_file');
            $path = $file->store('media', 'public');
        
            // Delete old media if exists
            $existingMedia = $case_study->media;
            foreach ($existingMedia as $mediaItem) {
                Storage::delete('public/' . $mediaItem->filepath);
                $mediaItem->delete();
            }
        
            // Determine the correct ENUM value for the filetype
            $fileType = $file->getClientMimeType();
            if (str_contains($fileType, 'image')) {
                $fileType = 'image';
            } elseif (str_contains($fileType, 'video')) {
                $fileType = 'video';
            } else {
                $fileType = 'document'; // default to 'document'
            }
        
            // Save the new media file
            $media = new Media([
                'filename' => $file->getClientOriginalName(),
                'filepath' => $path,
                'filetype' => $fileType, // Use the ENUM value determined above
                'case_study_id' => $case_study->id, // Set the foreign key
            ]);
        
            $media->save();

            $case_study->media()->sync([$media->id]);
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
    
        // Fetch 3 random articles, excluding the current one and with media
        $randomCases = CaseStudy::where('id', '!=', $case_id)
            ->with('media')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $case_study = CaseStudy::with('media', 'category')->find($case_id);
        //$categories = Category::all();
        return Inertia::render('Cases/Show', [
            'case_study' => $case_study,
            'randomCases' => $randomCases
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CaseStudy $case_study, $id)
    {
        $case_study = CaseStudy::with('media')->find($id);
        return Inertia::render('Admin/Cases/Edit', [
            'case_study' => $case_study
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CaseStudy $case_study)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'slug' => 'nullable|string|unique:case_studies,slug,' . $case_study->id,
            'body' => 'nullable|string',
            'status' => 'nullable|in:draft,published',
            'category_id' => 'nullable|exists:categories,id',
            'media_file' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,mp4,mp3,pdf|max:10240',
        ]);
    
        $case_study->title = $request->input('title');
        $case_study->meta_description = $request->input('meta_description');
        $case_study->slug = $request->input('slug');
        $case_study->body = $request->input('body');
        $case_study->status = $request->input('status');
        $case_study->category_id = $request->input('category_id');
        $case_study->save();
    
        if ($request->hasFile('media_file')) {
            $file = $request->file('media_file');
            $path = $file->store('media', 'public');
        
            // Delete old media if exists
            $existingMedia = $case_study->media;
            foreach ($existingMedia as $mediaItem) {
                Storage::delete('public/' . $mediaItem->filepath);
                $mediaItem->delete();
            }
        
            // Determine the correct ENUM value for the filetype
            $fileType = $file->getClientMimeType();
            if (str_contains($fileType, 'image')) {
                $fileType = 'image';
            } elseif (str_contains($fileType, 'video')) {
                $fileType = 'video';
            } else {
                $fileType = 'document';
            }
        
            $media = new Media([
                'filename' => $file->getClientOriginalName(),
                'filepath' => $path,
                'filetype' => $fileType, 
                'case_study_id' => $case_study->id, 
            ]);
            $media->save();

            $case_study->media()->sync([$media->id]);

        }
        
    
        return redirect()->route('admin.cases.index');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($case_id)
    {
        $case_study = CaseStudy::findOrFail($case_id);
        
        // Delete old media if exists
        $existingMedia = $case_study->media;
        foreach ($existingMedia as $mediaItem) {
            Storage::delete('public/' . $mediaItem->filepath);
            $mediaItem->delete();
        }
        
        $case_study->delete();
        
        return redirect()->route('admin.cases.index');
    }    

    public function destroyImage($case_id)
    {
        $case_study = CaseStudy::with('media')->findOrFail($case_id);
    
        // Delete old media if exists
        $existingMedia = $case_study->media;
        foreach ($existingMedia as $mediaItem) {
            Storage::delete('public/' . $mediaItem->filepath);
            $mediaItem->delete();
        }
        
        return redirect()->back();
    }
    
}
