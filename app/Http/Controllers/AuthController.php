<?php

namespace App\Http\Controllers;

use App\Mail\VerificationEmail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Notifications\VerifyEmail;
use App\Notifications\NotifyAdmin;

class AuthController extends Controller
{
   public function signupform()
    {
    	return view('auth.signup');
    }

    public function signupsubmit(AuthRequest $request)
    {
    	// return $request->all();

    	$user 			                    = new User();
      $user->name                     = $request->name;
    	$user->phone_number             = $request->phone_number;
    	$user->email                    = strtolower($request->email);
      $user->password                 = bcrypt($request->password);
    	$user->email_verification_token =  Str::random(40);

    	$user->save();

      // Mail::to($user->email)->queue(new VerificationEmail($user));
      $user->notify(new VerifyEmail($user));
      
      $admin = User::find(2);
      $admin->notify(new NotifyAdmin($user));
      

    	session()->flash('message','Created Successfully!');
    	return redirect()->back();

    }


    public function loginshow()
    {
    	return view('auth.loginuser');
    }


   public function loginform(LoginRequest $request)
    {
      $user = Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]);
       $user = auth()->user();
       $user->last_login = Carbon::now();
       $user->save();
    	 if($user){
             if($user->email_verified == 0){
                 session()->flash('message','Your account has not verified. Please verify it');
                 return redirect()->to('loginshow');
                 auth()->logout();
             }
    	 	
    	 }else{
    	 return redirect()->to('/');
    
    }

}
//Verify Email Code here

   public function verifyemailToken($mailTokenUse)
    {
      // dd($mailTokenUse);
      // //check token null
      //   if($mailTokenUse == null){
      //       session()->flash('message','Invalid Token!');
      //       return redirect()->to('loginshow');
      //   }

      //   //check email_verification_token  null

      //   $user = User::where('email_verification_token',$mailTokenUse)->first();
      //   if($user == null){
      //       session()->flash('message','Invalid Token!');
      //       return redirect()->to('loginshow');

      //   }

      //   //check email_verification_token  null

      //   $user->update([
      //       'email_verified' => 1,
      //       'email_verification_token' => '',
      //       'email_verified_at' => Carbon::now(),
      //   ]);

      //    session()->flash('message','Your account activated . You can login Now');
      //    return redirect()->to('loginshow');

    }

}
