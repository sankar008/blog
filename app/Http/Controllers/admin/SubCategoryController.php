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
    public function sub_category_update(Request $request, $id ='') {
        if($request -> method() == 'GET' || $id !='') {
            $data= Subcategory :: where('id', $id) ->first();
            $categoryDtata = Category :: all();
            return view('admin.subcategory_update', ['subcategory' => $data, 'category' => $categoryDtata]);
        }
        else if($request -> method() == 'POST') {
            
            $request -> validate([
                'category_id' => 'required',
                'name' => 'required'
            ]);
          
            $duplicateCheck =  Subcategory::where('name',$request->name)->count();
            if($duplicateCheck == 0) {
                $update = Subcategory :: where('id', $request -> id) -> update([
                    'category_id' => $request -> category_id,
                    'name' => $request -> name
                ]);
                die;
                if($update) {
                    return redirect :: to('/admin/subcategory-list') -> with('successmsg', 'Subcategory has been updated successfully');
                } else {
                    return redirect :: to('/admin/subcategory-list') -> with('errmsg', 'Subcategory update unsuccessful');
                }
            } else {
                return redirect :: to('admin/subcategory-update/'.$request -> id) -> with('errmsg', 'Subcategory already exists');
            }
        }
    }
    public function sub_category_delete(Request $request, $id) {
        if($request -> method() == 'GET') {
            $delete = Subcategory :: destroy($id);
            if($delete) {
                return redirect :: to('/admin/subcategory-list') -> with('successmsg', 'Subcategory has been deleted successfully');
            } else {
                return redirect :: to('/admin/subcategory-list') -> with('errmsg', 'Subcategory delete unsuccessful');
            }
        }
        
    }
}
