<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Article;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with(['media', 'user'])->orderBy('created_at', 'desc')->get();
        return Inertia::render('Articles/Index', [
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Articles/Create');
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
            'slug' => 'nullable|string|unique:articles,slug',
            'body' => 'nullable|string',
            'status' => 'nullable|in:draft,published',
            'category_id' => 'nullable|exists:categories,id',
            'media_file' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,mp4,mp3,pdf|max:10240',
        ]);

        if ($validatedData['category_id'] !== null) {
            $articleData['category_id'] = $validatedData['category_id'];
        }
    
        // Create New Article
        $article = Article::create([
            'title' => $validatedData['title'],
            'meta_description' => $validatedData['meta_description'],
            'slug' => $validatedData['slug'],
            'body' => $validatedData['body'],
            'status' => $validatedData['status'],
            'category_id' => $validatedData['category_id'],
            'user_id' => auth()->id(),
        ]);
    
        // Handle Media Upload
        if ($request->hasFile('media_file')) {
            $file = $request->file('media_file');
            $path = $file->store('media', 'public');
    
            $media = new Media([
                'filepath' => $path,
                'filetype' => $this->determineFileType($file->getClientMimeType()),
                'filename' => $file->getClientOriginalName(),
                'article_id' => $article->id,
            ]);
    
            $media->save();
            $article->media()->attach($media);
        }
    
        return redirect()->route('admin.articles.index');
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
    public function show($article_id)
    {
        $article = Article::with('media')->find($article_id);
    
        // Fetch 3 random articles, excluding the current one and with media
        $randomArticles = Article::where('id', '!=', $article_id)
            ->with('media')
            ->inRandomOrder()
            ->limit(3)
            ->get();
    
        return Inertia::render('Articles/Show', [
            'article' => $article,
            'randomArticles' => $randomArticles
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $article->load('media');
        return Inertia::render('Admin/Articles/Edit', [
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'slug' => 'nullable|string|unique:articles,slug,' . $article->id,
            'body' => 'nullable|string',
            'status' => 'nullable|in:draft,published',
            'category_id' => 'nullable|exists:categories,id',
            'media_file' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,mp4,mp3,pdf|max:10240',
        ]);
    
        $article->title = $request->input('title');
        $article->meta_description = $request->input('meta_description');
        $article->slug = $request->input('slug');
        $article->body = $request->input('body');
        $article->status = $request->input('status');
        $article->category_id = $request->input('category_id');
        $article->save();
    
        if ($request->hasFile('media_file')) {
            $file = $request->file('media_file');
        
            // Delete old cover photo if exists
            Media::where('article_id', $article->id)->delete();
        
            $path = $file->store('media', 'public');
        
            $media = new Media();
            $media->filename = $file->getClientOriginalName();
            $media->filepath = $path;
            $media->article_id = $article->id;
            $media->save();
        
            // Attach the media to the article
            $article->media()->attach($media);
        }
        
        return redirect()->route('admin.articles.index');
    }

/**
 * Remove the specified resource from storage.
 */
    public function destroy($article_id)
    {
        $article = Article::with('media')->find($article_id);
        
        if ($article && $article->media) {
            foreach ($article->media as $media) {
                Storage::disk('public')->delete($media->filepath);
                $media->delete();
            }
        }
        
        $article->delete();
        
        return redirect()->route('admin.articles.index');
    }

    public function destroyImage($article_id)
    {
        $article = Article::with('media')->find($article_id);

        if ($article && $article->media) {
            $media = $article->media->first();
            Storage::disk('public')->delete($media->filepath);

            $media->delete();
        }
        
        return redirect()->back();
    }


    

}
