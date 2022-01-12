<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Subcategory;
use App\Models\admin\Category;
use Illuminate\Support\Facades\Redirect;
use Config;

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
                    return redirect :: to('/admin/subcategory-list') -> with('successmsg', Config::get('constants.ADD_SUCCESS'));

                } else {
                    return redirect :: to('/admin/subcategory-list') -> with('errmsg', Config::get('constants.ADD_ERROR')) -> withInput($request -> all);
                }
            } else {
                return redirect :: to('/admin/subcategory-list') -> with('errmsg', Config::get('constants.SUBCATEGORY_DUPLICATE_ERROR')) -> withInput($request -> all);
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
          
            $duplicateCheck =  Subcategory::where('name',$request->name)-> where('id', '!=', $request->id) -> count();
            if($duplicateCheck == 0) {
                $update = Subcategory :: where('id', $request -> id) -> update([
                    'category_id' => $request -> category_id,
                    'name' => $request -> name
                ]);
                
                if($update) {
                    return redirect :: to('/admin/subcategory-list') -> with('successmsg', Config::get('constants.UPDATE_SUCCESS'));
                } else {
                    return redirect :: to('/admin/subcategory-list') -> with('errmsg', Config::get('constants.UPDATE_ERROR'));
                }
            } else {
                return redirect :: to('admin/subcategory-update/'.$request -> id) -> with('errmsg', Config::get('constants.SUBCATEGORY_DUPLICATE_ERROR'));
            }
        }
    }
    public function sub_category_delete(Request $request, $id) {
        if($request -> method() == 'GET') {
            $delete = Subcategory :: destroy($id);
            if($delete) {
                return redirect :: to('/admin/subcategory-list') -> with('successmsg', Config::get('constants.DELETE_SUCCESS'));
            } else {
                return redirect :: to('/admin/subcategory-list') -> with('errmsg', Config::get('constants.DELETE_ERROR'));
            }
        }
        
    }
    
}
