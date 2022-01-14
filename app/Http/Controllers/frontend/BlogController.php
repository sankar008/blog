<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\Blog;
use App\Models\frontend\Category;

class BlogController extends Controller
{
    public function blog_detail(Request $request, $id = '') {
        if($request -> method() == 'GET' || $id != '') {
           
            $data = Blog::where('slug_name', $request -> id) -> first();
            $category_data = Category::get();
           
            return view('frontend.blog_detail', ['blog' => $data, 'category' => $category_data]);
        }
    }
}
