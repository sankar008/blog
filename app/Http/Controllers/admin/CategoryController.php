<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Category;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function category_list(Request $request) {
        if($request -> method() =='GET') {
            $data=Category::all();
            return view('admin.category_list', ['category' => $data]);
        }
    }
    public function category_add(Request $request) {
        if($request -> method() == 'GET') {

        }
        else if($request -> method() == 'POST') {
            $request -> validate([
                'name' =>'required'
            ]);
            $duplicateCheck = Category :: where('name', $request->name) -> count();
            if($duplicateCheck == 0) {
                $category = new Category([
                    'name' => $request -> input('name')
                ]);
                $category -> save();
                if($category -> save()) {
                    return redirect :: to('/admin/category-list') -> with('successmsg', 'Category has been added successfully');

                } else {
                    return redirect :: to('/admin/category-list') -> with('errmsg', 'Category added unsuccessful');
                }
            }
            else {
                return redirect :: to('/admin/category-list') -> with('errmsg', 'Category already exists');
            }
               
        }
    }
    public function category_update(Request $request, $id= '') {
        if($request -> method() == 'GET' || $id !='') {
            $data = Category :: where('id', $id) -> first();
            return view('admin.category_update', ['category' => $data]);
        }
        else if($request -> method() =='POST') {
            $request -> validate([
                'name' => 'required'
            ]);
            $duplicateCheck = Category :: where('name', $request -> name) -> count();
            if($duplicateCheck == 0) {
                $update = Category :: where('id', $request -> id) -> update([
                    'name' => $request -> name
                ]);
                if($update) {
                    return redirect :: to('/admin/category-list') -> with('successmsg', 'Category updated successfully');
                } else {
                    return redirect :: to('/admin/category-list') -> with('errmsg', 'Category update unsuccessful');
                }
            } else {
                return redirect :: to('/admin/category-update') -> with('errmsg', 'Category already exists'); 
            }
        }
    }
    public function category_delete(Request $request, $id) {
        if($request -> method() == 'GET')  {
            
            $delete = Category :: destroy($id);
            if($delete) {
                return redirect :: to('/admin/category-list') -> with('successmsg', 'Category has been deleted successfully');
            } else {
                return redirect :: to('/admin/category-list') -> with('errmsg', 'Category delete unsuccessful');
            }
        }
        
        
    }
}
