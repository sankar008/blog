<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'is_active', 'is_deleted'];

    public function subcategory() {
        return $this -> hasMany(Subcategory::class);
    }

    public function blog() {
        return $this -> hasMany(Blog::class);
    }
}
