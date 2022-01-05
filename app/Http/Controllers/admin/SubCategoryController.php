<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Subcategory;
use App\Models\admin\Category;
use Illuminate\Support\Facades\Redirect;

class SubCategoryController extends Controller
{
    public function sub_category_list(Request $request) {
        if($request -> method() == 'GET') {
            $data = Subcategory :: all();
            $categoryData = Category :: all();
            return view('admin.subcategory_list', ['sub_category' => $data, 'category' => $categoryData]);
        }
    }
    public function sub_category_add(Request $request) {
        if($request -> method() == 'GET') {

        }
        else if($request -> method() == 'POST') {
            $request -> validate([
                'category_id' => 'required',
                'name' => 'required'
                
            ]);
            $duplicateCheck =  Subcategory::where('name',$request->name)->count();
            if($duplicateCheck == 0) {
                $subcategory = new Subcategory([
                    'category_id' => $request -> input('category_id'),
                    'name' => $request -> input('name')
                    
                ]);
                $subcategory -> save();
                if($subcategory -> save()) {
                    return redirect :: to('/admin/subcategory-list') -> with('successmsg', 'Subcategory has been added successfully');

                } else {
                    return redirect :: to('/admin/subcategory-list') -> with('errmsg', 'Subcategory added unsuccessful');
                }
            } else {
                return redirect :: to('/admin/subcategory-list') -> with('errmsg', 'Subcategory already exists');
            }
        
        }

    }
}
