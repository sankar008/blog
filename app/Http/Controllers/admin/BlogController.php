<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Blog;
use App\Models\admin\Category;
use App\Models\admin\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Config;


class BlogController extends Controller
{
    public function blog_list(Request $request) {
        if($request -> method() =='GET') {
            $data = Blog :: all();
            $category = Category::get();
            $sub_category = Subcategory::get();
            return view('admin.blog_list', ['blog' => $data, 'category' => $category, 'subcategory' => $sub_category]);
        }
    }
    public function blog_add(Request $request) {
        if($request -> method() == 'GET') {
            $category_data = Category::all();
            $subcategory_data = Subcategory::all();

            return view('admin.blog_add_form', ['category' => $category_data, 'subcategory' => $subcategory_data]);

        }
        else if($request -> method() == 'POST') {
           $request -> validate([
                'category_id'  =>'required',
                'subcategory_id'  =>'required',
                'title' => 'required',
                'short_description' => 'required',
                'description' => 'required',
                'image' => 'required|max:2048'  /* 2 MB */ 
           ]);

            $duplicateCheck = Blog :: where('title', $request -> title) -> count();
            if($duplicateCheck == 0) {
                $slug = Str::slug($request->title, '-');
                $blog = new Blog([
                    'category_id' =>$request->input('category_id'),
                    'subcategory_id' =>$request->input('subcategory_id'),
                    'title' => $request -> input('title'),
                    'short_description' => $request -> input('short_description'),
                    'description' => $request -> input('description'),
                    'image' => 1,
                    'slug_name' => $slug,
                ]);

                $blog -> save();

                $lastId = $blog -> id;
                $image=array();
                if($file = $request->file('image')) {
                    foreach($file as $file) {
                        $name = $file->getClientOriginalName();
                        $path = "uploads/";
                        $file->move($path, $lastId.$name);
                        $image_name = $path.$lastId.$name;
                        $image[] = $image_name;
                    }
                
                    $update_image = Blog :: where('id', $lastId) -> update([
                        'image' => implode('|', $image)
                    ]);
                
                    if($update_image) {
                        return redirect :: to('/admin/blog-list') -> with ('successmsg', Config::get('constants.ADD_SUCCESS'));
                    } else {
                        return redirect :: to('/admin//blog-add') -> with ('errmsg', Config::get('constants.ADD_ERROR')) -> withInput($request -> all);
                    }
                }    
            } else {
                return redirect :: to('/admin/blog-add') -> with ('errmsg', 'Blog Title already exists') -> withInput($request -> all);
            }
            
        }
    }
    public function blog_update(Request $request, $id = '') {
        if($request -> method() == 'GET' || $id != '') {
            $data = Blog :: where('id', $id)->first();
            $category_data = Category::all();
            $subcategory_data = Subcategory::where('category_id', $data ->category_id) ->get();
            return view('admin.blog_update', ['blog' => $data, 'category' => $category_data, 'subcategory' => $subcategory_data]);
        }
        else if($request -> method() == 'POST') {
            $request -> validate([
                'category_id'  =>'required',
                'subcategory_id'  =>'required',
                'title' => 'required',
                'short_description' => 'required',
                'description' => 'required'        
            ]);
            
            $duplicateCheck = Blog :: where('title', $request -> title)->where('id','!=', $request->id) -> count();
            if($duplicateCheck == 0) {
               
                $slug = Str :: slug($request -> title, '-');
                if($request -> hasFile('image')) {
                    $file_name = Blog :: where('id', $id) -> select('image') -> get();
                    
                    foreach($file_name as $file) {
                        @unlink($file -> image);
                    }
                    $lastId = $request -> id;
                    
                    $image = array();
                    if($file = $request -> file('image')) {
                        foreach($file as $file) {
                            $name = $file ->getClientOriginalName();
                            $path = 'uploads/';
                            $file -> move($path, $lastId.$name);
                            $image_name = $path.$lastId.$name;
                            $image[] = $image_name;
                        }
                        
                        $update = Blog :: where('id', $request -> id) -> update([
                            'category_id' => $request -> category_id,
                            'subcategory_id' => $request -> subcategory_id,
                            'title' => $request -> title,
                            'short_description' => $request -> short_description,
                            'description' => $request -> description,
                            'image' =>implode('|', $image),
                            'slug_name' => $slug,
                        ]);
                        
                    }
                } else {
                    $update = Blog :: where('id', $request -> id) -> update([
                        'category_id' => $request -> category_id,
                        'subcategory_id' => $request -> subcategory_id,
                        'title' => $request -> title,
                        'short_description' => $request -> short_description,
                        'description' => $request -> description,
                        'slug_name' => $slug,
                    ]);   
                    
                }
                if($update) {
                    return redirect :: to ('/admin/blog-list') -> with('successmsg',Config::get('constants.UPDATE_SUCCESS'));
                } else {
                    return redirect :: to ('/admin/blog-update/'.$request -> id) -> with('errmsg', Config::get('constants.UPDATE_ERROR'));
                }
            } else {
                return redirect :: to ('/admin/blog-update/'.$request -> id) -> with('errmsg', ('Blog Title already exists'));
            }
        }

    } 
    public function blog_delete(Request $request, $id) {
        if($request -> method() == 'GET') {
            $delete = Blog :: destroy($id);
            if($delete) {
                return redirect :: to('admin/blog-list') -> with ('successmsg', Config::get('constants.DELETE_SUCCESS'));
            } else {
                return redirect :: to('admin/blog-list') -> with ('errmsg', Config::get('constants.DELETE_ERROR'));     
            }

        }

    }
    public function getSubCategory(Request $request){
        if($request ->method() == 'GET'){
             $category_id = $request->get('category_id'); 
             $get_subCategory = Subcategory::where('category_id',$category_id)->get();
              $option = '<option value="">Select A Subcategory</option>';
              foreach($get_subCategory as $key => $item){
              $option = $option." "."<option value=".$item -> id." >".$item -> name."</option>";
              }
 
              echo $option;
            
        }
     }
}
