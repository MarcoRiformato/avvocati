<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{

    use HasFactory;
    protected $fillable = ['filename', 'filepath', 'filetype', 'article_id', 'case_study_id'];
 
    public function articles() {
        return $this->belongsToMany(Article::class);
    }

    public function case_studies() {
        return $this->belongsToMany(CaseStudy::class, 'case_study_media');
    }       

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
     

}
