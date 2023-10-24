<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    /**
     * Store the uploaded media.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */

     use HasFactory;
     protected $fillable = ['filename', 'filepath', 'filetype', 'article_id'];
 
     public function articles() {
         return $this->belongsToMany(Article::class);
     }    
     

}
