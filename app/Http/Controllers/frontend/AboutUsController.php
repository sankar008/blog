<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutus(Request $request) {
        if($request -> method() == 'GET') {
            
            return view('frontend.aboutus');
        }
    }

    
}
