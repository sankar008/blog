<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'short_description', 'description', 'image', 'is_active', 'category_id', 'subcategory_id', 'slug_name'];
}
