<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\Blog;
use App\Models\frontend\Category;

class HomeController extends Controller
{
    public function home(Request $request) {
        if($request -> method() =='GET') {
            $data = Blog :: all();
            $category_data = Category :: get();

            return view('frontend.home', ['blog' => $data, 'category' => $category_data]);
        }
    }
}
