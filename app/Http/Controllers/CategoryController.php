<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Can;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with(['media'])->orderBy('created_at', 'desc')->get();
        return Inertia::render('Admin/Categories/Index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Categories/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation Rules
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'slug' => 'nullable|string|unique:categories,slug',
            'description' => 'nullable|string',
            'meta_description' => 'nullable|string|max:255',
            'status' => 'nullable|in:draft,published',
            'media_file' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,mp4,mp3,pdf|max:10240',
        ]);
    
        // Create New Category
        $category = Category::create([
            'name' => $validatedData['name'],
            'slug' => $validatedData['slug'],
            'description' => $validatedData['description'],
            'meta_description' => $validatedData['meta_description'],
            'status' => $validatedData['status'],
        ]);
    
        // Handle Media Upload
        if ($request->hasFile('media_file')) {
            $file = $request->file('media_file');
            $path = $file->store('media', 'public');

            $media = new Media([
                'filepath' => $path,
                'filetype' => $this->determineFileType($file->getClientMimeType()),
                'filename' => $file->getClientOriginalName(),
            ]);

            $media->save();
            $category->media()->save($media); // Use save() instead of attach()
        }
    
        return redirect()->route('admin.categories.index');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $category->load('media');
        return Inertia::render('Admin/Categories/Edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'slug' => 'nullable|string|unique:categories,slug,' . $category->id,
            'status' => 'nullable|in:draft,published',
            'media_file' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,mp4,mp3,pdf|max:10240',
        ]);
    
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->meta_description = $request->input('meta_description');
        $category->slug = $request->input('slug');
        $category->status = $request->input('status');
        $category->save();
    
        if ($request->hasFile('media_file')) {
            $file = $request->file('media_file');
        
            // Delete old media files related to this category
            Media::where('category_id', $category->id)->delete();
        
            $path = $file->store('media', 'public');
        
            $media = new Media();
            $media->filename = $file->getClientOriginalName();
            $media->filepath = $path;
            $media->category_id = $category->id;
            $media->save();
        }
    
        return redirect()->route('admin.categories.index');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category_id)
    {
        $category = Category::with('media')->find($category_id);
        
        if ($category && $category->media) {
            foreach ($category->media as $media) {
                Storage::disk('public')->delete($media->filepath);
                $media->delete();
            }
        }
        
        $category->delete();
        
        return redirect()->route('admin.categories.index');
    }
    
    public function destroyImage($category_id)
    {
        $category = Category::with('media')->find($category_id);
    
        if ($category && $category->media) {
            $media = $category->media->first();
            Storage::disk('public')->delete($media->filepath);
    
            $media->delete();
        }
        
        return redirect()->back();
    }
}
