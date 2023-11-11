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
        //
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
