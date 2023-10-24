<?php

namespace App\Http\Controllers;
use App\Models\Media;
use Illuminate\Http\Request;

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
