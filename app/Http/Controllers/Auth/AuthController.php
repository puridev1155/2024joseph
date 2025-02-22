<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; // Import the correct Controller class
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\App;
use App\Models\User;
use App\Models\PasswordReset;
use App\Models\Application;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loadRegisterForm(){
        return view("register");
    }

    public function registerUser(Request $request)
{

    try {

        App::setLocale('ko');
        // Perform validation
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'phone' => 'required|unique:users',
            'birth' => 'required',
            'gender' => 'nullable',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'nullable'
        ]);


        // Additional fields
        $validated['name'] = $request->name;
        $validated['username'] = $request->username;
        $validated['phone'] = $request->phone;
        $validated['birth'] = $request->birth;
        $validated['email'] = $request->email;
        $validated['gender'] = $request->gender;
        $validated['role'] = 10;
        $validated['is_agree_push'] = 1;
        $validated['password'] = Hash::make($request->password);


       // Log::info('Validated request data.', ['validated' => $validated]);

        // Insert data into the database
        User::insert($validated);

        return redirect('/login/form')->with('success', '에녹메리선교회에 가입되었습니다. 감사합니다!');
    } catch (\Exception $e) {
        Log::error('Registration failed.', ['error' => $e->getMessage()]);

        return redirect('/registration/form')->with('error', $e->getMessage());
    }
}


public function loadLoginPage(){
    return view('login-page');
}

// this perform login functionality
public function LoginUser(Request $request){
    $request->validate([
        'email' => 'required',
        'password' => 'required|min:6|max:20',
    ]);
    
    try {
        // login logic here
        $userCredentials = $request->only('email','password');

        if(Auth::attempt($userCredentials)){
            // redirect user to home page based on role 
            // this allow us to use single login page to authenticate users with different roles..

            if(auth()->user()->role == 10){ //here role is a column I added in users table
                return redirect('/');
            } else {
                return redirect('/')->with('error','Error to find your role');
            }
            
        } else{
            return redirect('/login/form')->with('error','비밀번호가 틀렸습니다.');
        }
    } catch (\Exception $e) {
        return redirect('/login/form')->with('error',$e->getMessage());
    }
}

public function loadProfileUser() {

    if(!Auth::user()) {
        return redirect('/login/form')->with('error','로그인해주세요.');
    }

    $application = Application::selectRaw('status1, status2, status3, opening')->where('user_id', Auth::user()->id)->first();
    $opening = $application->opening ?? 1;
    if($application) {
        $application = (int)$application->status1 + (int)$application->status2 + (int)$application->status3;
        if($application == 1) {
            $count = '30%';
        } else if ($application == 2) {
            $count = '60%';
        } else if ($application == 3) {
            $count = '100%';
        } else {
            $count = '10%';
        }
    } else {
        $count = '10%';
    }

    

    if(Auth::user()) {
        $data = Auth::user();
        return view('mypage', compact(['data', 'count', 'opening']));
    }

    return redirect('/login/form');

}
// perform logout function here
public function LogoutUser(Request $request){
    Session::flush();
    Auth::logout();
    return redirect('/login/form');
}
// this for password resetting..
public function forgotPassword(){
    return view('forgot-password');
}

// perform email sending logic here
public function forgot(Request $request){


    // validate here
    $request->validate([
        'email' => 'required'
    ]);
    // check if email exist
    $user = User::where('email',$request->email)->get();


    if(count($user) > 0){
        $token = Str::random(40);
        $domain = URL::to('/');
        $url = $domain.'/reset/password?token='.$token;

        $data['url'] = $url;
        $data['email'] = $request->email;
        $data['title'] = '비밀번호 변경하기';
        $data['body'] = '링크를 클릭하여 비밀번호를 변경해주세요.';

        Mail::send('forgetPasswordMail',['data' => $data], function($message) use ($data){
            $message->to($data['email'])->subject($data['title']);
        });

        $passwordReset = PasswordReset::where('email', $request->email)->first();

        if($passwordReset) {
            $passwordReset->update([
                "token" => $token
            ]);
        } else {
            $passwordReset = new PasswordReset;
            $passwordReset->email = $request->email;
            $passwordReset->token = $token;
            $passwordReset->save();
        }

        return back()->with('success','이메일에 링크가 전송되었습니다. 확인바랍니다.');
    } else {
        return redirect('/forgot/password')->with('error','메일이 존재하지 않습니다. 회원가입하세요.');
    }

}

public function loadResetPassword(Request $request){
    $resetData = PasswordReset::where('token',$request->token)->get();
    if(isset($request->token) && count($resetData) > 0){
        $user = User::where('email',$resetData[0]['email'])->first();
        return view('reset-password',compact('user'));
    }else{
        return view('404');
    }
}

// perform password reset logic here

public function ResetPassword(Request $request){
    $request->validate([
        'password' => 'required|min:6|max:8|confirmed'
    ]);
    try {

        $user = User::where('id', $request->user_id)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        // delete reset token
        PasswordReset::where('email',$request->user_email)->delete();

        return redirect('/login/form')->with('success','비밀번호가 변경되었습니다.');
    } catch (\Exception $e) {
        return back()->with('error',$e->getMessage());
    }
}

public function load404(){
    return view('404');
}
}
