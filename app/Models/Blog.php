<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'Title',
        'Slug',
        'Description',
        'Image',
        'Tags',
        'SEO_description',
        'SEO_Title',
        'Meta_keywords',
        'Category_id',
    ];
}
