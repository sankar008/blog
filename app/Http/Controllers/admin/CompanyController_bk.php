<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Company;

class CompanyController extends Controller
{
    public function list(Request $request){
        if($request ->method() == 'GET'){
            $data =Company :: all();
            return view('admin/company_list',['company'=>$data]);
        }
   }

  
  public function update(Request $request , $id = ''){    
       if($request ->method() == 'GET' || $id != '' ){
           $data = Company ::find($id);
           return view('admin/update_company',['company' => $data]);
       }else if ($request -> method() == "POST"){
           $request->validate([
               'name'  =>'required',
               'email'  =>'required',
               'mobile_no'  =>'required',
               'address'  =>'required',
               'facebook_link' => 'required',
               'twitter_link' => 'required'
           ]);
           $id = $request->id;
                if($request->hasFile('image')){
                    $get_file_name = Company::where('id',$id)->select('image')->get();
                        foreach($get_file_name as $value){
                        unlink($value->image);
                        }
                    $file = $request->file('image');
                    $name = $file->getClientOriginalName();
                    $path = "uploads/";
                    $file->move($path, $id.$name);
    
                    $image_name = $path.$id.$name;
    
                    $update_data = Company::where('id', $request->id)->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'mobile_no' => $request->mobile_no,
                        'address' => $request->address,
                        'facebook_link' => $request->facebook_link,
                        'twitter_link' => $request->twitter_link,
                        'image' => $image_name
                        ]);
                        
                        $request->session()->put('com_logo',$image_name);
                        
                }else{
                    $update_data = Company::where('id', $request->id)->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'mobile_no' => $request->mobile_no,
                        'facebook_link' => $request->facebook_link,
                        'twitter_link' => $request->twitter_link,
                        'address' => $request->address
                    ]);
             }
               if($update_data){
                   return Redirect::to('/admin/company')-> with('successmsg',"Company Update Succesfully");
               }else{
                   return Redirect::to('/admin/company')-> with('errmsg',"Company Not Update");
               }
           
       }
       
    }


  
}
