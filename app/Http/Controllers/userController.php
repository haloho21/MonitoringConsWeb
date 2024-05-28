<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\vendor;

class userController extends Controller
{
    public function index(){
        $users = users::all();
        $vendors = vendor::all();
        return view('pages.user', compact('users', 'vendors'));
    }
}
