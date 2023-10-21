<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Store the uploaded media.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
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
            'filepath' => $mediaPath, // changed from 'path' to 'filepath'
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
