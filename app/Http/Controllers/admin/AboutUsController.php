<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\admin\Company;
use Config;

class AboutUsController extends Controller
{
    public function aboutUsUpdate(Request $request){
        if($request -> method() == 'GET'){
            $data =Company :: all();
            return view('admin/aboutus_list',['aboutUs' => $data]);
        }else if($request ->method() == "POST"){

        }
    }

    public function update(Request $request , $id = ''){
        if($request ->method() == 'GET' || $id != '' ){
            $data = Company ::find($id);
            return view('admin/aboutus_update',['aboutus' => $data]);
        }else if ($request -> method() == "POST"){
            $request->validate([
                'name'  =>'required',
                'tittle'  =>'required',
                'details'  =>'required',   
            ]);
            $id = $request->id;
                 if($request->hasFile('aboutus_image')){
                     $get_file_name = Company::where('id',$id)->select('aboutus_image')->get();
                         foreach($get_file_name as $value){
                         unlink($value->aboutus_image);
                         }
                     $file = $request->file('aboutus_image');
                     $name = $file->getClientOriginalName();
                     $path = "uploads/";
                     $file->move($path, $id.$name);
     
                     $image_name = $path.$id.$name;
     
                     $update_data = Company::where('id', $request->id)->update([
                         'name' => $request->name,
                         'tittle' => $request->tittle,
                         'details' => $request->details,
                         'aboutus_image' => $image_name
                         ]);
                         
                         
                 }else{
                     $update_data = Company::where('id', $request->id)->update([
                        'name' => $request->name,
                        'tittle' => $request->tittle,
                        'details' => $request->details,
                     ]);
              }
                if($update_data){
                    return Redirect::to('/admin/company/about-us/')-> with('successmsg',Config :: get('constants.UPDATE_SUCCESS'));
                }else{
                    return Redirect::to('/admin/company/about-us/')-> with('errmsg', Config :: get('constants.UPDATE_ERROR'));
                }
            
        }
        
    }
}
