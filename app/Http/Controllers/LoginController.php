<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;
use DB;
use App\users;
use Carbon\Carbon;
use Cache;
use Artisan;
use User;
use App\Useractive;
use Alert;



class LoginController extends Controller
{
    public function beforelogin() {
        $logintrue = Session::get('login');
        if($logintrue):
            return redirect()->route('project');
        endif;
        return view('pages.login');
    }
    
    public function login(Request $request){
       
        if(Auth::attempt(['user_id' => $request->userNIK, 'password' => $request->password])):
            Session::put('userID', Auth::user()->user_id);
            Session::put('userpass', '1');
            Session::put('user_id', Auth::user()->user_id);
            Session::put('passwordlogin', Auth::user()->password);
            Session::put('login', true);

            $usernik  = $request->userNIK;
            $password = $request->password;
            $login    = users::select('user_id', 'username')->where('user_id', '=', $usernik)->first();
            $session_id = session()->getId();
            Session::put('session_id', $session_id);
            Cache::put('user_key', $login->user_id);
            Cache::put('session_id', $session_id);

            $userActive = Useractive::select('user_id')->where('user_id', '=', $login->user_id)->first();

            if($userActive):
                Useractive::where('user_id', '=', $userActive->user_id)->delete();
                Useractive::create([
                    'user_id'    => $login->user_id,
                    'session_id' => session()->getId(),
                    'date_login' => Carbon::now('GMT+7'),
                    'date_update'=> Carbon::now('GMT+7'),
                    'ip'         => request()->ip()
                ]);
            else:
                Useractive::create([
                    'user_id'   =>  $login->user_id,
                    'session_id'=>  session()->getId(),
                    'date_login'=>  Carbon::now('GMT+7'),
                    'date_update'=> Carbon::now('GMT+7'),
                    'ip'        =>  request()->ip()
                ]);
            endif;

            return redirect(route('project'));
        else:
            $usernik = $request->userNIK;

            Alert::error('error', 'username or password is wrong');
            return redirect('')->with('data', $usernik);
            // return redirect('')->with('error', 'username or password is wrong')->with('data', $username);
        endif;
    }

    public function logout(Request $request){

        $user_idCache = Cache::get('user_key');
        $session_id   = Cache::get('session_id');
        $session_usernik = Session::get('usernik');
        $adminActive  = Useractive::where('session_id', '=', $user_idCache)->first();

        if($adminActive):
            if($session_id):
                $logout = Useractive::join('wp.users', 'wp.users.user_id', '=', 'wp.user_active.user_id')
                            ->select(
                                'wp.user_active.user_id',
                                'wp.users.user_id'
                            )
                            ->where('wp.user_active.session_id', '=', $session_id)
                            ->first();
                
                Useractive::where('session_id', '=', $session_id)->where('user_id', '=', $user_idCache)->delete();
            endif;
        endif;

        if($adminActive):
            Useractive::where('session_id', '=', $session_id)->where('user_id', '=', $user_idCache)->delete();
        endif;

        $message = Session::get('error');

        if($message):
            $msg = $message;
        else:
            $msg = 'Please login first';
        endif;

        Session::flush();
        Cache::flush();

        Alert::info('Already Log Out', $msg);
        return redirect('/');
    }
}
