<?php

namespace App\Http\Controllers;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function store(Request $request)
    {
        $request->validate([
            'media_file' => 'required|mimes:jpg,png,jpeg,gif,mp4,pdf|max:2048', // Adjust mimes as needed
        ]);
    
        $mediaType = $this->getMediaType($request->media_file->extension());
        $mediaName = time() . '_' . $request->media_file->getClientOriginalName();
        $mediaPath = $request->media_file->storeAs('media', $mediaName, 'public');
    
        Media::create([
            'article_id' => $request->article_id,
            'filename' => $mediaName,
            'filepath' => $mediaPath, 
            'filetype' => $mediaType,
        ]);
    
        return back()->with('success', 'File has been uploaded.');
    }

public function destroy($id)
{
    dd($id);
    $media = Media::findOrFail($id);
    
    // Detach the media from any associated articles
    $media->articles()->detach();
    
    Storage::disk('public')->delete($media->filepath);
    $media->delete();

    return redirect()->route('admin.categories.index');
}


    /**
     * Determine the file type.
     *
     * @param  string  $extension
     * @return string
     */
    protected function determineFileType($extension)
    {
        $imageExtensions = ['jpeg', 'jpg', 'png'];
        $videoExtensions = ['mp4'];
        $documentExtensions = ['pdf'];

        if (in_array($extension, $imageExtensions)) {
            return 'image';
        } elseif (in_array($extension, $videoExtensions)) {
            return 'video';
        } elseif (in_array($extension, $documentExtensions)) {
            return 'document';
        } else {
            throw new \Exception('Invalid file extension.');
        }
    }
}
