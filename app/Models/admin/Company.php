<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','mobile_no','image','address', 'is_active','is_deleted','facebook_link','twitter_link','tittle','details'];
}
