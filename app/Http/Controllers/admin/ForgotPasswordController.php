<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\admin\Admin;
use App\Http\Controllers\admin\Str;
use Config;
use Mail;

class ForgotPasswordController extends Controller
{
    public function forgotPasswordForm(Request $request) {
       
            return view('admin.forgotPassword');
       
    }    
    public function send_verification_code(Request $request) {
            $mailTo = $request -> post('email');
           
            if(Admin::where(['email' => $mailTo]) -> count() > 0) {
                
                $loginData = Admin :: where(['email' => $mailTo])->first();
            
                $loginId = Admin :: find($loginData -> id);
                
                $verification_code = rand(1000,9999);
                $verificationcode_update = Admin :: where('id', $loginData->id) -> update([
                    'verification_code' => $verification_code
                ]);
               
                if($verificationcode_update){
                    Mail::send('mail.forgotPassword_verifyCode', ['verification_code' => $verification_code], function($message) use($mailTo){
                        $message->to($mailTo)->subject('Verification Code For Reset Password');
                        
                    });

                    $request->session()->put('forgotPasswordId',$loginData -> id );

                    return redirect::to('/admin/verify-code')->with('successmsg', Config :: get('constants.VERIFICATION_SUCCESS'));
                }
                else {
                    return redirect :: to ('admin/forgot-password') -> with('errmsg', Config :: get('constants.EMAIL_ERROR'));
                }
               
            } else {
                return redirect :: to ('admin/forgot-password') -> with('errmsg', Config :: get('constants.EMAIL_ERROR'));
            }
    }

    public function verify_code(Request $request) {
        return view('admin.verify_code');
    }

    public function check_verification_code(Request $request) {

        $user_code =$request->post('verification_code');
        $VerifyMail_id = $request->session() ->get('forgotPasswordId');
        $mail_id = Admin::find($VerifyMail_id);
        if($user_code == $mail_id->verification_code){
            return redirect::to('/admin/reset-password')-> with('successmsg', "Verification Succesful"); 
        }
        else{
            return redirect::to('/admin/verify-record')-> with('errmsg', "You entered Code Not Match");
        }

    }

    
    public function reset_password(Request $request) {
        if($request -> method() == 'GET') {
            
            //print_r($data);
            //die;
            return view('admin.reset_password');
        }
        elseif($request -> method() == 'POST') {
            $VerifyMail_id = $request->session() ->get('forgotPasswordId');
            if($request->post('confirm_pwd') == $request->post('pwd')){
                $update = Admin::where('id', $VerifyMail_id)->update([
                        'email' => $request->email,
                        'pwd' => $request->pwd
                ]);
            }else{
                return redirect::to('/admin/reset-password')-> with('errmsg', Config :: get('constants.PASSWORD_ERROR')); 
            }  
           if($update){
            return redirect::to('/')-> with('successmsg', "Password Reset Succesfully");
           }else{
            return redirect::to('/admin/reset-password')-> with('errmsg', "Email Id and Password Not Reset");  
           }
        }
        

    }
    
        
    
}
