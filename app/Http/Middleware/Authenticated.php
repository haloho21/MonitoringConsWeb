<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Useractive;
use App\users;
use Session;
use Cache;
use DB;
use Artisan;
use Response;

class Authenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $user_idCache = Cache::get('user_key');
        $session_id = Cache::get('session_id');
        
        if($session_id == NULL):
            $session_id = Session::get('session_id');
        else:
            $session_id = $session_id;
        endif;

        $logout = Useractive::join('wp.users', 'wp.users.user_id', '=', 'wp.user_active.user_id')
                    ->select(
                        'wp.user_active.user_id',
                        'wp.users.user_id'
                    )
                    ->where('wp.user_active.session_id', '=', $session_id)
                    ->first();
        

        if(Session::get('login')):
            $usr            =   Session::get('userID');
            $user_active    =   Useractive::where('user_id', '=', $usr)->first();
            $cache_user     =   Useractive::where('user_id', '=', $usr)->first();
            $user           =   users::where('user_id', '=', $usr)->first();
            // $user_changePwd =   users::where('user_id', '=', $usr)->first();
            // dd($_SERVER['HTTP_REFERER']);

            Artisan::call('route:clear');
            Artisan::call('config:clear');
            Artisan::call('view:clear');

            // if(isset($user_changePwd->password)):
            //     // dd('db');
            //     $chngepwd = $operator_changePwd->password;
            // else:
            //     // dd('dc');
            //     $chngepwd = 0;
            // endif;
            $response = $next($request);
            
           return $response->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
            ->header('Pragma','no-cache')
            ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
            
            // return Response::view('pages.dashboard')->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        else:
    

            $USID           = Session::get('userID');
            $sessionIDLogin = Session::get('session_id');

            Useractive::where('session_id', '=', $sessionIDLogin)->where('user_id', '=', $USID)->delete();
            Cache::flush();

            return redirect()->route('logout')->with('error', 'Please Login first');
        endif;
    }
}
