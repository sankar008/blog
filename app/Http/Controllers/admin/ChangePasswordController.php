<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Admin;
use Illuminate\Support\Facades\Redirect;
use Session;
use Config;

class ChangePasswordController extends Controller
{
    public function change_password(Request $request) {
        if($request -> method() == 'GET') {
            return view('admin.change_password');
        }
        else if($request -> method() =='POST') {
            $request -> validate([
                'old_pwd' => 'required|min:8',
                'pwd' => 'required|min:8',
                'confirm_pwd' => 'required|min:8|same:pwd'
            ]);

            $loginId=$request -> session() -> get('loginId');
            $loginData=Admin :: where('id', $loginId) -> first();
            if($request -> old_pwd == $loginData -> pwd) {
                if($request -> pwd == $request -> confirm_pwd) {
                    $update_pwd = Admin :: where('id', $loginId) -> update([
                        'pwd' => $request -> pwd
                    ]);
                    if($update_pwd) {
                        return redirect::to('/admin/change-password')-> with('successmsg', Config::get('constants.PASSWORD_CHANGE_SUCCESS'));
                    }
                    else {
                        return redirect::to('/admin/change-password')-> with('errmsg', Config::get('constants.PASSWORD_CHANGE_ERROR'));  
                    }
                }
                else {
                    return redirect::to('/admin/change-password')-> with('errmsg', Config::get('constants.PASSWORD_CONFIRM_ERROR'));
                }
            } else {
                return redirect::to('/admin/change-password')-> with('errmsg', Config::get('constants.OLD_PASSWORD_ERROR'));
            }
        }
    }
}
